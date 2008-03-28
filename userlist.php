<?php 
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );

	read_config();

	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'moderation' );
		
	// ---------------
	// POST PROCESSING
	// ---------------
	
	function page_content() {
		$content_template = new Template(TEMPLATE_DIR.'admin/userlist.tpl');
	
		if (array_key_exists('id',$_GET)) {
			if (preg_match('/^(\d{10})/', smartstripslashes(urldecode($_GET['id'])), $matches)) {
				$id = $matches[0]; // Valid ID
			}
		}
	
		if (!empty($id) && array_key_exists('command',$_GET) && $_GET['command'] == 'delete' ) { // Delete
			$result = fileio::delete_file(USER_DIR.$id.'.txt');
			delete_users_cache();
			redirect_to_url('userlist.php');
			exit;
		}
		
		
		// ----- Paginated List View -----
		$record_arr = get_users_cache();
		
		
		// Paginate Results
		$startpage = 1;
		$itemsperpage = 20;
		$maxpage = ceil(count($record_arr)/$itemsperpage);
		if (array_key_exists('page',$_GET) && is_numeric(intval($_GET['page']))) {
			$p = intval($_GET['page']);
			if ($p > 0 && $p <= $maxpage) {
				$startpage = $p;
			}
		}
		$startindex = max(0,($startpage-1) * $itemsperpage);
		$endindex = min(count($record_arr)-1,$startpage * $itemsperpage-1);
		
		// Display Results
		for ($i=$startindex; $i<=$endindex; $i++) {
			$record = $record_arr[$i];
			
			$t = new Template($record->html_template);
			
			$edit_button = '<a href="useradd.php?id='.$record->getTag('ID').'&command=edit">Edit</a>';
			$delete_button = '<a href="userlist.php?id='.$record->getTag('ID').'&command=delete" onclick="return confirmDelete(\'Are you sure you want to delete this?\');">Delete</a>';
			
			$t->setTag('{EDIT_BUTTON}', $edit_button); // Edit button
			$t->setTag('{DELETE_BUTTON}', $delete_button); // Delete button
			$t->setTag('{EDIT_DELETE}','<span>'.$edit_button.'&nbsp;&nbsp;'.$delete_button.'</span>'); // Both together
			
			$str = $record->getHTML($t);
			
			$content_template->appendTag('{MAIN}', $str);
		}
	
		// Create Page Navigation
		if ($maxpage > 1) {
			$pagenav = '<p>Page ';
			for ($i=1; $i<=$maxpage; $i++) {
				if ($i == $startpage) {
					$pagenav .= "$i";
				} else {
					$pagenav .= "<a href=\"/userlist.php?page=$i\">$i</a>";
				}
				if ($i != $maxpage) {
					$pagenav .= " | ";
				}
			}
			$pagenav .= '</p>';
			
			// Append to Page
			$content_template->appendTag('{MAIN}', $pagenav);
			$content_template->prependTag('{MAIN}', $pagenav);
		}
		
		$content_template->prependTag('{RECORD_COUNT}', count($record_arr));
		
		
		// PAGE CONTENT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		$entry_array[ 'entry' ] = $content_template->getHTML();
		
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
	}

	// ----
	// HTML
	// ----
	
	// Main Page Template
	$page_template = new Template(TEMPLATE_DIR.'layouts/index.tpl');
	
	// Meta Data
	get_init_code($page_template);
	
	// Page Title
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '.$GLOBALS['lang_string']['title']);
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
	
	// trace(resource_report());
?>
