<?php 
	require('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );

	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'stats' );
	global $lang_string, $sb_info, $blog_config;

	function sort_views ( $a, $b )
	{
		if ( $a[ 'views' ] < $b[ 'views' ] ) {
			return( 1 );
		}
		else {
			return( -1 );
		}
	}
	
	function sort_comments ( $a, $b )
	{
		if ( $a[ 'comments' ] < $b[ 'comments' ] ) {
			return( 1 );
		}
		else {
			return( -1 );
		}
	}

	function sort_trackbacks ( $a, $b )
	{
		if ( $a[ 'trackbacks' ] < $b[ 'trackbacks' ] ) {
			return( 1 );
		}
		else {
			return( -1 );
		}
	}
	
	function sort_votes ( $a, $b )
	{
		if ( $a[ 'votes' ] < $b[ 'votes' ] ) {
			return( 1 );
		}
		else {
			return( -1 );
		}
	}

	function sort_rates ( $a, $b )
	{
		if ( $a[ 'rates' ] < $b[ 'rates' ] ) {
			return( 1 );
		}
		else {
			return( -1 );
		}
	}

	
	function generate_stats ( ) {
		global $lang_string, $blog_config;

		// To avoid server overload
		sleep(1);
		
		$output_str = '';
		$total_number_entries = 0;
		$total_number_comments = 0;
		$total_number_statics = 0;
		$total_number_votes = 0;
		$total_number_trackbacks = 0;
		$total_bytes_entries = 0;
		$total_bytes_comments = 0;
		$total_bytes_statics = 0;
		$total_bytes_trackbacks = 0;
		$total_bytes_votes = 0;
		$total_words_entries = 0;
		$total_words_comments = 0;
		$total_words_statics = 0;
		
		$entry_file_array = blog_entry_listing();

		// Loop through entry files
		for ( $i = 0; $i < count( $entry_file_array ); $i++ ) {
			list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $entry_file_array[ $i ] );
			$total_number_entries++;
			$contents=blog_entry_to_array( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );
			$entries[ $i ][ 'subject' ]=$contents[ 'SUBJECT' ];
			$total_words_entries+=str_word_count( sb_read_file( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename ) );
			$total_bytes_entries+=filesize( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );
			$entries[ $i ][ 'filename' ]=$entry_filename;

			//Count votes
			$rating_array = read_rating( $year_dir, $month_dir, sb_strip_extension( $entry_filename, array( '.txt', '.gz' ) ) );
			$total_bytes_votes+=@filesize( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename, array( '.txt', '.gz' ) ) . '/rating.txt' );
			$total_number_votes+=$rating_array[ 'votes' ];
			$entries[ $i ][ 'votes' ] = $rating_array[ 'votes' ];
			if ($rating_array[ 'votes' ]>0) {
				$entries[ $i ][ 'rates' ] = $rating_array[ 'points' ] / $rating_array[ 'votes' ];
			}
			else {
				$entries[ $i ][ 'rates' ] = 0;
			}
			unset( $rating_array );
			
			// Count comments
			if ( $blog_config[ 'blog_enable_comments' ] == true ) {
				$comment_file_array = sb_folder_listing( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/comments/', array( '.txt', '.gz' ) );
 				for ( $k = 0; $k < count( $comment_file_array ); $k++ ) {
					$total_number_comments++;
					$total_words_comments+=str_word_count( sb_read_file( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/comments/' . $comment_file_array[ $k ] ) );
					$total_bytes_comments+=filesize( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/comments/' . $comment_file_array[ $k ] );
				}
				$entries[ $i ][ 'comments' ]=$k;
				$entries[ $i ][ 'views' ]=sb_read_file( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/view_counter.txt');
			}
			else {
				$entries[ $i ][ 'comments' ]=0;
				$entries[ $i ][ 'views' ]=0;
			}
			unset( $comment_file_array );
			
			// Count trackbacks
			if ( $blog_config[ 'blog_trackback_enabled' ] == true ) {
				$trackback_file_array = sb_folder_listing( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/trackbacks/', array( '.txt', '.gz' ) );
 				for ( $k = 0; $k < count( $trackback_file_array ); $k++ ) {
					$total_number_trackbacks++;
					$total_bytes_trackbacks+=filesize( 'content/' . $year_dir . '/' . $month_dir . '/' . sb_strip_extension( $entry_filename ) . '/trackbacks/' . $trackback_file_array[ $k ] );
				}
				$entries[ $i ][ 'trackbacks' ]=$k;
			}
			else {
				$entries[ $i ][ 'trackbacks' ]=0;
			}
			unset( $trackback_file_array );
		}
		unset( $entry_file_array );
		
		// Count static pages
		$static_file_array = sb_folder_listing( 'content/static/', array( '.txt', '.gz' ) );
		for ( $i = 0; $i < count( $static_file_array ); $i++ ) {
			$total_number_statics++;
			$total_words_statics+=str_word_count( sb_read_file( 'content/static/' . $static_file_array[ $i ] ) );
			$total_bytes_statics+=filesize( 'content/static/' . $static_file_array[ $i ] );
		}
		unset( $static_file_array );

		echo $lang_string['title'];
		echo '<br>';
		echo $lang_string['general'];
		echo sprintf( $lang_string['entry_info'], number_format( $total_number_entries, 0 ), number_format( $total_words_entries, 0 ), number_format( $total_bytes_entries, 0 ) ) . '.<br>';
		echo sprintf( $lang_string['comment_info'], number_format( $total_number_comments, 0 ), number_format( $total_words_comments, 0 ), number_format( $total_bytes_comments, 0 ) ) . '.<br>';
		echo sprintf( $lang_string['trackback_info'], number_format( $total_number_trackbacks, 0 ), number_format( $total_bytes_trackbacks, 0 ) ) . '.<br>';
		echo sprintf( $lang_string['static_info'], number_format( $total_number_statics, 0 ), number_format( $total_words_statics, 0 ), number_format( $total_bytes_statics, 0 ) ) . '.<br>';
		echo sprintf( $lang_string['vote_info'], number_format( $total_number_votes, 0 ), number_format( $total_bytes_votes, 0 ) ) . '.<br>';
		echo '<br>';
		
		if ( $blog_config[ 'blog_enable_voting' ] == true ) {
			if ( is_array( $entries ) ) {
				echo $lang_string['most_rated_entries'];
				usort( $entries, 'sort_rates' );
				for ( $i=0; $i<min(10, $total_number_entries); $i++) {
					echo '<a href="index.php?entry=' . sb_strip_extension( $entries[ $i ][ 'filename' ] ) . '">' . $entries[ $i ][ 'subject' ] . '</a> (' . number_format( $entries[ $i ][ 'rates' ], 2 ) . ').<br>';
				}
				echo '<br>';
			
				echo $lang_string['most_voted_entries'];
				usort( $entries, 'sort_votes' );
				for ( $i=0; $i<min(10, $total_number_comments); $i++) {
					echo '<a href="index.php?entry=' . sb_strip_extension( $entries[ $i ][ 'filename' ] ) . '">' . $entries[ $i ][ 'subject' ] . '</a> (' . number_format( $entries[ $i ][ 'votes' ], 0 ) . ').<br>';
				}
				echo '<br>';
			}
		}
		
		if ( $blog_config[ 'blog_enable_comments' ] == true ) {
			if ( is_array( $entries ) ) {
				echo $lang_string['most_viewed_entries'];
				usort( $entries, 'sort_views' );
				for ( $i=0; $i<min(10, $total_number_entries); $i++) {
					echo '<a href="index.php?entry=' . sb_strip_extension( $entries[ $i ][ 'filename' ] ) . '">' . $entries[ $i ][ 'subject' ] . '</a> (' . number_format( $entries[ $i ][ 'views' ], 0 ) . ').<br>';
				}
				echo '<br>';
			
				echo $lang_string['most_commented_entries'];
				usort( $entries, 'sort_comments' );
				for ( $i=0; $i<min(10, $total_number_comments); $i++) {
					echo '<a href="index.php?entry=' . sb_strip_extension( $entries[ $i ][ 'filename' ] ) . '">' . $entries[ $i ][ 'subject' ] . '</a> (' . number_format( $entries[ $i ][ 'comments' ], 0 ) . ').<br>';
				}
				echo '<br>';
			}
		}

		if ( $blog_config[ 'blog_trackback_enabled' ] ) {
			if ( is_array( $entries ) ) {
				echo $lang_string['most_trackbacked_entries'];
				usort( $entries, 'sort_trackbacks' );
				for ( $i=0; $i<min(10, $total_number_trackbacks); $i++) {
					echo '<a href="index.php?entry=' . sb_strip_extension( $entries[ $i ][ 'filename' ] ) . '">' . $entries[ $i ][ 'subject' ] . '</a> (' . number_format( $entries[ $i ][ 'trackbacks' ], 0 ) . ').<br>';
				}
				echo '<br>';
			}
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>'>
	 
	<!-- Meta Data -->
	<link rel=stylesheet type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css">
	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?></title>
</head>
<?php 
	function page_content() {
		echo generate_stats( );
	}
	theme_pagelayout();
?>
</html>
