<?php 

	// The Simple PHP Blog is released under the GNU Public License.

	//

	// You are free to use and modify the Simple PHP Blog. All changes 

	// must be uploaded to SourceForge.net under Simple PHP Blog or

	// emailed to apalmo <at> bigevilbrain <dot> com

	// ------------------------

	// "Archive Menu" Functions

	// ------------------------

	function read_menus_calendar ( $m, $y, $d ) {

		global $lang_string, $user_colors;

		

		if ( !isset( $m ) ) {

			$m = date( 'm' );

		}

		if ( !isset( $y ) ) {

			$y = date( 'y' );

		}

		if ( !isset( $d ) ) {

			$d = date( 'd' );

		}

		

		$entries = sb_folder_listing( 'content/' . $y . '/' . $m . '/', array( '.txt', '.gz' ) );

		// Loop Through Days

		for ( $i = 0; $i < count( $entries ); $i++ ) {

			$temp_index = substr( $entries[$i], 9, 2 )-1;

			$temp_entry = substr( $entries[$i], 0, 11 );

			// Count the number of entries on this day

			$counts[$temp_index] = 1;

			for ( $j = $i + 1; $j < count( $entries ); $j++ ) {

				if ( $temp_entry == substr( $entries[$j], 0, 11 ) ) {

					$counts[$temp_index]++;

				} 

				else {

					break;

				}

			}

			$i = $j - 1;

		}

		

		$date_string = mktime(0, 0, 0, $m, 1, $y ); //The date string we need for some info... saves space ^_^

		$day_start = date( 'w', $date_string ); //The number of the 1st day of the week

		if ( strftime( '%w', mktime( 0, 0, 0, 1, 1, 2007 ) )!=0 )

		{

			$day_start = ( $day_start + 6 ) % 7;

		}

		//Calculate the previous/next month/year

		if ( $m < 12 )

		{

			$next_month = $m + 1;

			$next_year = $y + 2000;

		}

		else

		{

			$next_year = $y + 1;

			$next_month = 1;

		}

		if ( $m > 1 )

		{

			$previous_month = $m - 1;

			$previous_year = $y;

		}

		else

		{

			$previous_year = $y - 1;

			$previous_month = 12;

		}

		$str = '

		<table border="0" cellpadding="0" cellspacing="0" align="center" class="calendar">

		<tr>

		<td align="center"><a href="' . $_SERVER['PHP_SELF'] . '?y=' . sprintf( '%02d', $previous_year % 100 ) . '&m=' . sprintf( '%02d', $previous_month ) .'">&laquo;</a></td>

		<td align="center" colspan="5"><b>' . ucwords( strftime( '%B %Y', $date_string) ) . '</b></td>

		<td align="center"><a href="' . $_SERVER['PHP_SELF'] . '?y=' . sprintf( '%02d', $next_year % 100 ) . '&m=' . sprintf( '%02d', $next_month ) .'">&raquo;</a></td>

		</tr>

		<tr>';

		for ( $i=0; $i<7; $i++ )

		{

			if ( $day_start!=0 )

			{

				$str = $str . '<td>' . ucwords( strftime( '%a', mktime(0, 0, 0, 1, ($i+1)%7, 1990 ) ) ) . '</td>';

			}

			else

			{

				$str = $str . '<td>' . ucwords( strftime( '%a', mktime(0, 0, 0, 1, ($i+7)%7, 1990 ) ) ) . '</td>';

			}

		}

		

		$str = $str . '</tr><tr>';

		

		//The empty columns before the 1st day of the week

		for ( $i = 0; $i<$day_start; $i++ )

		{

			$str = $str . '<td>&nbsp;</td>';

		}

		$current_position = $day_start; //The current (column) position of the current day from the loop

		$total_days_in_month = date( 't', $date_string); //The total days in the month for the end of the loop

		//Loop all the days from the month

		for ( $i = 1; $i<=$total_days_in_month; $i++)

		{

			if ( mktime(0, 0, 0, $m, $i, $y ) == mktime(0, 0, 0 ) )

			{

				$str = $str . '<td align="center"><u>';

			}

			else

			{

				$str = $str . '<td align="center">';

			}

			if ( $counts[$i-1] > 0 )

			{

				$str = $str . '<a href="index.php?d=' . sprintf( '%02d', $i) . '&m=' . sprintf( '%02d', $m ) . '&y=' . sprintf( '%02d', $y % 100 ) . '" title="' . $counts[$i-1] . '">' . $i . '</a>';

			}

			else

			{

				$str = $str . $i;

			}

			if ( mktime(0, 0, 0, $m, $i, $y ) == mktime(0, 0, 0 ) )

			{

				$str = $str . '</u></td>';

			}

			else

			{

				$str = $str . '</td>';

			}

			

			$current_position++;

			

			if ( $current_position == 7 )

			{

				$str = $str . '</tr><tr>';

				$current_position = 0;

			}

		}

		$end_day = 7-$current_position; //There are

		//Fill the last columns

		for ( $i = 0; $i<$end_day; $i++ )

		{

			$str = $str . '<td></td>';

		}

		$str = $str . '</tr><tr>';

		$str = $str . '<td colspan=7 align="center">' . strftime( '<a href="index.php?y=%y&m=%m&d=%d">%x') . '</a></td></tr></table>'; // Close the table

		return( $str );

	}

	

	function read_menus_tree ( $m, $y, $d ) {

		// Create the right-hand navigation menu. Return HTML

		//

		global $lang_string, $default_view;

		

		$str = NULL;

		$basedir = 'content/';

		

		$months = $lang_string['sb_months'];

		

		// Open Base Directory

		// (The '@' before the call is to suppress the error if the directory is not found.)

		$dhandle = @opendir($basedir);

		if ($dhandle != false) {

			// Loop Through Files in Directory

			$dirname = readdir($dhandle);

			while ($dirname != false) {

				if ( $dirname != '.' && $dirname != '..' && $dirname != 'static') { 

				

					// Year Folder

					if (is_dir( $basedir . $dirname )) {

						

						// Store Year Text

						$str_year = '20' . $dirname . '<br />';

						

						// Open Year Folder

						$subdhandle = opendir($basedir . $dirname . '/' );

						if ($subdhandle != false) {

												

							// Loop Through Files in Directory

							$subdirname = readdir($subdhandle);

							$str_month = NULL;

							

							while ($subdirname != false) {

								if ( $subdirname != '.' && $subdirname != '..' ) { 

								

									// Month Folder

									if ( is_dir( $basedir.$dirname.'/'.$subdirname ) ) {

										$entries = sb_folder_listing( $basedir.$dirname.'/'.$subdirname.'/', array( '.txt', '.gz' ) );

										

										if ( intval( $subdirname ) == $m && intval( $dirname ) == $y ) {

											// Currently Selected Month 

											

											// Loop Through Days

											for ( $i = 0; $i < count( $entries ); $i++ ) {

												$temp_day = substr( $entries[$i], 9, 2 );

												$temp_month = substr( $entries[$i], 7, 2 );

												$temp_year = substr( $entries[$i], 5, 2 );

												$stamp = strtotime( $temp_month . '/' . $temp_day . '/' . $temp_year );

												$temp_date = format_date_menu( $stamp );

												

												// Count the number of entries on this day

												$temp_count = 1;

												for ( $j = $i + 1; $j < count( $entries ); $j++ ) {

													if ( $temp_day == substr( $entries[$j], 9, 2 ) &&

														 $temp_month == substr( $entries[$j], 7, 2 ) &&

														 $temp_year == substr( $entries[$j], 5, 2 ) ) {

														$temp_count++;

													} else {

														break;

													}

												}

												$i = $j - 1;

													

												if ( $temp_day == $d && $default_view == false ) {

													// Currently Selected Day

													$str_month = '&nbsp;&nbsp;&nbsp;' . $temp_date . ' ( ' . $temp_count . ' )' . '<br />' . $str_month;

												} else {

													if ( $default_view != 2) {

														// Non-Selected Days

														$str_month = '<a href="index.php?m='.$subdirname.'&y='.$dirname.'&d='.$temp_day.'">&nbsp;&nbsp;&nbsp;' . $temp_date  . ' ( ' . $temp_count . ' )' . '</a><br />' . $str_month;

													}

												}

											}

											

											$str_month = '<a href="index.php?m='.$subdirname.'&y='.$dirname.'&default_view=1">' . $months[ intval($subdirname) - 1 ].' ( '.count( $entries ).' )</a><br />' . $str_month;

										} else {

											// Non-Selected Months

											if ( count( $entries ) > 0 ) {

												$latest_d = substr( $entries[ count( $entries ) - 1 ], 9, 2 );

												$str_month = '<a href="index.php?m='.$subdirname.'&y='.$dirname.'&d='.$latest_d.'&default_view=1">'.$months[ intval($subdirname) - 1 ].' ( '.count( $entries ).' )</a><br />' . $str_month;

											} else {

												$str_month = '<a href="index.php?m='.$subdirname.'&y='.$dirname.'&default_view=1">'.$months[ intval($subdirname) - 1 ].' ( '.count( $entries ).' )</a><br />' . $str_month;

											}

										}

									}

								}

								

								$subdirname = readdir($subdhandle);

							}

							

							$str_year = $str_year.$str_month;

							$str = $str_year . $str;

							

						}

						closedir($subdhandle);

					}

				}

				$dirname = readdir($dhandle);

			}

			closedir($dhandle);

		}

		

		return ( $str );

	}

	// ----------------------

	// "Links Menu" Functions

	// ----------------------

	

	function read_links ( $logged_in ) {

		// Create the right-hand link menu. Return HTML

		//

	

		global $lang_string;

		

		// Read links file.

		$filename = 'config/links.txt';

		$result = sb_read_file( $filename );

		

		// Append new links.

		$str = NULL;

		if ( $result ) {

			$array = explode('|', $result);

			for ( $i = 0; $i < count( $array ); $i = $i + 2 ) {

				if ( $array[$i+1] == '' ) {

					$str = $str . '<br />' . $array[$i] . '<br />';

				} else {

					$str = $str . '<a href="' . $array[$i+1] . '">' . $array[$i] . '</a><br />';

				}

			}

		}

		

		if ( $logged_in === true ) {

			$str = $str . '<a href="add_link.php">[ ' . $lang_string['sb_add_link_btn']  . ' ]</a><br />';

		}

		

		return ( $str );

	}

	

	function write_link ( $link_name, $link_url, $link_id ) {

		// Save new link. Update links file

		//

		

		// write_link( clean_post_text( $blog_subject ), 'static.php?page='.$entryFile, $i-1 );

		

		// Clean up link name and make safe for HTML and text database storage.

		global $lang_string;

		$link_name = str_replace( '|', ':', $link_name );

		$link_name = htmlspecialchars( $link_name, ENT_QUOTES, $lang_string['php_charset'] );

		

		// Clean up link url and make safe text database storage.

		$link_url = str_replace( '|', ':', $link_url );

		

		// Read old links file.

		$filename = 'config/links.txt';

		$result = sb_read_file( $filename );

	

		// Append new links.

		if ( $result ) {

			$array = explode('|', $result);

			

			if ( $link_id !== '' ) {

				array_splice( $array, $link_id, 2 );

				array_splice( $array, $link_id, 0, array( $link_name, $link_url ) );

			} else {

				array_push( $array, $link_name );

				array_push( $array, $link_url );

			}

		} else {

			$array = array( $link_name, $link_url );

		}

		

		// Save links to file.

		$str = implode('|', $array);

		$result = sb_write_file( $filename, $str );

		

		if ( $result ) {

			return ( true );

		} else {

			// Error:

			// Probably couldn't create file...

			return ( $filename );

		}

	}

	

	function modify_link ( $action, $link_id ) {

		// Modify links.

		// Move links up or down, edit or delete.

		

		// Read links file.

		$filename = 'config/links.txt';

		$result = sb_read_file( $filename );

		

		// Append new links.

		if ( $result ) {

			$array = explode('|', $result);

			

			if ( $action === 'up' ) {

				if ( count( $array ) > 2 && $link_id != 0 ) {

					$pop_array = array_splice( $array, $link_id, 2 );

					array_splice( $array, $link_id-2, 0, $pop_array );

				}

			}

			if ( $action === 'down' ) {

				if ( count( $array ) > 2 && $link_id < ( count( $array ) - 3 ) ) {

					$pop_array = array_splice( $array, $link_id, 2 );

					array_splice( $array, $link_id+2, 0, $pop_array );

				}

			}

			if ( $action === 'delete' ) {

				if ( $link_id <= ( count( $array ) - 1 ) ) {

					array_splice( $array, $link_id, 2 );

				}

			}

			if ( $action === 'delete_static' ) {

				for ( $i = 0; $i < count( $array ); $i++ ) {

					if ( $link_id == $array[$i] ) {

						array_splice( $array, $i-1, 2 );

						break;

					}

				}

			}

		}

		

		// Save links to file.

		$str = implode('|', $array);

		$result = sb_write_file( $filename, $str );

		

		if ( $result ) {

			return ( true );

		} else {

			// Error:

			// Probably couldn't create file...

			return ( $filename );

		}

	}

	

	// DATOH_ADD

	// ----------------------------

	// "Blocks" Functions

	// ----------------------------

	function read_blocks ( $logged_in ) {

		// Create the right-hand block. Return array

		//

	

		global $blog_content, $blog_subject, $blog_text, $blog_date, $user_colors, $logged_in;

		global $lang_string;

		

		// Read blocks file.

		$filename = 'config/blocks.txt';

		$result = sb_read_file( $filename );

		

		// Append new blocks.

		$block_array = array();

		if ( $result ) {

			$array = explode('|', $result);

			for ( $i = 0; $i < count( $array ); $i+=2 ) {

				$block_array[$i] = blog_to_html( $array[$i], false, false );

				$block_array[$i + 1] = blog_to_html( $array[$i + 1], false, false );

			}

		}

		

		return ( $block_array );

	}

	

	function write_block ( $block_name, $block_content, $block_id ) {

		// Save new block. Update blocks file

		//

		

		// Clean up block name and make safe for HTML and text database storage.

		global $lang_string;

		$block_name = str_replace( '|', ':', $block_name );

		$block_name = htmlspecialchars( $block_name, ENT_QUOTES, $lang_string['php_charset'] );

		

		// Clean up block url and make safe text database storage.

		$block_content = clean_post_text(str_replace( '|', ':', $block_content ));

		

		// Read old blocks file.

		$filename = 'config/blocks.txt';

		$result = sb_read_file( $filename );

	

		// Append new blocks.

		if ( $result ) {

			$array = explode('|', $result);

			

			if ( $block_id !== "" ) {

				array_splice( $array, $block_id, 2 );

				array_splice( $array, $block_id, 0, array( $block_name, $block_content ) );

			} else {

				array_push( $array, $block_name );

				array_push( $array, $block_content );

			}

		} else {

			$array = array( $block_name, $block_content );

		}

		

		// Save blocks to file.

		$str = implode('|', $array);

		$result = sb_write_file( $filename, $str );

		

		if ( $result ) {

			return ( true );

		} else {

			// Error:

			// Probably couldn't create file...

			return ( $filename );

		}

	}

	

	function modify_block ( $action, $block_id ) {

		// Modify blocks.

		// Move blocks up or down, edit or delete.

		

		// Read blocks file.

		$filename = 'config/blocks.txt';

		$result = sb_read_file( $filename );

		

		// Append new blocks.

		if ( $result ) {

			$array = explode('|', $result);

			

			if ( $action === "up" ) {

				if ( count( $array ) > 2 && $block_id != 0 ) {

					$pop_array = array_splice( $array, $block_id, 2 );

					array_splice( $array, $block_id-2, 0, $pop_array );

				}

			}

			if ( $action === "down" ) {

				if ( count( $array ) > 2 && $block_id < ( count( $array ) - 3 ) ) {

					$pop_array = array_splice( $array, $block_id, 2 );

					array_splice( $array, $block_id+2, 0, $pop_array );

				}

			}

			if ( $action === "delete" ) {

				if ( $block_id <= ( count( $array ) - 1 ) ) {

					array_splice( $array, $block_id, 2 );

				}

			}

			if ( $action === "delete_static" ) {

				for ( $i = 0; $i < count( $array ); $i++ ) {

					if ( $block_id == $array[$i] ) {

						array_splice( $array, $i-1, 2 );

						break;

					}

				}

			}

		}

		

		// Save blocks to file.

		$str = implode('|', $array);

		$result = sb_write_file( $filename, $str );

		

		if ( $result ) {

			return ( true );

		} else {

			// Error:

			// Probably couldn't create file...

			return ( $filename );

		}

	}

	// DATOH_END

	// ----------------------------

	// "Most Recent Menu" Functions

	// ----------------------------

	

	function add_most_recent ( $comment_id, $y, $m, $blog_entry_id ) {

		// Add an item to the 'Last Updated' List

		//

		

		// Read links file.

		$filename = 'config/last_updated.txt';

		$result = sb_read_file( $filename );

		

		// Append new links.

		if ( $result ) {

			$array = explode('|', $result);

			array_push( $array, $blog_entry_id, $m, $y, $comment_id );

		} else {

			$array = array( $blog_entry_id, $m, $y, $comment_id );

		}

		

		$max_comments = 5;

		if ( count( $array ) > ( ( $max_comments * 4 ) - 1 ) ) {

			// $array = array_reverse( $array );

			$array = array_slice( $array, $max_comments * -4, $max_comments * 4);

			// $array = array_reverse( $array );

		}

		

		// Save links to file.

		$str = implode( '|', $array );

		sb_write_file( $filename, $str );

	}

	

	function delete_most_recent ( $item_filename ) {

		// Delete an item to the 'Last Updated' List

		//

		

		// Read links file.

		$filename = 'config/last_updated.txt';

		$result = sb_read_file( $filename );

		$blog_entry_id = str_replace( '/', '', sb_strip_extension( strrchr( $item_filename, '/') ) );

		

		// Append new links.

		$str = NULL;

		$update_file = false;

		if ( $result ) {

			$array = explode('|', $result);

			$array = array_reverse( $array );

			for ( $i = 0; $i < count( $array ); $i = $i + 4 ) {

				if ( $blog_entry_id == $array[$i] ) {

					array_splice( $array, $i, 4 );

					$update_file = true;

					break;

				}

			}

		}

		

		// Save links to file.

		if ( $update_file ) {

			$array = array_reverse( $array );

			$str = implode('|', $array);

			sb_write_file( $filename, $str );

		}

	}

	

	function get_most_recent () {

		// Read last updated items from disk, return HTML

		//

		global $lang_string, $user_colors;

		

		// Read links file.

		$filename = 'config/last_updated.txt';

		$result = sb_read_file( $filename );

		

		// Append new links.

		$str_comments = NULL;

		if ( $result ) {

			$array = explode('|', $result);

			$array = array_reverse( $array );

			for ( $i = 0; $i < count( $array ); $i = $i + 4 ) {

				$comment_id = $array[$i+0];

				$y = $array[$i+1];

				$m = $array[$i+2];

				$blog_entry_id = $array[$i+3];

				

				$comment_file = 'content/'.$y.'/'.$m.'/'. sb_strip_extension( $blog_entry_id ).'/comments/'.$comment_id;

				if ( file_exists( $comment_file . '.txt' ) ) {

					$comment_file = $comment_file . '.txt';

				} elseif ( file_exists( $comment_file . '.txt.gz' ) ) {

					$comment_file = $comment_file . '.txt.gz';

				}

				

				$comment_entry_data = comment_to_array( $comment_file );

				if ( $comment_entry_data !== false) {

					global $blog_config;

					

					$comment_name = $comment_entry_data["NAME"];

					$comment_date = $comment_entry_data["DATE"];

					$comment_text = $comment_entry_data["CONTENT"];

					

					$comment_text = blog_to_html( $comment_text, false, true );

					

					if ( strlen( $comment_name ) > 40 ) {

						$comment_name = substr( $comment_name, 0, 40 );

						$comment_name = substr( $comment_name, 0, strrpos( $comment_name, ' ' ) ) . '...';

					}

					

					if ( strlen( $comment_text ) > 40 ) {

						$comment_text = substr( $comment_text, 0, 40 );

						$comment_text = substr( $comment_text, 0, strrpos( $comment_text, ' ' ) ) . '...';

					}

					

					global $blog_config, $theme_vars;

					if ( $blog_config[ 'blog_comments_popup' ] == 1 ) {

						$str_comments = $str_comments . '<a href="javascript:openpopup(\'comments.php?y='.$y.'&m='.$m.'&entry='.$blog_entry_id.'\','.$theme_vars['popup_window']['width'].','.$theme_vars['popup_window']['height'].',true)">'.$comment_name.'</a><br />';

					} else {

						$str_comments = $str_comments . '<a href="comments.php?y='.$y.'&m='.$m.'&entry='.$blog_entry_id.'">'.$comment_name.'</a><br />';

					}

					

					// $str_comments = $str_comments . format_date_menu( $comment_date ) . '<br />';

					$str_comments = $str_comments . format_date( $comment_date ) . '<br />';

					$str_comments = $str_comments . $comment_text . '<p />';

				}

			}

		}

		

		return ( $str_comments );

	}

	

	function add_most_recent_trackback ( $trackback_id, $y, $m, $blog_entry_id ) {

		// Add an item to the 'Last Updated' List

		//

		

		// Read links file.

		$filename = 'config/last_updated_trackback.txt';

		$result = sb_read_file( $filename );

		

		// Append new links.

		if ( $result ) {

			$array = explode('|', $result);

			array_push( $array, $blog_entry_id, $m, $y, $trackback_id );

		} else {

			$array = array( $blog_entry_id, $m, $y, $trackback_id );

		}

		

		$max_comments = 5;

		if ( count( $array ) > ( ( $max_comments * 4 ) - 1 ) ) {

			// $array = array_reverse( $array );

			$array = array_slice( $array, $max_comments * -4, $max_comments * 4);

			// $array = array_reverse( $array );

		}

		

		// Save links to file.

		$str = implode( '|', $array );

		sb_write_file( $filename, $str );

	}

	

	function delete_most_recent_trackback ( $item_filename ) {

		// Delete an item to the 'Last Updated' List

		//

		

		// Read links file.

		$filename = 'config/last_updated_trackback.txt';

		$result = sb_read_file( $filename );

		$blog_entry_id = str_replace( '/', '', sb_strip_extension( strrchr( $item_filename, '/') ) );

		

		// Append new links.

		$str = NULL;

		$update_file = false;

		if ( $result ) {

			$array = explode('|', $result);

			$array = array_reverse( $array );

			for ( $i = 0; $i < count( $array ); $i = $i + 4 ) {

				if ( $blog_entry_id == $array[$i] ) {

					array_splice( $array, $i, 4 );

					$update_file = true;

				}

			}

		}

		

		// Save links to file.

		if ( $update_file ) {

			$array = array_reverse( $array );

			$str = implode('|', $array);

			sb_write_file( $filename, $str );

		}

	}

	

	function get_most_recent_trackback () {

		// Read last updated items from disk, return HTML

		//

		global $lang_string, $user_colors;

		

		// Read links file.

		$filename = 'config/last_updated_trackback.txt';

		$result = sb_read_file( $filename );

		

		// Append new links.

		$str_trackbacks = NULL;

		if ( $result ) {

			$array = explode('|', $result);

			$array = array_reverse( $array );

			for ( $i = 0; $i < count( $array ); $i = $i + 4 ) {

				$trackback_id = $array[$i+0];

				$y = $array[$i+1];

				$m = $array[$i+2];

				$blog_entry_id = $array[$i+3];

				

				$trackback_file = 'content/'.$y.'/'.$m.'/'. sb_strip_extension( $blog_entry_id ).'/trackbacks/'.$trackback_id;

				if ( file_exists( $trackback_file . '.txt' ) ) {

					$trackback_file = $trackback_file . '.txt';

				} elseif ( file_exists( $trackback_file . '.txt.gz' ) ) {

					$trackback_file = $trackback_file . '.txt.gz';

				}

				

				$trackback_entry_data = comment_to_array( $trackback_file );

				if ( $trackback_entry_data !== false) {

					$trackback_date = $trackback_entry_data["DATE"];

					$trackback_title = $trackback_entry_data["TITLE"];

					$trackback_blogname = $trackback_entry_data["BLOGNAME"];

					

					if ( strlen( $trackback_title ) > 40 ) {

						$trackback_title = substr( $trackback_title, 0, 40 );

						$trackback_title = substr( $trackback_title, 0, strrpos( $trackback_title, ' ' ) ) . '...';

					}

					

					if ( strlen( $trackback_blogname ) > 40 ) {

						$trackback_blogname = substr( $trackback_blogname, 0, 40 );

						$trackback_blogname = substr( $trackback_blogname, 0, strrpos( $trackback_blogname, ' ' ) ) . '...';

					}

					

					global $blog_config, $theme_vars;

					if ( $blog_config[ 'blog_comments_popup' ] == 1 ) {

						$str_trackbacks = $str_trackbacks . '<a href="javascript:openpopup(\'trackback.php?y='.$y.'&m='.$m.'&entry='.$blog_entry_id.'&__mode=html\','.$theme_vars['popup_window']['width'].','.$theme_vars['popup_window']['height'].',true)">'.$trackback_title.'</a><br />';

					} else {

						$str_trackbacks = $str_trackbacks . '<a href="trackback.php?y='.$y.'&m='.$m.'&entry='.$blog_entry_id.'&__mode=html">'.$trackback_title.'</a><br />';

					}

					

					$str_trackbacks = $str_trackbacks . format_date_menu( $trackback_date ) . '<br />';

					$str_trackbacks = $str_trackbacks . $trackback_blogname . '<p />';

				}

			}

		}

		

		return ( $str_trackbacks );

	}

?>
