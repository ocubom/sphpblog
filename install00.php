<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, false );
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $blog_config;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('install00_title');
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		echo( _sb('install00_instructions') . '<p />' );
		?>
			<form action="install01.php" method="post">
				<?php
					$translation_arr = get_installed_translations();
					
					$dropdown_arr = array();
					for ($i=0; $i < count($translation_arr); $i++) {				
						$lang_dir = $translation_arr[$i]['directory'];
						$lang_name = $translation_arr[$i]['name'];
						
						$item = array();
						$item['label'] = $lang_name;
						$item['value'] = $lang_dir;
						if ( $blog_config->getTag('BLOG_LANGUAGE') == $item['value'] ) {
							$item['selected'] = true;
						}
						array_push( $dropdown_arr, $item );
						
					}

                                        // sort array
                                        // Obtain a list of columns
                                        $label = array();
                                        for ($i = 0; $i < sizeof($arr); $i++) {
                                                $label[] = $arr[$i]['label'];
                                        }
                                        array_multisort($label, $arr);

					echo( HTML_dropdown( _sb('blog_choose_language'), "blog_language", $dropdown_arr ) );
				?>
				<p />
				
				<input type="submit" name="submit" value="<?php echo( _sb('submit_btn') ); ?>" />
			</form>
		<?php 
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '. _sb('install00_title'));
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
