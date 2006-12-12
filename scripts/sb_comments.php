<?php

	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com

	// comment_to_array ( $entryFile )
	// read_comments ( $y, $m, $entry, $logged_in )
	// sb_display_email ($email)
	// sb_str_to_ascii ($str)
	// write_comment ( $y, $m, $entry, $comment_name, $comment_email, $comment_url, $comment_remember, $comment_text )
	// delete_comment ( $filepath )

	// ----------------------
	// Blog Comment Functions
	// ----------------------

	function comment_to_array ( $entryFile ) {
		// Reads a blog entry and returns an key/value pair array.
		//
		// Returns false on fail...
		global $sb_info;
		$comment_entry_data = array();

		$str = sb_read_file( $entryFile );
		$exploded_array = explode( '|', $str );

		if ( count( $exploded_array ) > 1 ) {
			if ( count( $exploded_array ) <= 6 ) {
				// Old List Format: name, date, content, email, url
				$comment_entry_data[ 'VERSION' ]  = $sb_info[ 'version' ];
				$comment_entry_data[ 'NAME' ]  = $exploded_array[0];
				$comment_entry_data[ 'DATE' ]  = $exploded_array[1];
				$comment_entry_data[ 'CONTENT' ]  = $exploded_array[2];
				if ( count( $exploded_array ) > 3) {
					$comment_entry_data[ 'EMAIL' ]  = $exploded_array[3];
				}
				if ( count( $exploded_array ) > 4) {
					$comment_entry_data[ 'URL' ]  = $exploded_array[4];
				}
				if ( count( $exploded_array ) > 5) {
					$comment_entry_data[ 'MODERATIONFLAG' ] = $exploded_array[5];
				}

			} else {
				// New Format: key/value pairs
				// VERSION, NAME, DATE, CONTENT, EMAIL, URL, FLAG

				$comment_entry_data = explode_with_keys( $exploded_array );
			}
			return( $comment_entry_data );
		} else {
			// Exploded array only contained 1 item, so something is wrong...
			return( false );
		}
	}

	function read_comments ( $y, $m, $entry, $logged_in ) {
		global $blog_content, $blog_config, $lang_string, $user_colors;

		$filename = 'content/'.$y.'/'.$m.'/'.$entry;

		$blog_content = read_entry_from_file( $filename );
		$blog_content = replace_more_tag ( $blog_content , true, '' );

		// Comments
		$basedir = 'content/';
		$dir = $basedir.$y.'/'.$m.'/'.$entry.'/comments/';
		$file_array = sb_folder_listing( $dir, array( '.txt', '.gz' ) );
		if ( $blog_config[ 'blog_comment_order' ] == 'new_to_old' ) {
			$file_array = array_reverse( $file_array );
		}

		// View Count
		if ( $logged_in == false ) {
		$view_counter = 1;
		$view_array = sb_folder_listing( $dir.'../', array( '.txt' ) );
		for ( $i = 0; $i < count( $view_array ); $i++ ) {
			if ( $view_array[$i] === 'view_counter.txt' ) {
				$view_counter = intval( sb_read_file( $dir . '../' . $view_array[$i] ) ) + 1;
			}
		}
		}

		$contents = array();
		for ( $i = 0; $i < count( $file_array ); $i++ ) {
			if ( $file_array[$i] !== 'rating.txt' ) {
				array_push( $contents, array( 'path' => ( $dir . $file_array[$i] ), 'entry' => $file_array[$i] ) );
			}
		}

		if ( $contents ) {
			// Store Counter
			if ( $logged_in == false ) {
			sb_write_file( $dir . '../view_counter.txt' , $view_counter );
			}

			// Display comments Oldest to Newest to. Oldest Comments will be at the top of the page.
			for ( $i = 0; $i <= count( $contents ) - 1; $i++ ) {

				$comment_entry_data = comment_to_array( $contents[$i][ 'path' ] );

				$entry_array = array();

				// I will probably move this into it's own key/value
				// pairs instead of sticking it in the subject line.
				$comment_subject = $comment_entry_data[ 'NAME' ];

				if ( isset( $comment_entry_data[ 'URL' ] ) ) {
					if ( strpos( strtolower( $comment_entry_data[ 'URL' ] ), 'http://' ) === false ) {
						$website = '[url=http://'.($comment_entry_data[ 'URL' ]).' ]'.($comment_entry_data[ 'URL' ]).'[/url]';
					} else {
						$website = '[url='.($comment_entry_data[ 'URL' ]).' ]'.($comment_entry_data[ 'URL' ]).'[/url]';
					}
					$entry_array[ 'website' ] = blog_to_html( $website, true, false, true );
				}
				
				if ( isset( $comment_entry_data[ 'EMAIL' ] ) ) {
					$entry_array[ 'email' ] = sb_display_email( $comment_entry_data[ 'EMAIL' ] );
				}

				// blog_to_html( $str, $comment_mode, $strip_all_tags, $add_no_follow=false, $emoticon_replace=false )
				$entry_array[ 'id' ] = $entry . '_' . sb_strip_extension( $contents[$i][ 'entry' ] );
				$entry_array[ 'subject' ] = blog_to_html( $comment_subject, true, false, true );
				$entry_array[ 'date' ] = blog_to_html( format_date( $comment_entry_data[ 'DATE' ] ), true, false );
				$entry_array[ 'entry' ] = blog_to_html( $comment_entry_data[ 'CONTENT' ], true, false, true, true ) . '<br clear="all" />';
				$entry_array[ 'modflag' ] = blog_to_html( $comment_entry_data[ 'MODERATIONFLAG' ], true,  false, true );
				$entry_array[ 'logged_in' ] = $logged_in;

				// Author
				if ( $logged_in == true ) {
					$entry_array[ 'delete' ][ 'name' ] = $lang_string[ 'delete_btn' ];
					$entry_array[ 'delete' ][ 'url' ] = 'comment_delete_cgi.php?y='.$y.'&amp;m='.$m.'&amp;entry='.$entry.'&amp;comment=' . ( $contents[$i][ 'entry' ] );

					if ( array_key_exists( 'IP-ADDRESS', $comment_entry_data ) ) {
						$entry_array[ 'ban' ][ 'name' ] = $lang_string[ 'ban_btn' ];
						$entry_array[ 'ban' ][ 'url' ] = 'comment_ban_cgi.php?ban=' . $comment_entry_data[ 'IP-ADDRESS' ] .'&amp;y='.$y.'&amp;m='.$m.'&amp;entry='.$entry.'&amp;comment=' . ( $contents[$i][ 'entry' ] );
					}
				}

				$entry_array[ 'count' ] = $i;
				$entry_array[ 'maxcount' ] = count( $contents ) - 1;

				// New 0.4.8
				if ( array_key_exists( 'IP-ADDRESS', $comment_entry_data ) ) {
					$entry_array[ 'ip-address' ] = $comment_entry_data[ 'IP-ADDRESS' ];
				}

				// Check if moderation is on - if it is, then don't show this item
				// unless the user is logged in or the item is marked as 'H'
				if (( $blog_config[ 'blog_comments_moderation' ] == 1 ) && ( $entry_array[ 'modflag' ] == 'H' ) && ( $logged_in != 1 )) {
					$blog_content = $blog_content;
				} else {
					$blog_content = $blog_content . theme_commententry( $entry_array );
				}
			}
		}

		return $blog_content;
	}

	function read_unmodded_comments ( $logged_in ) {
			global $lang_string, $blog_config;

		// To avoid server overload
		sleep(1);
		$output_str = '';
		$entry_file_array = blog_entry_listing();
		$results = 0;

		// Loop through entry files
		for ( $i = 0; $i < count( $entry_file_array ); $i++ ) {
			list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $entry_file_array[ $i ] );
			$contents = sb_read_file( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );
			$j = 0;
			$blog_entry_data = blog_entry_to_array( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );
			// Search Comments
			if ( $blog_config[ 'blog_enable_comments' ] == true ) {
				$comment_file_array = sb_folder_listing( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/comments/', array( '.txt', '.gz' ) );

				for ( $k = 0; $k < count( $comment_file_array ); $k++ ) {
					$comment_filename =  $comment_file_array[ $k ];
					//We only want to search inside comments, not the counter
					if ( strpos($comment_filename, 'comment') === 0 )
					{
						$contents_comment = sb_read_file( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/comments/' . $comment_filename );
						$comment_entry_data = comment_to_array( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/comments/' . $comment_filename );

						// check to see if our comment is on hold right now (from a mod point of view)
						if ( $comment_entry_data[ 'MODERATIONFLAG' ] == 'H') {
							global $theme_vars;
							$results++;
							if ( $blog_config[ 'blog_comments_popup' ] == 1 ) {
								$output_str .= '<b>' . $lang_string['enteredby'] . $comment_entry_data[ 'NAME' ]  . '</b><br />';
								$output_str .= $lang_string['entrydate'] . format_date( $comment_entry_data[ 'DATE' ] ) . '<br />';
								$output_str .= $lang_string['blogentrytitle'] . '<a href="javascript:openpopup(\'comments.php?y='.$year_dir.'&amp;m='.$month_dir.'&amp;entry='. sb_strip_extension($entry_filename).'\','.$theme_vars[ 'popup_window' ][ 'width' ].','.$theme_vars[ 'popup_window' ][ 'height' ].',true)">' . $blog_entry_data[ 'SUBJECT' ] . '</a><br />';
								$output_str .= $lang_string['enteredcontent'] . $comment_entry_data[ 'CONTENT' ] . '<br /><br />';
								$output_str .= '<a href="comment_approve_cgi.php?y=' . $year_dir . '&amp;m=' . $month_dir . '&amp;entry=' . sb_strip_extension( $entry_filename ) . '&amp;comment=' . $comment_filename . '" title="' . format_date( $comment_entry_data[ 'DATE' ] ) . '">' . $lang_string['mod_approve'] . '</a>';
								$output_str .= '<a href="comment_delete_cgi.php?y=' . $year_dir . '&amp;m=' . $month_dir . '&amp;entry=' . sb_strip_extension( $entry_filename ) . '&amp;comment=' . $comment_filename . '" title="' . format_date( $comment_entry_data[ 'DATE' ] ) . '">' . $lang_string['mod_delete'] . '</a><br /><br />';
							} else {
								$output_str .= '<b>' . $lang_string['enteredby'] . $comment_entry_data[ 'NAME' ]  . '</b><br />';
								$output_str .= $lang_string['entrydate'] . format_date( $comment_entry_data[ 'DATE' ] ) . '<br />';
								$output_str .= $lang_string['blogentrytitle'] . '<a href="comments.php?y=' . $year_dir . '&amp;m=' . $month_dir . '&amp;entry=' . sb_strip_extension( $entry_filename ) . '" title="' . format_date( $comment_entry_data[ 'DATE' ] ) . '">' . $blog_entry_data[ 'SUBJECT' ] . '</a><br />';
								$output_str .= $lang_string['enteredcontent'] . $comment_entry_data[ 'CONTENT' ] . '<br />';
								$output_str .= '<a href="comment_approve_cgi.php?y=' . $year_dir . '&amp;m=' . $month_dir . '&amp;entry=' . sb_strip_extension( $entry_filename ) . '&amp;comment=' . $comment_filename . '" title="' . format_date( $comment_entry_data[ 'DATE' ] ) . '">' . $lang_string['mod_approve'] . '</a>';
								$output_str .= '<a href="comment_delete_cgi.php?y=' . $year_dir . '&amp;m=' . $month_dir . '&amp;entry=' . sb_strip_extension( $entry_filename ) . '&amp;comment=' . $comment_filename . '&amp;sourcepage=m" title="' . format_date( $comment_entry_data[ 'DATE' ] ) . '">' . $lang_string['mod_delete'] . '</a><br /><br />';
							}
						}
					}
				}
			}
		}
		$output_str .= '<b>' . $results . $lang_string['totalunmodded'] . '</b>';

		return ( $output_str );
	}

	function get_unmodded_count ( $logged_in ) {
		global $lang_string, $blog_config;

		// To avoid server overload
		sleep(1);
		$output_str = '';
		$entry_file_array = blog_entry_listing();
		$results = 0;

		// Loop through entry files
		for ( $i = 0; $i < count( $entry_file_array ); $i++ ) {
			list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $entry_file_array[ $i ] );
			$contents = sb_read_file( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );
			$j = 0;
			$blog_entry_data = blog_entry_to_array( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );
			// Search Comments
			if ( $blog_config[ 'blog_enable_comments' ] == true ) {
				$comment_file_array = sb_folder_listing( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/comments/', array( '.txt', '.gz' ) );

				for ( $k = 0; $k < count( $comment_file_array ); $k++ ) {
					$comment_filename =  $comment_file_array[ $k ];
					//We only want to search inside comments, not the counter
					if ( strpos($comment_filename, 'comment') === 0 )
					{
						$contents_comment = sb_read_file( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/comments/' . $comment_filename );
						$comment_entry_data = comment_to_array( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/comments/' . $comment_filename );

						// check to see if our comment is on hold right now (from a mod point of view)
						if ( $comment_entry_data[ 'MODERATIONFLAG' ] == 'H') {
							$results++;
						}
					}
				}
			}
		}
		return ( $results );
	}

	function get_entry_unmodded_count ( $y, $m, $entry) {
		global $lang_string, $blog_config;

		// To avoid server overload
		sleep(1);
		$entry_file_array = blog_entry_listing();
		$results = 0;

		$comment_file_array = sb_folder_listing( 'content/' . $y . '/' . $m . '/' . sb_strip_extension( $entry ) . '/comments/', array( '.txt', '.gz' ) );

		for ( $k = 0; $k < count( $comment_file_array ); $k++ ) {
			$comment_filename =  $comment_file_array[ $k ];
			//We only want to search inside comments, not the counter
			if ( strpos($comment_filename, 'comment') === 0 )
			{
				$contents_comment = sb_read_file( 'content/' . $y . '/' . $m . '/' . sb_strip_extension( $entry ) . '/comments/' . $comment_filename );
				$comment_entry_data = comment_to_array( 'content/' . $y . '/' . $m . '/' . sb_strip_extension( $entry ) . '/comments/' . $comment_filename );

				// check to see if our comment is on hold right now (from a mod point of view)
				if ( $comment_entry_data[ 'MODERATIONFLAG' ] == 'H') {
					$results++;
				}
			}
		}
		return ( $results );
	}

	function check_for_duplicate ( $y, $m, $entry, $newContent ) {

		// Comments
		$basedir = 'content/';
		$dir = $basedir.$y.'/'.$m.'/'.$entry.'/comments/';
		$file_array = sb_folder_listing( $dir, array( '.txt', '.gz' ) );

		$contents = array();
		for ( $i = 0; $i < count( $file_array ); $i++ ) {
			if ( $file_array[$i] !== 'rating.txt' ) {
				array_push( $contents, array( 'path' => ( $dir . $file_array[$i] ), 'entry' => $file_array[$i] ) );
			}
		}

		$is_duplicate = false;
		if ( $contents ) {
			for ( $i = 0; $i <= count( $contents ) - 1; $i++ ) {
				$comment_entry_data = comment_to_array( $contents[$i][ 'path' ] );
				//
				// $comment_entry_data[ 'VERSION' ]
				// $comment_entry_data[ 'NAME' ]
				// $comment_entry_data[ 'DATE' ]
				// $comment_entry_data[ 'CONTENT' ]
				// $comment_entry_data[ 'EMAIL' ] <-- Optional
				// $comment_entry_data[ 'URL' ] <-- Optional
				//
				if ( $comment_entry_data[ 'CONTENT' ] == $newContent ) {
					$is_duplicate == true;
					break;
				}
			}
		}

		return $is_duplicate;
	}

	function sb_display_email ($email) {
		$arr = explode( '@', $email );
		if ( $arr === false ) {
			$arr = Array( $email );
		}

		$htmlstr = '<script type="text/javascript">';
		//$htmlstr .= '<!--';
		$javastr = '';
		for ( $i=0; $i<count($arr); $i++ ) {
			$strord = sb_str_to_ascii( $arr[$i] );
			$htmlstr .= 'str'.$i." = ('".$strord."');";
			$javastr .= 'str'.$i.'+';
			if ( $i < count($arr) - 1 ) {
				$javastr .= "'&lt;at&gt;'+";
			}
		}
		$htmlstr .= "document.write('<a href=\"mailto:'+".$javastr."'\">'+".$javastr."'</a>');";
		//$htmlstr .= "//-->";
		$htmlstr .= '</script>';

		return($htmlstr);
	}

	function are_comments_expired ($month, $day, $year) {
    // Finds out if the comments are expired based on the setting
    // in the preferences
    global $blog_config;

    $tmp_expiry = intval( $blog_config[ 'blog_comment_days_expiry' ] );
    if ( $tmp_expiry < 1 ) {
      return ( false );
    } else {
      $blog_entry_date = mktime(0,0,0,$month,$day,$year);
      $todays_date = mktime(0,0,0,date('m'),date('d'),date('Y'));
      $days_elapsed = Round((($todays_date - $blog_entry_date)/86400), 0) ;
      $tmp_expiry = intval( $blog_config[ 'blog_comment_days_expiry' ] );
      if ( ($days_elapsed) >= $tmp_expiry ) {
        return ( true );
      } else {
        return ( false );
      }
    }
  }

	function sb_str_to_ascii ($str) {
		// Converts a string to ASCII HEX code. This is used for email obfuscation.
		//
		$res='';
		for ( $j=0; $j<strlen($str); $j++) {
			$res.='&#' . ord(substr($str, $j, 1)) . ';';
		}
		return($res);
	}

	function write_comment ( $y, $m, $entry, $comment_name, $comment_email, $comment_url, $comment_remember, $comment_text, $user_ip, $hold_flag ) {
		// Save new entry or update old entry
		//
		global $blog_config, $sb_info, $lang_string;

		//clearstatcache();

		if ( $comment_remember != 0 ) {
			setcookie( 'comment_name', $comment_name, time()+60*60*24*30);
			setcookie( 'comment_email', $comment_email, time()+60*60*24*30);
			setcookie( 'comment_url', $comment_url, time()+60*60*24*30);
		}

		// We're going to assume that the y and m directories exist...
		$basedir = 'content/';
		$dir = $basedir.$y.'/'.$m.'/'.$entry;

		if (!file_exists($dir)) {
			$oldumask = umask(0);
			$ok = mkdir($dir, 0777 );
			umask($oldumask);
			if (!$ok) {
				// There is a bug in some versions of PHP that will
				// cause mkdir to fail if there is a trailing "/".
				//
				// Thanks to Matt - http://agent.chaosnet.org
				return ( $dir );
			}
		}

		$dir = $dir.'/comments';

		if (!file_exists($dir)) {
			$oldumask = umask(0);
			$ok = mkdir($dir, 0777 );
			umask($oldumask);
			if (!$ok) {
				return ( $dir );
			}
		}

		$dir = $dir . '/';

		$comment_date = time();

		$stamp = date('ymd-His');
		if ( $blog_config[ 'blog_enable_gzip_txt' ] ) {
			$entryFile = $dir.'comment'.$stamp.'.txt.gz';
		} else {
			$entryFile = $dir.'comment'.$stamp.'.txt';
		}

		// Save the file
		$save_data = array();
		$save_data[ 'VERSION' ] = $sb_info[ 'version' ];
		$save_data[ 'NAME' ] = clean_post_text( $comment_name );
		$save_data[ 'DATE' ] = $comment_date;
		$save_data[ 'CONTENT' ] = sb_parse_url( clean_post_text( $comment_text ) );
		if ( $comment_email != '' ) {
			$save_data[ 'EMAIL' ] = clean_post_text( $comment_email );
		}
		if ( $comment_url != '' ) {
			$save_data[ 'URL' ] = clean_post_text( $comment_url );
		}
		$save_data[ 'IP-ADDRESS' ] = $user_ip; // New 0.4.8
		$save_data[ 'MODERATIONFLAG' ] = $hold_flag;

		// Implode the array
		$str = implode_with_keys( $save_data );

		// Save the file
		$result = sb_write_file( $entryFile, $str );

		if ( $result ) {
			// Update Most Recent List
	 		add_most_recent( 'comment'.$stamp, $y, $m, $entry );

	 		if ( $blog_config[ 'blog_email_notification' ] ) {
				// Send Email Notification:

				$client_ip_local = getIP();

				$subject=$lang_string[ 'commentposted' ] . ' ' . $blog_config[ 'blog_title' ];
				$body='<b>' . $lang_string[ 'name' ] . '</b> ' . $save_data[ 'NAME' ] . '<br />';
				$body=$body . '<b>' . $lang_string[ 'IPAddress' ] . '</b> ' . $client_ip_local . ' (' . @gethostbyaddr($client_ip_local) .')<br />';
				$body=$body . '<b>' . $lang_string[ 'useragent' ] . '</b> ' . $_SERVER[ 'HTTP_USER_AGENT' ] . '<br />';
				if ( array_key_exists( 'EMAIL', $save_data ) ) {
					$body=$body . "<b>" . $lang_string[ 'email' ] . "</b> <a href=\"mailto:" . $save_data[ "EMAIL" ] . "\">" . $save_data[ "EMAIL" ] . "</a><br />\n";
				}
				if ( array_key_exists( 'URL', $save_data ) ) {
					$body=$body . "<b>" . $lang_string[ 'homepage' ] . "</b> <a href=\"" . $save_data[ "URL" ] . "\">" . $save_data[ "URL" ] . "</a><br />\n";
				}
				$body=$body . "<br />\n";
				$body=$body . "<b>" . $lang_string[ 'comment' ] . "</b><br />\n";

				$port = ':' . $_SERVER[ 'SERVER_PORT'];
				if ($port == ':80') {
					$port = '';
				}				
				if ( ( dirname($_SERVER[ 'PHP_SELF' ]) == '\\' || dirname($_SERVER[ 'PHP_SELF' ]) == '/' ) ) {
					// Hosted at root.
					$base_url = 'http://'.$_SERVER[ 'HTTP_HOST' ].$port.'/';
				} else {
					// Hosted in sub-directory.
					$base_url = 'http://'.$_SERVER[ 'HTTP_HOST' ].$port.dirname($_SERVER[ 'PHP_SELF' ]).'/';
				}

				$body = $body . '<a href="' . $base_url . 'comments.php?y=' . $y . '&amp;m=' . $m . '&amp;entry=' . $entry . '">' . $base_url . 'comments.php?y=' . $y . '&amp;m=' . $m . '&amp;entry=' . $entry . "</a><br />\n<br />\n";
				$body = $body . sprintf( $lang_string[ 'wrote' ], format_date( $comment_date ), $comment_name, blog_to_html( $comment_text, true, false ) );
				$body = $body . '<br /><br />';

				if ( $blog_config[ 'blog_comments_moderation' ] ) {
					if ( $logged_in == false ) {
						$body = $body . $lang_string['email_moderator'] . "\n";
					}
				}

				// Send the Email
				if ( array_key_exists( 'EMAIL', $save_data ) ) {
					sb_mail( $save_data[ 'EMAIL' ], $blog_config[ 'blog_email' ], $subject, $body, false );
				} else {
					sb_mail( $blog_config[ 'blog_email' ], $blog_config[ 'blog_email' ], $subject, $body, false );
				}
	 		}

			return ( true );
		} else {
			// Error:
			// Probably couldn't create file...
			return ( $entryFile );
		}
	}

	function delete_comment ( $filepath ) {
		// Delete a comment. Also, delete the whole comment folder if it was the only comment.
		//

		// Delete comment file
		$ok = sb_delete_file( $filepath );

		// Trim off filename and leave path to last directory.
		$dirpath = $filepath;
		$pos = strrpos( $dirpath, '/' );
		if ($pos !== false) {
			$dirpath = substr( $dirpath, 0, $pos );

			// Get listing of files in folder.
			$file_array = sb_folder_listing( $dirpath . '/', array( '.txt', '.gz' ) );
			if ( count( $file_array ) == 0 ) {
				// Directory is empty, delete it...
				sb_delete_directory( $dirpath );
			}

	      $pos = strrpos( $dirpath, '/' );
   		if ($pos !== false) {
   			$dirpath = substr( $dirpath, 0, $pos );

   			// Get listing of files in folder.
   			$file_array = sb_folder_listing( $dirpath . '/', array( '.txt', '.gz' ) );
   			if ( count( $file_array ) == 0 ) {
   				// Directory is empty, delete it...
   				sb_delete_directory( $dirpath );
   			} else {
   				if ( $file_array[0] == 'view_counter.txt' ) {
   					// There is one file and it's the 'view_counter.txt' file.
   					//
   					// Delete it and then delete the directory.
   					sb_delete_file( $dirpath . '/view_counter.txt' );
   					$result = sb_delete_directory( $dirpath );
   				}
   			}
			}
		}

		if ( $ok ) {
			delete_most_recent( $filepath );
		}

		return ( $ok );
	}
?>
