<?php 
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	if ( !session_id() ) {
		session_start();
	}

	read_config();

	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'comments' );
	
	// ---------------
	// POST PROCESSING
	// ---------------

	// Verify information being passed
	global $ok;
	$ok = true;
	if (isset( $_GET[ "comment" ] ) ) {
		// Get the filename of the comment file to be approved
		$filename = 'content/' . $_GET[ 'y' ] . '/' . $_GET[ 'm' ] . '/' . sb_strip_extension( $_GET[ "entry" ] ) . '/comments/' . $_GET[ "comment" ];

		// Copy that item into the array for populating a new item
		$comment_entry_data = comment_to_array( $filename );

		// Delete the current one so I can create a new one
		sb_delete_file( $filename );

		// Now create the new file with a modded flag
		// write_comment( $y, $m, $entry, $comment_name, $comment_email, $comment_url, $comment_remember, $comment_text, $user_ip, $hold_flag )
		$ok = write_comment( $_GET[ 'y' ], $_GET[ 'm' ], $_GET[ 'entry' ],
                                 $comment_entry_data[ 'NAME' ],
                                 $comment_entry_data[ 'EMAIL' ],
                                 $comment_entry_data[ 'URL' ],
                                 '',
                                 $comment_entry_data[ 'CONTENT' ],
                                 $comment_entry_data['IP-ADDRESS'],
                                 '' );

	} else {
		$ok = 'Error! Comment cannot be approved. Unknown error.';
	}

	if ( $ok == true ) {
		redirect_to_url( 'comments_moderation.php' );
	}
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $user_colors, $ok;

		if ( $ok !== true ) {
			echo $lang_string[ 'error_ban' ] . $ok . '<p />';
		} else {
			echo $lang_string[ 'success_ban1' ] . '(' . $_GET[ "ban" ] . ')' . $lang_string[ 'success_ban2' ] . '<p />';
		}

		echo( '<a href="index.php">' . $lang_string[ 'home' ] . '</a><br /><br />' );
	}
	
	// ----
	// HTML
	// ----
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />

	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<?php require_once('scripts/sb_javascript.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>

	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
	<?php 
		// ------------
		// BEGIN OUTPUT
		// ------------
		global $blog_config;
		if ( $blog_config[ 'blog_comments_popup' ] == 1 ) {
			theme_popuplayout();
		} else {
			theme_pagelayout();
		}
	?>
</html>
