<?php 
	// --------------------------
	// Simple PHP Blog Theme File
	// --------------------------
	//
	// Name: Modern Theme
	// Author: Alexander Palmo
	// Version: 0.4.5
	//
	// Description:
	// This the is default theme for Simple PHP Blog. You can use
	// this as a template for your own themes.
	//
	// All graphic will be relative to the base-url (i.e. the folder
	// where index.php is located.) 
	
	theme_init();
	
	// ---------------
	// Theme Variables
	// ---------------
	function theme_init () {
		global $theme_vars;
		
		$theme_vars = array();
		
		// New 0.3.8
		//
		// Optional:
		// "content_width" and "menu_width" area used internally
		// within the theme only. (optional but recommended.)
		$theme_vars[ 'content_width' ] = 550;
		$theme_vars[ 'menu_width' ] = 200;
		
		// Required:
		// "popup_window" "width" and "height" are used to determine
		// the size of window to open for the comment view.
		$theme_vars[ 'popup_window' ][ 'width' ] = $theme_vars[ 'content_width' ] + 50;
		$theme_vars[ 'popup_window' ][ 'height' ] = 600;
		
		// Optional:
		// "popup_window" "content_width" is only used internally.
		$theme_vars[ 'popup_window' ][ 'content_width' ] = $theme_vars[ 'content_width' ];
		
		// Retained from 0.3.7c
		//
		// Required:
		// Determines the maximum with of images within a page.
		// Make sure this value is less then "content_width" or you
		// might have wrapping problems.
		//
		// Also, the "66" number is somewhat determined by the css
		// styles that you have applied. If you adjust the margins or
		// padding then these will change.
		$theme_vars[ 'max_image_width' ] = $theme_vars[ 'content_width' ] - 66;
	}
	
	// Function:
	// theme_blogentry( $entry_array )
	//
	// Theme for Blog Entries
	// ----------------------
	// All data is stored the $entry_array associative array and
	// passed to the function. Keep in mind that multiple languages
	// are used. So, try not to hard-code "english" strings. If
	// you are creating graphics for buttons, try to use icons
	// instead of words.
	//
	// (Please note, the "\n" at the end of the echo() command adds
	// a return charater in the HTML source. This is standard PHP
	// behavior. Note the "\n" will not work for this. It has to be
	// surrounded by double-quotes.)
	//
	// The array could contains the following keys:
	// $entry_array[ 'subject' ]          = String: Subject line
	// $entry_array[ 'date' ]             = String: Date posted in the appropriate language and format.
	// $entry_array[ 'entry' ]            = String: The body of the blog entry
	// $entry_array[ 'logged_in' ]       = Boolean: True if user is logged in (used to determine whether to show "edit" and "delete" buttons)
	// $entry_array[ 'edit' ][ 'url' ]      = String: URL
	// $entry_array[ 'edit' ][ 'name' ]     = String: The word "edit" in the appropriate language.
	// $entry_array[ 'delete' ][ 'url' ]    = String: URL
	// $entry_array[ 'delete' ][ 'name' ]   = String: The word "delete" in the appropriate language.
	// $entry_array[ 'comment' ][ 'url' ]   = String: URL
	// $entry_array[ 'comment' ][ 'name' ]  = String: This will be "add comment", "1 comment", or "2 comments" in the appropriate language.
	// $entry_array[ 'comment' ][ 'count' ] = String: The number of "views" in the appropriate language.
	// $entry_array[ 'count' ]            = Integer: Index of current entry (i.e. use this if you want to add a line after every entry except the last one...)
	// $entry_array[ 'maxcount' ]         = Integer: Total number of entries
	// $entry_array[ 'categories' ]         = array: String names of categories
	// (There are some more, just look through the code...)
	function theme_blogentry ( $entry_array ) {
		global $user_colors, $blog_theme, $blog_config;
		
		// Default image path.
		$img_path = "themes/" . $blog_theme . "/images/";
		
		$blog_content = "";
		$blog_content = $blog_content . "\n<!-- BLOG ENTRY BEGIN -->\n";
		
		// New 0.4.4
		// You must have this if you are using the trackback feature.
      if ( $blog_config[ "blog_trackback_enabled" ] ) {
   		$blog_content = $blog_content . "<!--\n";
   		$blog_content = $blog_content . '<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"' . "\n";
   		$blog_content = $blog_content . '         xmlns:dc="http://purl.org/dc/elements/1.1/"' . "\n";
   		$blog_content = $blog_content . '         xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/">' . "\n";
   		$blog_content = $blog_content . '<rdf:Description' . "\n";
   		$blog_content = $blog_content . '    rdf:about="' . $entry_array[ 'permalink' ][ 'url' ] . '"' . "\n";
   		$blog_content = $blog_content . '    dc:identifier="' . $entry_array[ 'permalink' ][ 'url' ] . '"' . "\n";
   		$blog_content = $blog_content . '    dc:title="' . $entry_array[ 'subject' ] . '"' . "\n";
   		$blog_content = $blog_content . '    trackback:ping="' . $entry_array[ 'trackback' ][ 'ping_url' ] . '" />' . "\n";
   		$blog_content = $blog_content . '</rdf:RDF>' . "\n";
   		$blog_content = $blog_content . '-->' . "\n";
	   }
	   
		// Display SUBJECT Line
		$blog_content = $blog_content . "\n<!-- BLOG TITLE BEGIN -->\n";
		$blog_content = $blog_content . '<div class="blog_title">' . $entry_array[ 'subject' ] . '<a name="' . $entry_array[ 'id' ] . '">&nbsp;</a>' . "<br />\n";
		
		// Display EDIT and DELETE buttons if the user is logged in.
		if ( isset( $entry_array[ 'logged_in' ] ) && $entry_array[ 'logged_in' ] == true ) {
			$blog_content = $blog_content . "\t" . '<span class="blog_title_buttons">' . "\n";
			
			// Show "edit" and "delete" buttons if the user is logged-in...
			if ( isset( $entry_array[ 'edit' ][ 'url' ] ) ) {
				$blog_content = $blog_content . "\t\t" . '<a href="' . $entry_array[ 'edit' ][ 'url' ] . '"><img src="' . $img_path . 'box_right.png" title="' . $entry_array[ 'edit' ][ 'name' ] . '" alt="' . $entry_array[ 'edit' ][ 'name' ] . '" width="14" height="14" /> </a>' . "\n";
			}
			if ( isset( $entry_array[ 'delete' ][ 'url' ] ) ) {
				$blog_content = $blog_content . "\t\t" . '<a href="' . $entry_array[ 'delete' ][ 'url' ] . '"><img src="' . $img_path . 'box_cancel.png" title="' . $entry_array[ 'delete' ][ 'name' ] . '" alt="' . $entry_array[ 'delete' ][ 'name' ] . '" width="14" height="14" /> </a>' . "\n";
			}
			
			$blog_content = $blog_content . "\t</span>\n";
		}
		
		$blog_content = $blog_content . "</div>\n";
		$blog_content = $blog_content . "\n<!-- BLOG TITLE BEGIN -->\n";
		
		$blog_content = $blog_content . "\n<!-- BLOG BODY BEGIN -->\n";
		$blog_content = $blog_content . '<div class="blog_body">' . "\n\t";
		
		// Display DATE
		$blog_content = $blog_content . "<div class=\"blog_date\">" . $entry_array[ 'date' ];
		
		// Display CATEGORIES
		// This is an array. There can be multiple categories per entry.
		if ( array_key_exists( "categories", $entry_array ) ) {
			$blog_content = $blog_content . " - ";
			for ( $i = 0; $i < count( $entry_array[ 'categories' ] ); $i++ ) {
				$blog_content = $blog_content . $entry_array[ 'categories' ][$i];
				if ( $i < count( $entry_array[ 'categories' ] ) - 1 ) {
					$blog_content = $blog_content . ", ";
				}
			}
		}
		$blog_content = $blog_content . "</div>\n\t\t";
		
		// Display BODY TEXT
		$blog_content = $blog_content . $entry_array[ 'entry' ];
		$blog_content = $blog_content . "\n\t</div>";
		$blog_content = $blog_content . "\n<!-- BLOG BODY END -->\n";
		
		
		$blog_content = $blog_content . "\n<!-- BLOG FOOTER BEGIN -->\n";
		// Display ADD COMMENT, COUNT,TRACKBACK, PERMALINK, and RATING
		$comment_area = "";
		if ( isset( $entry_array[ 'comment' ][ 'url' ] ) ) {
			// Show "add comment" button if set...
			$comment_area = $comment_area . '<a href="' . $entry_array[ 'comment' ][ 'url' ] . '">' . $entry_array[ 'comment' ][ 'name' ] . ' </a>' . "\n";
		}
		
		if ( isset( $entry_array[ 'comment' ][ 'count' ] ) ) {
			// Show "( x views )" string...
			$comment_area = $comment_area . " ( " . $entry_array[ 'comment' ][ 'count' ] . " )\n";
		}
		
		if ( isset( $entry_array[ 'trackback' ][ 'url' ] ) ) {
			// Show 'trackback' string...
			$comment_area = $comment_area . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="' . $entry_array[ 'trackback' ][ 'url' ] . '">' . $entry_array[ 'trackback' ][ 'name' ] . '</a>' . "\n";
		}
		
		if ( $blog_config['blog_enable_permalink']){// New for 0.4.6
			if ( isset( $entry_array[ 'permalink' ][ 'url' ] ) ) {
				// Show 'permalink' string...
				$comment_area = $comment_area . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="' . $entry_array[ 'permalink' ][ 'url' ] . '">' . $entry_array[ 'permalink' ][ 'name' ] . '</a>' . "\n";
			}
		}
		
		if ( isset( $entry_array['relatedlink']['url'] ) ) {
			// Show 'relatedlink' symbol - New to 0.4.6
			$comment_area = $comment_area . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="' . $entry_array['relatedlink']['url'] . '">' . $entry_array['relatedlink']['name'] . '</a>' . "\n";
		}
		
		if ( isset( $entry_array[ 'stars' ] ) ) {
			// Show 'rating' stars...
			$comment_area = $comment_area . '&nbsp;&nbsp;|&nbsp;&nbsp;' . $entry_array[ 'stars' ] . "\n";
		}
		
		if ( $comment_area != "" ) {
			$blog_content = $blog_content . "\n\t<div class=\"blog_comment\">" . $comment_area . "</div>\n";
		}
		$blog_content = $blog_content . "\n<!-- FOOTER ENTRY END -->\n";
		
		$blog_content = $blog_content . "<br />";
		
		$blog_content = $blog_content . "\n<!-- BLOG ENTRY END -->\n";
		
		return $blog_content;
	}
	
	function theme_staticentry ( $entry_array ) {
		// Display STATIC entry page.
		// 
		// This theme uses the same format for static entries as regular blog entries.
		$blog_content = theme_blogentry( $entry_array );
		return $blog_content;
	}
	
	function theme_commententry ( $entry_array ) {
		// Display COMMENT entry page.
		// 
		// This theme uses the same format for comment entries as regular blog entries.
		$blog_content = theme_blogentry( $entry_array );
		return $blog_content;
	}
	
	// New 0.3.8
	function theme_trackbackentry ( $entry_array ) {
		global $blog_config, $blog_theme, $user_colors;

		$img_path = 'themes/' . $blog_theme . '/images/';

		$blog_content = "";
		$blog_content = $blog_content . "\n" . '<!-- BLOG ENTRY BEGIN -->' . "\n";

		// SUBJECT
		$blog_content = $blog_content . '<div class="blog_title">' . $entry_array[ 'title' ] . "\n";
		
		if ( isset( $entry_array[ 'logged_in' ] ) && $entry_array[ 'logged_in' ] == true ) {
			$blog_content = $blog_content . "\t" . '<span class="blog_title_buttons">' . "\n";

			// Show 'delete' button if the user is logged-in...
			if ( isset( $entry_array[ 'delete' ][ 'url' ] ) ) {
				$blog_content = $blog_content . "\t\t" . '<a href="' . $entry_array[ 'delete' ][ 'url' ] . '"><img src="' . $img_path . 'box_cancel.png" alt="' . $entry_array[ 'delete' ][ 'name' ] . '" width="14" height="14" /> </a>' . "\n";
			}
			
			$blog_content = $blog_content . "\t" . '</span>' . "\n";
		}

		$blog_content = $blog_content . '</div>' . "\n";
		
		$blog_content = $blog_content . '<div class="blog_body">' . "\n\t";
		$blog_content = $blog_content . '<div class="blog_date">' . $entry_array[ 'date' ] . '</div>' . "\n\t\t";

		// Blog content body...
		$blog_content = $blog_content . $entry_array[ 'excerpt' ] . "<p>\n";
		
		if ( (isset( $entry_array[ 'blog_name' ] ) ) && ($entry_array[ 'blog_name' ] != "") ) {
		   $blog_content = $blog_content . '<a href="'.$entry_array[ 'url' ].'" target="_blank">[ ' . $entry_array[ 'blog_name' ] . " ]</a><p>\n";
		} else {
		   $blog_content = $blog_content . '<a href="'.$entry_array[ 'url' ].'" target="_blank">[ ' . $entry_array[ 'url' ] . " ]</a><p>\n";
		}
		
		$blog_content = $blog_content . "\n\t" . '</div>';

		$blog_content = $blog_content . "<br />";
		
		$blog_content = $blog_content . "\n" . '<!-- BLOG ENTRY END -->' . "\n";
		
		return $blog_content;
	}
	
	// Function:
	// theme_default_colors( )
	//
	// Default Base Colors
	// -------------------
	// $user_colors is an associative array that stores
	// all color information. These are the default colors
	// for the theme. These values are read in, and then
	// get overwritten when the user saved colors are
	// read from file.
	//
	// Note
	// ----
	// You can create your own "keys" but they will not
	// show up in the "colors.php" document yet...
	//
	// Also, only these default keys have translations for
	// different languages. If something is missing, email
	// me and I'll add it for future releases.
	//
	// Eventually you'll have the option of disabling keys
	// and added keys will appear on the "color.php" page.
	function theme_default_colors () {
		global $lang_string;
		
		$color_def = array();
		
		// Backgrounds
		array_push( $color_def, array( 'id' => 'bg_color',
								'string' => $lang_string[ 'bg_color' ],
								'default' => 'D9D9D2' ) );
		array_push( $color_def, array( 'id' => 'header_bg_color',
								'string' => $lang_string[ 'header_bg_color' ],
								'default' => '8C8C7E' ) );
		array_push( $color_def, array( 'id' => 'footer_bg_color',
								'string' => $lang_string[ 'footer_bg_color' ],
								'default' => '8C8C7E' ) );
		array_push( $color_def, array( 'id' => 'main_bg_color',
								'string' => $lang_string[ 'main_bg_color' ],
								'default' => 'D7D7CF' ) );
		array_push( $color_def, array( 'id' => 'menu_bg_color',
								'string' => $lang_string[ 'menu_bg_color' ],
								'default' => '59594F' ) );
		
		// Borders
		array_push( $color_def, array( 'id' => 'border_color',
								'string' => $lang_string[ 'border_color' ],
								'default' => '58584E' ) );
		array_push( $color_def, array( 'id' => 'inner_border_color',
								'string' => $lang_string[ 'inner_border_color' ],
								'default' => '9A9A8C' ) );
		array_push( $color_def, array( 'id' => 'header_txt_color',
								'string' => $lang_string[ 'header_txt_color' ],
								'default' => 'FFFFFF' ) );
		array_push( $color_def, array( 'id' => 'footer_txt_color',
								'string' => $lang_string[ 'footer_txt_color' ],
								'default' => 'FFFFFF' ) );
		array_push( $color_def, array( 'id' => 'txt_color',
								'string' => $lang_string[ 'txt_color' ],
								'default' => '737367' ) );
		array_push( $color_def, array( 'id' => 'headline_txt_color',
								'string' => $lang_string[ 'headline_txt_color' ],
								'default' => '737367' ) );
		array_push( $color_def, array( 'id' => 'date_txt_color',
								'string' => $lang_string[ 'date_txt_color' ],
								'default' => 'A6A695' ) );
		
		
		array_push( $color_def, array( 'id' => 'entry_bg',
								'string' => $lang_string[ 'entry_bg' ],
								'default' => 'F2F2EB' ) );
		array_push( $color_def, array( 'id' => 'entry_title_bg',
								'string' => $lang_string[ 'entry_title_bg' ],
								'default' => 'BEBEB5' ) );
		array_push( $color_def, array( 'id' => 'entry_border',
								'string' => $lang_string[ 'entry_border' ],
								'default' => '95958C' ) );
								
		array_push( $color_def, array( 'id' => 'entry_title_text',
								'string' => $lang_string[ 'entry_title_text' ],
								'default' => '666661' ) );
		array_push( $color_def, array( 'id' => 'entry_text',
								'string' => $lang_string[ 'entry_text' ],
								'default' => '4F4F48' ) );
		
		array_push( $color_def, array( 'id' => 'menu_bg',
								'string' => $lang_string[ 'menu_bg' ],
								'default' => 'ACACA0' ) );
		array_push( $color_def, array( 'id' => 'menu_title_bg',
								'string' => $lang_string[ 'menu_title_bg' ],
								'default' => '959587' ) );
		array_push( $color_def, array( 'id' => 'menu_border',
								'string' => $lang_string[ 'menu_border' ],
								'default' => 'DADACE' ) );
								
		array_push( $color_def, array( 'id' => 'menu_title_text',
								'string' => $lang_string[ 'menu_title_text' ],
								'default' => 'FFFFFF' ) );
		array_push( $color_def, array( 'id' => 'menu_text',
								'string' => $lang_string[ 'menu_text' ],
								'default' => 'FFFFFF' ) );
		
		array_push( $color_def, array( 'id' => 'link_reg_color',
								'string' => $lang_string[ 'link_reg_color' ],
								'default' => '59594F' ) );
		array_push( $color_def, array( 'id' => 'link_hi_color',
								'string' => $lang_string[ 'link_hi_color' ],
								'default' => 'FF6600' ) );
		array_push( $color_def, array( 'id' => 'link_down_color',
								'string' => $lang_string[ 'link_down_color' ],
								'default' => '6329F7' ) );
								
		array_push( $color_def, array( 'id' => 'menu_link_reg_color',
								'string' => $lang_string[ 'menu_link_reg_color' ],
								'default' => '59594F' ) );
		array_push( $color_def, array( 'id' => 'menu_link_hi_color',
								'string' => $lang_string[ 'menu_link_hi_color' ],
								'default' => 'FF6600' ) );
		array_push( $color_def, array( 'id' => 'menu_link_down_color',
								'string' => $lang_string[ 'menu_link_down_color' ],
								'default' => '6329F7' ) );
		
		return ( $color_def );
	}
	
	// Function:
	// theme_pagelayout( )
	//
	// Page Layout Container/Wrapper
	// -----------------------------
	// This function controls all HTML output to the browser.
	//
	// Invoking the page_content() fuction inserts the actual
	// contents of the page.
	//
	function theme_pagelayout () {
		global $user_colors, $blog_theme, $blog_config, $theme_vars;
		
		// New 0.3.8
		//
		// You can change the width of the CONTENT area and MENU areas by
		// editing these variable in the "theme_init()" function at the top of
		// this file.
		$content_width = $theme_vars[ 'content_width' ];
		$menu_width = $theme_vars[ 'menu_width' ];
		$page_width = $content_width + $menu_width; 
		
		// Default image path.
		$img_path = "themes/" . $blog_theme . "/images/";
		
		// Begin Page Layout HTML
		?>
		<body>
			<br />
			<table border="0" width="<?php echo( $page_width ); ?>" cellspacing="0" cellpadding="0" align="center" style="border: 1px solid #<?php echo( $user_colors[ 'border_color' ] ); ?>;">
				<tr align="left" valign="top">
					<td width="<?php echo( $page_width ); ?>" colspan="2" bgcolor="#<?php echo( $user_colors[ 'header_bg_color' ] ); ?>">
						<div id="header_image"><img src="<?php echo( $img_path ); ?>header750x100.jpg" alt="" border="0" /></div>
						<?php
						if ( $blog_config['blog_enable_title']){// New for 0.4.6 
						echo('<div id="header">' . $blog_config[ 'blog_title' ] . '</div>');
						}?>
						<div id="pagebody">
							<table border="0" width="<?php echo( $page_width ); ?>" cellspacing="0" cellpadding="0" align="left">
								<tr valign="top">
									<td width="<?php echo( $content_width ); ?>" bgcolor="#<?php echo( $user_colors[ 'main_bg_color' ] ); ?>">
										<div id="maincontent">
											<?php page_content(); ?>
										</div>
									</td>
									<td width="<?php echo( $menu_width ); ?>" bgcolor="#<?php echo( $user_colors[ 'menu_bg_color' ] ); ?>" style="border-left: 1px solid #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;">
										<div id="sidebar">
											<?php theme_menu(); ?>
										</div>
									</td>
								</tr>
								<tr align="left" valign="top">
									<td width="<?php echo( $page_width ); ?>" bgcolor="#<?php echo( $user_colors[ 'footer_bg_color' ] ); ?>" colspan="2">
										<div id="footer"><?php echo($blog_config[ 'blog_footer' ]); ?> - <?php echo( page_generated_in() ); ?></div>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
			<br />
		</body>
		<?php 
		// End Page Layout HTML
	}
	
	// Function:
	// theme_popuplayout( )
	//
	// Popup Layout Container/Wrapper
	// -----------------------------
	// This function controls all HTML output to the browser.
	//
	// Same as above, but for the pop-up comment window and 
	// the image list pop-up.
	//
	function theme_popuplayout () {
		global $user_colors, $blog_config, $theme_vars;
		
		// New 0.3.8
		//
		// You can change the width of the CONTENT area by editing
		// this variable in the "theme_init()" function at the top of
		// this file.
		$popup_width = $theme_vars[ 'popup_window' ][ 'content_width' ]; 
		
		// Begin Popup Layout HTML
		?>
		<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
			<br />
			<table border="0" width="<?php echo( $popup_width ); ?>" cellspacing="0" cellpadding="0" align="center" style="border: 1px solid #<?php echo( $user_colors[ 'border_color' ] ); ?>;">
				<tr align="left" valign="top">
					<td bgcolor="#<?php echo( $user_colors[ 'header_bg_color' ] ); ?>">
						<div id="header">
							<?php echo($blog_config[ 'blog_title' ]); ?><br />
						</div>
					</td>
				</tr>
				<tr align="left" valign="top">
					<td bgcolor="#<?php echo( $user_colors[ 'main_bg_color' ] ); ?>">
						<div id="maincontent">
							<?php page_content(); ?>
						</div>
					</td>
				</tr>
				<tr align="left" valign="top">
					<td bgcolor="#<?php echo( $user_colors[ 'footer_bg_color' ] ); ?>">
						<div id="footer"><?php echo($blog_config[ 'blog_footer' ]); ?> - <?php echo( page_generated_in() ); ?></div>
					</td>
				</tr>
			</table>
			<br />
		</body>
		<?php 
		// End Popup Layout HTML
	}
	
	function theme_menu () {
		global $user_colors, $lang_string, $theme_vars, $logged_in, $sb_info, $blog_config;
		
		// This function determines the content displayed
		// in the menu area on the right.
		//
		// Feel free to move these blocks of code around.
		//
		// For instance, if you want the calendar at the
		// top of the menu area, just copy the ARCHIVE
		// block of code to the top (above LINKS.)
		//
		// The "\n" that you see is a RETURN character.
		// This is just to make the HTML code look prettier.
		// It will not show up on the page.
		//
		// Please note that \n must be used within " quotes...
		// echo( "\n" ); // <-- This is a return character
		// echo( '\n' ); // <-- This will print \n on your page...
		//
		// You can use either ' or " in your echo() statements.
		// But keep in mind that might need to use a backslash --> \
		// to print a double or single quote:
		//
		// These are equivatent: (note the \" escape chracter...)
		// echo( 'this "is" a test' ); 
		// echo( "this \"is\" a test" ); 
		//
		// These are equivatent: (note the \' escape chracter...)
		// echo( 'this \'is\' a test' ); 
		// echo( "this 'is' a test" ); 
		//
		// I could go on, but this is kind of boring stuff... :)
		
		echo( "\n<!-- SIDEBAR MENU BEGIN -->\n" );
		
		$result = menu_display_avatar();
		if( $result[ 'content' ] != '') {
			echo( "\n<!-- AVATAR -->\n" );
			echo("<div class=\"menu_title\">" . $result[ 'title' ] . "</div>\n" );
			echo( "<div class=\"menu_body\">\n" );
			echo( $result[ 'content' ] . "\n" );
			echo( "</div><br />\n" );
		}
		
		// Retained from 0.3.7c
		echo( "\n<!-- LINKS -->\n" );
		$result = menu_display_links();
		echo("<div class=\"menu_title\">" . $result[ 'title' ] . "</div>\n" );
		echo( "<div class=\"menu_body\">\n" );
		echo( $result[ 'content' ] . "\n" );
		echo( "<br />" . menu_display_login() . "\n" );
		echo( "</div><br />\n" );
		
		// Retained from 0.3.7c
		$result = menu_display_user();
		if ( $result[ 'content' ] != "" ) {
			echo( "\n<!-- USER MENU -->\n" );
			echo("<div class=\"menu_title\">" . $result[ 'title' ] . "</div>\n" );
			echo( "<div class=\"menu_body\">\n" );
			echo( $result[ 'content' ] . "\n" );
			echo( "</div><br />\n" );
		}
		
		// Retained from 0.3.7c
		$result = menu_display_setup();
		if ( $result[ 'content' ] != "" ) {
			echo( "\n<!-- SETUP MENU -->\n" );
			echo("<div class=\"menu_title\">" . $result[ 'title' ] . "</div>\n" );
			echo( "<div class=\"menu_body\">\n" );
			echo( $result[ 'content' ] . "\n" );
			echo( "</div><br />\n" );
		}
		
		// New 0.3.8
		//
		// The ADD BLOCKS page lets you insert your own
		// content "blocks" into the menu area.
		$array = read_blocks($logged_in);
		for($i=0 ; $i<count($array) ; $i+=2) {
			if ( $array[$i+1] != "" ) {
				echo("<div class=\"menu_title\">" . $array[$i] . "</div>\n" );
				echo( "<div class=\"menu_body\">\n" );
				echo( $array[$i+1] . "\n" );
				echo( "</div><br />\n" );
			}
		}
		
		// Retained from 0.3.7c
		//
		// However, this function now displays a calendar
		// rather then the "tree view"....
		if( $blog_config[ 'blog_enable_calendar' ] ) {
			echo( "\n<!-- ARCHIVE -->\n" );
			 $result = menu_display_blognav();
			echo("<div class=\"menu_title\">" . $result[ 'title' ] . "</div>\n" );
			echo( "<div class=\"menu_body\">\n" );
			echo( $result[ 'content' ] . "\n" );
			echo( "</div><br />\n" );
		}
		
		// New 0.4.7
		$result = menu_display_blognav_tree();
		if ( $result[ 'content' ] != "" ) {
			echo( "\n<!-- RECENT ENTRIES -->\n" );
			echo("<div class=\"menu_title\">" . $result[ 'title' ] . "</div>\n" );
			echo( "<div class=\"menu_body\">\n" );
			echo( $result[ 'content' ] . "\n" );
			echo( "</div><br />\n" );
		}
		
		// New 0.3.8
		$result = menu_display_categories();
		if ( $result[ 'content' ] != "" ) {
			echo( "\n<!-- RECENT ENTRIES -->\n" );
			echo("<div class=\"menu_title\">" . $result[ 'title' ] . "</div>\n" );
			echo( "<div class=\"menu_body\">\n" );
			echo( $result[ 'content' ] . "\n" );
			echo( "</div><br />\n" );
		}
		
		// Retained from 0.3.7c
		echo( "\n<!-- SEARCH -->\n" );
		$result = menu_search_field();
		echo("<div class=\"menu_title\">" . $result[ 'title' ] . "</div>\n" );
		echo( "<div class=\"menu_body\">\n" );
		echo( $result[ 'content' ] . "\n" );
		echo( "</div><br />\n" );
		
		// New 0.3.8
		$result = menu_most_recent_entries();
		if ( $result[ 'content' ] != "" ) {
			echo( "\n<!-- RECENT ENTRIES -->\n" );
			echo("<div class=\"menu_title\">" . $result[ 'title' ] . "</div>\n" );
			echo( "<div class=\"menu_body\">\n" );
			echo( $result[ 'content' ] . "\n" );
			echo( "</div><br />\n" );
		}
		
		// Retained from 0.3.7c
		$result = menu_most_recent_comments();
		if ( $result[ 'content' ] != "" ) {
			echo( "\n<!-- RECENT COMMENTS -->\n" );
			echo("<div class=\"menu_title\">" . $result[ 'title' ] . "</div>\n" );
			echo( "<div class=\"menu_body\">\n" );
			echo( $result[ 'content' ] . "\n" );
			echo( "</div><br />\n" );
		}
	
		// New 0.3.8
		if( $blog_config[ 'blog_trackback_enabled' ] ) {
			$result = menu_most_recent_trackbacks();
			if ( $result[ 'content' ] != "" ) {
				echo( "\n<!-- RECENT TRACKBACKS -->\n" );
				echo("<div class=\"menu_title\">" . $result[ 'title' ] . "</div>\n" );
				echo( "<div class=\"menu_body\">\n" );
				echo( $result[ 'content' ] . "\n" );
				echo( "</div><br />\n" );
			}
		}
		
		// Web Badges - Changed in 0.4.4
		echo( '<div align="center">' );
		echo( '<a href="http://sourceforge.net/projects/sphpblog/"><img style="margin-bottom: 5px;" src="interface/button_sphpblog.png" alt="Powered by Simple PHP Blog" title="Powered by Simple PHP Blog" border="0" /></a> ' );
		echo( '<a href="rss.php"><img style="margin-bottom: 5px;" src="interface/button_rss20.png" alt="Get RSS 2.0 Feed" title="Get RSS 2.0 Feed" border="0" /></a><br />' );
		echo( '<a href="http://php.net/"><img style="margin-bottom: 5px;" src="interface/button_php.png" alt="Powered by PHP ' . phpversion() . '" title="Powered by PHP ' . phpversion() . '" border="0" /></a> ' );
		echo( '<a href="atom.php"><img style="margin-bottom: 5px;" src="interface/button_atom03.png" alt="Get Atom 0.3 Feed" title="Get Atom 0.3 Feed" border="0" /></a><br />' );
		echo( '<img style="margin-bottom: 5px;" src="interface/button_txt.png" alt="Powered by Plain text files" title="Powered by Plain text files" border="0" /> ' );
		echo( '<a href="rdf.php"><img style="margin-bottom: 5px;" src="interface/button_rdf10.png" alt="Get RDF 1.0 Feed" title="Get RDF 1.0 Feed" border="0" /></a><br />' );
		echo( '</div>' );
	}
	
?>
