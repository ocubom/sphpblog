<?php 

	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes 
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com
	
	// ----------------------
	// Blog Display Functions
	// ----------------------
	
	function read_entries ( $m, $y, $d, $logged_in, $start_entry, $category ) {		
		// Read entries by month, year and/or day. Generate HTML output.
		//
		// Used for the main Index page.
		global $lang_string, $blog_config, $user_colors, $theme_vars;
		
		$entry_file_array = blog_entry_listing( );
		
		// Loop through the $entry_file_array looking for the
		// first match. Note that $d could be NULL in which
		// case we get the first entry for the month.
		//
		// This is fine because this is actually what we
		// are looking for anyway.
		//
		// I'm just using a brute force method, I'm sure there
		// are better ways to do this... :)
		if ( $start_entry != NULL ) {
			$look_for = $start_entry;
		} else {
			$look_for = 'entry' . $y . $m . $d;
		}
		
		$entry_index = 0;
		for ( $i = 0; $i < count( $entry_file_array ); $i++ ) {
			if ( $look_for == substr( $entry_file_array[ $i ], 0, strlen( $look_for ) ) ) {
				// MATCH!
				$entry_index = $i;
				break;
			}
		}
		
		// Grab the next X number of entries
		$file_array = array();
		if ( isset( $category ) ) {
			// Filter Entries by Category
			//
			// Unfortunately we actually have to open up the file
			// and read it to figure out what category the entry
			// belongs to. I think we should probably start saving
			// an index file of all the entries and categories.
			// I'm sure it would be faster when blogs start to have
			// to 1000's of entries.
			//
			for ( $i = $entry_index; $i < count( $entry_file_array ); $i++ ) {			
				list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $entry_file_array[ $i ] );
				$blog_entry_data = blog_entry_to_array( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );
				if ( array_key_exists( 'CATEGORIES', $blog_entry_data ) ) {
					$cat_array = explode( ',', $blog_entry_data[ 'CATEGORIES' ] );
					for ( $j=0; $j < count($cat_array); $j++ ) {
						if ( $cat_array[ $j ] == $category ) {
							array_push( $file_array, $entry_file_array[ $i ] );
							// Look for +1 entries (for the next button...)
							if ( count( $file_array ) >= $blog_config[ 'blog_max_entries' ] + 1 ) {
								// We've found all X entries.
								// Break out of the "j" and the "i" loops.
								break 2;
							} else {
								// We've added this entry to the list,
								// we don't want to accidently add the
								// entry again. (This is mainly here
								// for future expansion if we start
								// doing searches for multiple categories
								// at the same time...)
								break 1;
							}
						}
					}
				}
			}
			
			// Store info for next and previous links...
			if ( count( $file_array ) > $blog_config[ 'blog_max_entries' ] ) {
				$next_entry = array_pop( $file_array );
			} else {
				$next_entry = NULL;
			}
			
			// Now we have to search backwards...
			if ( $entry_index == 0 ) {
				$previous_entry = NULL;
			} else {
				$previous_file_array = array();
				for ( $i = $entry_index; $i >= 0; $i-- ) {
					list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $entry_file_array[ $i ] );
					$blog_entry_data = blog_entry_to_array( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );
					if ( array_key_exists( 'CATEGORIES', $blog_entry_data ) ) {
						$cat_array = explode( ',', $blog_entry_data[ 'CATEGORIES' ] );
						for ( $j=0; $j < count($cat_array); $j++ ) {
							if ( $cat_array[ $j ] == $category ) {
								array_push( $previous_file_array, $entry_file_array[ $i ] );
								// Look for +1 entries (for the next button...)
								if ( count( $previous_file_array ) >= $blog_config[ 'blog_max_entries' ] + 1) {
									// We've found all X entries.
									// Break out of the "j" and the "i" loops.
									break 2;
								} else {
									// We've added this entry to the list,
									// we don't want to accidently add the
									// entry again. (This is mainly here
									// for future expansion if we start
									// doing searches for multiple categories
									// at the same time...)
									break 1;
								}
							}
						}
					}
				}
				
				$previous_entry = $previous_file_array[ count( $previous_file_array ) - 1 ];
			}
		} else {
			// No Filtering
			for ( $i = $entry_index; $i < min( ( $blog_config[ 'blog_max_entries' ] + $entry_index ), count( $entry_file_array ) ); $i++ ) {
				array_push( $file_array, $entry_file_array[ $i ] );
			}
			
			// Store info for next and previous links...
			if ( $entry_index + $blog_config[ 'blog_max_entries' ] < count( $entry_file_array ) ) {
				$next_entry = $entry_file_array[ $entry_index + $blog_config[ 'blog_max_entries' ] ];
			} else {
				$next_entry = NULL;
			}
			
			if ( $entry_index - $blog_config[ 'blog_max_entries' ] >= 0 ) {
				$previous_entry = $entry_file_array[ $entry_index - $blog_config[ 'blog_max_entries' ] ];
			} else {
				$previous_entry = NULL;
			}
		}
		
		// Flip entry order
		if ( $blog_config[ 'blog_entry_order' ] == 'old_to_new' ) {
			$file_array = array_reverse( $file_array );
		}
		
		// Read entry files
		$contents = array();
		for ( $i = 0; $i < count( $file_array ); $i++ ) {
			list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $file_array[ $i ] );
			array_push( $contents, array( 	'entry' => $entry_filename,
											'year' => $year_dir,
											'month' => $month_dir ) );
		}
		
		$blog_content = '';
		if ( $contents ) {
			if ( ( dirname($_SERVER[ 'PHP_SELF' ]) == '\\' || dirname($_SERVER[ 'PHP_SELF' ]) == '/' ) ) {
				// Hosted at root.
				$base_permalink_url = 'http://'.$_SERVER[ 'HTTP_HOST' ].'/';
			} else {
				// Hosted in sub-directory.
				$base_permalink_url = 'http://'.$_SERVER[ 'HTTP_HOST' ].dirname($_SERVER[ 'PHP_SELF' ]).'/';
			}
			
			// I'm putting this check in here for people who have made
			// custom themes before I added these values...
			global $theme_vars;
			if ( is_array( $theme_vars ) ) {
				if ( isset( $theme_vars[ 'popup_window' ][ 'width' ] ) === false ) {
					$theme_vars[ 'popup_window' ][ 'width' ] = 500;
				}
				if ( isset( $theme_vars[ 'popup_window' ][ 'height' ] ) === false ) {
					$theme_vars[ 'popup_window' ][ 'height' ] = 500;	
				}	
			
			} else {
				$theme_vars = array();
				$theme_vars[ 'popup_window' ][ 'width' ] = 500;
				$theme_vars[ 'popup_window' ][ 'height' ] = 500;
			}

			for ( $i = 0; $i <= count( $contents ) - 1; $i++ ) {
				// Read and Parse Blog Entry
				$blog_entry_data = blog_entry_to_array( 'content/' . $contents[$i][ 'year' ] . '/' . $contents[$i][ 'month' ] . '/' . $contents[$i][ 'entry' ] );
				
				$entry_array = array();
				
				// Subject / Date
				$entry_array[ 'subject' ] = blog_to_html( $blog_entry_data[ 'SUBJECT' ], false, false );
				$entry_array[ 'date' ] = blog_to_html( format_date( $blog_entry_data[ 'DATE' ] ), false, false );
				
				// Categories
				if ( array_key_exists( 'CATEGORIES', $blog_entry_data ) ) {
					$temp_cat_array = explode( ',', $blog_entry_data[ 'CATEGORIES' ] );
					$temp_cat_names = Array();
					for ( $j = 0; $j < count( $temp_cat_array ); $j++ ) {
						array_push( $temp_cat_names, get_category_by_id ( $temp_cat_array[$j] ) );
					}
					$entry_array[ 'categories' ] = $temp_cat_names;
				}
				
				// Author edit and delete
				$entry = sb_strip_extension( $contents[$i][ 'entry' ] );
				$y = sb_strip_extension( $contents[$i][ 'year' ] );
				$m = sb_strip_extension( $contents[$i][ 'month' ] );
				
				if ( $logged_in ) {
					$entry_array[ 'edit' ][ 'name' ] = $lang_string[ 'sb_edit' ];
					$entry_array[ 'edit' ][ 'url' ] = 'preview_cgi.php?y='.$y.'&amp;m='.$m.'&amp;entry='.$entry;
					$entry_array[ 'delete' ][ 'name' ] = $lang_string[ 'sb_delete' ];
					$entry_array[ 'delete' ][ 'url' ] = 'delete.php?y='.$y.'&amp;m='.$m.'&amp;entry='.$entry;
				}
				$entry_array[ 'permalink' ][ 'name' ] = $lang_string[ 'sb_permalink' ];
				$entry_array[ 'permalink' ][ 'url' ] = $base_permalink_url . 'index.php?entry=' . $entry;
				
				$entry_array[ 'entry' ] = blog_to_html( $blog_entry_data[ 'CONTENT' ], false, false ) . '<br clear="all" />';
				
				// Comments link and count
				$comment_trackback_base = 'content/'.$y.'/'.$m.'/'.$entry.'/';
				$comment_path = $comment_trackback_base.'comments/';
				$comment_array = sb_folder_listing( $comment_path, array( '.txt', '.gz' ) );
				$comment_count = count( $comment_array );
				
				// Trackbacks link and count
				$trackback_path = $comment_trackback_base.'trackbacks/';
				$trackback_array = sb_folder_listing( $trackback_path, array( '.txt', '.gz' ) );
				$trackback_count = count( $trackback_array );

				// Read view counter file
				$view_counter = 0;
				$view_array = sb_folder_listing( $comment_trackback_base, array( '.txt' ) );
				if ( in_array( 'view_counter.txt', $view_array ) ) {
					$view_counter = intval( sb_read_file( $comment_trackback_base . 'view_counter.txt' ) );
				}
				
				// Entry Rating
				if ( $blog_config[ 'blog_enable_voting' ] == true ) {
					$rating_array = read_rating( $y, $m, $entry );
					if ( $rating_array ) {
						$points = $rating_array[ 'points' ];
						$votes = $rating_array[ 'votes' ];
						$rating = $points / $votes / 5;
					} else {
						$points = 0;
						$votes = 0;
						$rating = 0;
					}
						
					global $blog_theme;
					$str = '';
					for ( $star_number = 1; $star_number <= 5; $star_number++ ) {
						$temp_ratio = ( $star_number / 5 );
						if ( $rating >= ( $temp_ratio - .2 ) && $rating < ( $temp_ratio - .1 ) ) {
							$star_image = 'no_star.png';
						} else if ( $rating >= ( $temp_ratio - .1 ) && $rating < $temp_ratio ) {
							$star_image = 'half_star.png';
						} else if ( $rating >= $temp_ratio ) {
							$star_image = 'full_star.png';
						} else {
							$star_image = 'no_star.png';
						}
						$str = $str . '<a href="rate_cgi.php?y=' . $y . '&amp;m=' . $m . '&amp;entry=' . $entry . '&amp;rating=' . $star_number . '" title="' . $lang_string[ 'sb_rate_entry_btn' ] . '"><img src="themes/' . $blog_theme . '/images/stars/' . $star_image . '" alt="Rating star" border="0" /></a>';
					}
					$str = $str . ' ( ' . round( $rating * 5, 1 ) . ' / ' . $votes . ' )';
					$entry_array[ 'stars' ] = $str;
				}
				
				// Comments
				if ( $blog_config[ 'blog_enable_comments' ] == true ) {
					// Add comment buttons
					if ( $blog_config[ 'blog_comments_popup' ] == 1 ) {
						$entry_array[ 'comment' ][ 'url' ] = 'javascript:openpopup(\'comments.php?y='.$y.'&amp;m='.$m.'&amp;entry='.$entry.'\','.$theme_vars[ 'popup_window' ][ 'width' ].','.$theme_vars[ 'popup_window' ][ 'height' ].',true)';
					} else {
						$entry_array[ 'comment' ][ 'url' ] = 'comments.php?y='.$y.'&amp;m='.$m.'&amp;entry='.$entry;
					}
					
					if ( $comment_count == 0) {
						// [ add comment ]
						$entry_array[ 'comment' ][ 'name' ] = $lang_string[ 'sb_add_comment_btn' ];
					} else if ( $comment_count == 1) {
						// [ 1 comment ] (In Russian the number should come last.)
						if ( $lang_string[ 'sb_comment_btn_number_first' ] == true ) {
							$entry_array[ 'comment' ][ 'name' ] = $comment_count . ' ' . $lang_string[ 'sb_comment_btn' ];
						} else {
							$entry_array[ 'comment' ][ 'name' ] = $lang_string[ 'sb_comment_btn' ] . ' ' . $comment_count;
						}
					} else {
						// [ n comments ] (In Russian the number should come last.)
						if ( $lang_string[ 'sb_comments_plural_btn_number_first' ] == true ) {
							$entry_array[ 'comment' ][ 'name' ] = $comment_count . ' ' . $lang_string[ 'sb_comments_plural_btn' ];
						} else {
							$entry_array[ 'comment' ][ 'name' ] = $lang_string[ 'sb_comments_plural_btn' ] . ' ' . $comment_count;
						}
					}
					
					// Add view counter
					if ( $view_counter > 0 ) {
						if ( $view_counter == 1) {
							$entry_array[ 'comment' ][ 'count' ] = $lang_string[ 'sb_view_counter_pre' ] . $view_counter . $lang_string[ 'sb_view_counter_post' ];
						} else {
							$entry_array[ 'comment' ][ 'count' ] = $lang_string[ 'sb_view_counter_plural_pre' ] . $view_counter . $lang_string[ 'sb_view_counter_plural_post' ];
						}
					}
				}

				// Trackback
				if ( $blog_config[ 'blog_trackback_enabled' ] == true ) {
					if ( $blog_config[ 'blog_comments_popup' ] == 1 ) {
						$entry_array[ 'trackback' ][ 'url' ] = 'javascript:openpopup(\'trackback.php?y='.$y.'&amp;m='.$m.'&amp;entry='.$entry.'&amp;__mode=html\','.$theme_vars[ 'popup_window' ][ 'width' ].','.$theme_vars[ 'popup_window' ][ 'height' ].',true)';
					} else {
						$entry_array[ 'trackback' ][ 'url' ] = 'trackback.php?y='.$y.'&amp;m='.$m.'&amp;entry='.$entry.'&amp;__mode=html';
					}

					$entry_array[ 'trackback' ][ 'ping_url' ] = $base_permalink_url . 'trackback.php?y='.$y.'&amp;m='.$m.'&amp;entry='.$entry;

					// [ n trackbacks ] (In Russian the number should come last.)
					if ( $lang_string[ 'sb_comment_btn_number_first' ] == true ) {
						$entry_array[ 'trackback' ][ 'name' ] = $trackback_count . ' ' . $lang_string[ 'sb_trackback' ];
					} else {
						$entry_array[ 'trackback' ][ 'name' ] = $lang_string[ 'sb_trackback' ] . ' ' . $trackback_count;
					}
				}

   				// TODO: link opbouwen net als comments!
   				
   				$entry_array[ 'count' ] = $i;
   				$entry_array[ 'maxcount' ] = count( $contents ) - 1;
   				$entry_array[ 'logged_in' ] = $logged_in;
				$entry_array[ 'id' ] = $entry;
   				
   				$blog_content = $blog_content . theme_blogentry( $entry_array );
			}
		}
		
		$blog_content = $blog_content . '<br />';
		
		if ( $previous_entry != NULL ) {
			list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $previous_entry );
			$d = substr( $entry_filename, 9, 2 );
			$blog_content = $blog_content . ' <span style="float: left;"><a href="index.php?m=' . $month_dir . '&amp;y=' . $year_dir . '&amp;d=' . $d . '&amp;entry=' . sb_strip_extension( $entry_filename );
			if ( $category != NULL ) {
				$blog_content = $blog_content . '&amp;category=' . $category;
			}
			$blog_content = $blog_content . '">' . $lang_string[ 'nav_back' ] . '</a></span> ';
		}
		
		if ( $next_entry != NULL ) {
			list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $next_entry );
			$d = substr( $entry_filename, 9, 2 );
			$blog_content = $blog_content . ' <span style="float: right;"><a href="index.php?m=' . $month_dir . '&amp;y=' . $year_dir . '&amp;d=' . $d . '&amp;entry=' . sb_strip_extension( $entry_filename );
			if ( $category != NULL ) {
				$blog_content = $blog_content . '&amp;category=' . $category;
			}
			$blog_content = $blog_content . '">' . $lang_string[ 'nav_next' ] . '</a></span><br /> ';
		}
		
		return $blog_content;
	}
	
	function get_latest_entry () {
		// Figure out the date of the last entry. Set default year and month global values.
		// This is done so we're not displaying an empty page. If it's April and the last
		// entry was March, then we want to show March's entries (not April...)
		//
		// Returns nothing but sets $GLOBALS[ 'month' ] and $GLOBALS[ 'year' ]
		//
		$entry_array=blog_entry_listing();
		if ( count( $entry_array>0 ) ) {
			$GLOBALS[ 'year' ] = substr($entry_array[0], 5, 2);
			$GLOBALS[ 'month' ] = substr($entry_array[0], 7, 2);
			$GLOBALS[ 'day' ] = substr($entry_array[0], 9, 2);
		}
	}
	
	
	function blog_entry_listing ( ) {
		global $blog_config;
		
		// Return listing of all the blog entries in order
		// of newest to oldest.
		//
		// An improvement would be to Cache this list in a
		// file and only recalculate when you add or delete
		// an entry.
		$filename='config/~blog_entry_listing.tmp';
		$entry_array=sb_read_file( $filename );
		if ( $entry_array!=NULL )
		{
			$entry_array=unserialize( $entry_array );
		}
		else
		{
			$basedir = 'content/';
			
			// YEAR directories
			$entry_array = array();
			$dir = $basedir;
			if ( is_dir( $dir ) ) {
				if ( $year_dir_handle = @opendir( $dir ) ) {
					while ( ( $year_dir = readdir( $year_dir_handle ) ) !== false ) {
						if ( is_dir( $dir . $year_dir . '/' ) ) {
							if ( $year_dir != '.' && $year_dir != '..' && $year_dir != 'static' ) {
							
								// MONTH directories
								
								if ( $month_dir_handle = @opendir( $dir . $year_dir . '/' ) ) {
									while ( ( $month_dir = readdir( $month_dir_handle ) ) !== false ) {
										if ( is_dir( $dir . $year_dir . '/' . $month_dir . '/' ) ) {
											if ( $month_dir != '.' && $month_dir != '..' ) {
											
												// ENTRIES
								
												if ( $entry_dir_handle = @opendir( $dir . $year_dir . '/' . $month_dir . '/' ) ) {
													while ( ( $entry_filename = readdir( $entry_dir_handle ) ) !== false ) {
														if ( is_file( $dir . $year_dir . '/' . $month_dir . '/' . $entry_filename ) ) {
															
															$ext = strtolower( strrchr( $entry_filename, '.' ) );
															if ( $ext == '.txt' || $ext == '.gz' ) {
																
																// Store Blog Entry Information
																array_push( $entry_array, implode( '|', array( $entry_filename, $year_dir, $month_dir ) ) );
															}
															
														}
													}
												}
												
												// END of ENTRIES
												
											}
										}
									}
								}
								
								// END of MONTH directories
							}
						}
					}
				}
			}
			// Flip entry order
			if ( $blog_config[ 'blog_entry_order' ] == 'old_to_new' ) {
				sort( $entry_array );
			}
			else {
				rsort( $entry_array );
			}
			
			// Do not create cache if empty
			if ( count( $entry_array )>0 ) {
				sb_write_file( $filename, serialize( $entry_array ) );
			}
		}
		return( $entry_array );
	}
	
	// -----------------
	// Utility Functions
	// -----------------
	
	function entry_exists ( $y, $m, $entry ) {
		$entry_id = 'content/'.$y.'/'.$m.'/'.$entry;
		
		$exists = false;
		if ( file_exists( $entry_id . '.txt' ) ) {
			$exists = true;
		} elseif ( file_exists( $entry_id . '.txt.gz' ) ) {
			$exists = true;
		}
		
		return $exists;
	}
	
	// -----------------
	// Preview Functions
	// -----------------
	
	function preview_entry ( $blog_subject, $blog_text, $tb_ping ) {
		// Function to preview an entry before saving it to disk
		//
		// Just going through the motions...
		global $blog_content, $user_colors, $logged_in;
		
		$array = array( clean_post_text( $blog_subject ), time(), clean_post_text( $blog_text ), clean_post_text( $tb_ping ) );
		$str = implode('|', $array);
		
		list( $blog_subject, $blog_date, $blog_text, $tb_ping ) = explode( '|', $str );
		
		$entry_array = array();
		$entry_array[ 'subject' ] = blog_to_html( $blog_subject, false, false );
		$entry_array[ 'date' ] = blog_to_html( format_date( $blog_date ), false, false );
		$entry_array[ 'entry' ] = blog_to_html( $blog_text, false, false ) . '<br clear="all" />';
		if ( $tb_ping !== '' ) {
			$entry_array[ 'tb_ping' ] = blog_to_html( $tb_ping, false, false );
		}
		
		$blog_content = theme_blogentry( $entry_array );
		
		return ( $blog_content );
	}
	
	function preview_static_entry ( $blog_subject, $blog_text ) {
		// Function to preview an entry before saving it to disk
		//
		// Just going through the motions...
		global $blog_content, $user_colors, $logged_in;
		
		$array = array( clean_post_text( $blog_subject ), time(), clean_post_text( $blog_text ) );
		$str = implode('|', $array);
		
		list( $blog_subject, $blog_date, $blog_text ) = explode( '|', $str );
		
		$entry_array = array();
		$entry_array[ 'subject' ] = blog_to_html( $blog_subject, false, false );
		$entry_array[ 'date' ] = blog_to_html( format_date( $blog_date ), false, false );
		$entry_array[ 'entry' ] = blog_to_html( $blog_text, false, false ) . '<br clear="all" />';
		
		$blog_content = theme_blogentry( $entry_array );
		
		return ( $blog_content );
	}
	
	function read_entry_from_file ( $entry_id ) {
		// Read an entry from disk and create the HTML.
		//
		// This function is used by:
		//    1). delete.php
		//    2). preview_cgi.php
		//    3). sb_comments.php
		//
		if ( file_exists( $entry_id . '.txt' ) ) {
			$filename = $entry_id . '.txt';
		} elseif ( file_exists( $entry_id . '.txt.gz' ) ) {
			$filename = $entry_id . '.txt.gz';
		}
		
		$blog_entry_data = blog_entry_to_array( $filename );
		
		$entry_array = array();
		$entry_array[ 'subject' ] = blog_to_html( $blog_entry_data[ 'SUBJECT' ], false, false );
		$entry_array[ 'date' ] = blog_to_html( format_date( $blog_entry_data[ 'DATE' ] ), false, false );
		$entry_array[ 'entry' ] = blog_to_html( $blog_entry_data[ 'CONTENT' ], false, false ) . '<br clear="all" />';
		$entry_array[ 'id' ] = substr( $entry_id, strlen( $entry_id )-18, 18 );

		// Categories
		if ( array_key_exists( 'CATEGORIES', $blog_entry_data ) ) {
			$temp_cat_array = explode( ',', $blog_entry_data[ 'CATEGORIES' ] );
			$temp_cat_names = Array();
			for ( $j = 0; $j < count( $temp_cat_array ); $j++ ) {
				array_push( $temp_cat_names, get_category_by_id ( $temp_cat_array[$j] ) );
			}
			$entry_array[ 'categories' ] = $temp_cat_names;
		}
		
		$blog_content = theme_blogentry( $entry_array );
		
		return ( $blog_content );
	}
?>
