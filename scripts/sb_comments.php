<?php 

	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes 
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com
	
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
			if ( count( $exploded_array ) <= 5 ) {
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
				
			} else {
				// New Format: key/value pairs
				// VERSION, NAME, DATE, CONTENT, EMAIL, URL
				
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
		
		// Comments
		$basedir = 'content/';
		$dir = $basedir.$y.'/'.$m.'/'.$entry.'/comments/';
		$file_array = sb_folder_listing( $dir, array( '.txt', '.gz' ) );
		if ( $blog_config[ 'blog_comment_order' ] == 'new_to_old' ) {
			$file_array = array_reverse( $file_array );
		}
		
		// View count
		$view_counter = 1;
		$view_array = sb_folder_listing( $dir.'../', array( '.txt' ) );
		for ( $i = 0; $i < count( $view_array ); $i++ ) {
			if ( $view_array[$i] === 'view_counter.txt' ) {
				$view_counter = intval( sb_read_file( $dir . '../' . $view_array[$i] ) ) + 1;
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
			sb_write_file( $dir . '../view_counter.txt' , $view_counter );
		
			// Display comments Oldest to Newest to. Oldest Comments will be at the top of the page.
			for ( $i = 0; $i <= count( $contents ) - 1; $i++ ) {
				
				$comment_entry_data = comment_to_array( $contents[$i][ 'path' ] );
				
				$entry_array = array();
				
				// I will probably move this into it's own key/value
				// pairs instead of sticking it in the subject line.
				$comment_subject = '';
				
				if ( isset( $comment_entry_data[ 'URL' ] ) ) {
					if ( strpos( strtolower( $comment_entry_data[ 'URL' ] ), 'http://' ) === false ) {
						$comment_subject .= '[url=http://'.($comment_entry_data[ 'URL' ]).' ]'.($comment_entry_data[ 'NAME' ]).'[/url]';
					} else {
						$comment_subject .= '[url='.($comment_entry_data[ 'URL' ]).' ]'.($comment_entry_data[ 'NAME' ]).'[/url]';
					}
				}
				else {
					$comment_subject .= $comment_entry_data[ 'NAME' ];
				}
				if ( isset( $comment_entry_data[ 'EMAIL' ] ) ) {
					$comment_email = sb_display_email( $comment_entry_data[ 'EMAIL' ] );
					$comment_subject .= ' ' . $comment_email;
				}
				
				$entry_array[ 'subject' ] = blog_to_html( $comment_subject, true, false, true );
				$entry_array[ 'date' ] = blog_to_html( format_date( $comment_entry_data[ 'DATE' ] ), true, false );
				$entry_array[ 'entry' ] = blog_to_html( $comment_entry_data[ 'CONTENT' ], true, false, true ) . '<br clear="all" />';
				
				$entry_array[ 'logged_in' ] = $logged_in;
				
				// Author
				if ( $logged_in ) {
					$entry_array[ 'delete' ][ 'name' ] = $lang_string[ 'delete_btn' ];
					$entry_array[ 'delete' ][ 'url' ] = 'comment_delete_cgi.php?y='.$y.'&m='.$m.'&entry='.$entry.'&comment='.$dir.( $contents[$i][ 'entry' ] );
				}
				
				$entry_array[ 'count' ] = $i;
				$entry_array[ 'maxcount' ] = count( $contents ) - 1;
				
				$blog_content = $blog_content . theme_commententry( $entry_array );
			}
		}
		
		return $blog_content;
	}
	
	function sb_display_email ($email)
	{
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
		$htmlstr .= "document.write('<a href=\"mailto:'+".$javastr."'\">('+".$javastr."')</a>');";
		//$htmlstr .= "//-->";
		$htmlstr .= '</script>';
		
		return($htmlstr);
	}
	
	function sb_str_to_ascii ($str)
	{
		$res='';
		for ( $j=0; $j<strlen($str); $j++) {
			$res.='&#' . ord(substr($str, $j, 1)) . ';';
		}
		return($res);
	}

	function write_comment ( $y, $m, $entry, $comment_name, $comment_email, $comment_url, $comment_remember, $comment_text ) {
		// Save new entry or update old entry
		//
		global $blog_config, $sb_info;
		
		//clearstatcache();
		
		if ( $comment_remember!=0 )
		{
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
				// There is a bug in some versions of PHP that will
				// cause mkdir to fail if there is a trailing "/".
				//
				// Thanks to Matt - http://agent.chaosnet.org
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

		// Implode the array
		$str = implode_with_keys( $save_data );
		
		// Save the file		
		$result = sb_write_file( $entryFile, $str );
			
		if ( $result ) {
			// Update Most Recent List
	 		add_most_recent( 'comment'.$stamp, $y, $m, $entry );
	 		
	 		if ( $blog_config[ 'blog_email_notification' ] ) {
				// Send Email Notification:
				
				$subject='New comment posted at ' . $blog_config[ 'blog_title' ];
				$body='<b>Name:</b> ' . $save_data[ 'NAME' ] . '<br />\n';
				if ( array_key_exists( 'EMAIL', $save_data ) ) {
					$body=$body . "<b>Email:</b> <a href=\"mailto:" . $save_data[ "EMAIL" ] . "\">" . $save_data[ "EMAIL" ] . "</a><br />\n";
				}
				if ( array_key_exists( 'URL', $save_data ) ) {
					$body=$body . "<b>Homepage:</b> <a href=\"" . $save_data[ "URL" ] . "\">" . $save_data[ "URL" ] . "</a><br />\n";
				}
				$body=$body . "<br />\n";
				$body=$body . "<b>Comment:</b><br />\n";
				
				if ( ( dirname($_SERVER[ 'PHP_SELF' ]) == '\\' || dirname($_SERVER[ 'PHP_SELF' ]) == '/' ) ) {
					// Hosted at root.
					$base_url = 'http://'.$_SERVER[ 'HTTP_HOST' ].'/';
				} else {
					// Hosted in sub-directory.
					$base_url = 'http://'.$_SERVER[ 'HTTP_HOST' ].dirname($_SERVER[ 'PHP_SELF' ]).'/';
				}
				
				$body = $body . '<a href="' . $base_url . 'comments.php?y=' . $y . '&m=' . $m . '&entry=' . $entry . '">' . $base_url . 'comments.php?y=' . $y . '&m=' . $m . '&entry=' . $entry . "</a><br />\n<br />\n";
				$body = $body . '<i>On ' . format_date( $comment_date ) . ', ' . $comment_name . " wrote:</i><br />\n<br />\n" . blog_to_html( $comment_text, true, false );
				
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
