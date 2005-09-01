<?php

// The Simple PHP Blog is released under the GNU Public License.

//

// You are free to use and modify the Simple PHP Blog. All changes 

// must be uploaded to SourceForge.net under Simple PHP Blog or

// emailed to apalmo <at> bigevilbrain <dot> com

// -----------------

// Entries Functions

// -----------------

function entries ( ) {

	// Show all entries (works like a search on nothing ought to work)

	// Read entries by month, year and/or day. Generate HTML output.

	//

	// Used for the main Index page.

	global $lang_string, $blog_config, $user_colors;

	// To avoid server overload

	sleep(1);

	$output_str = '';

	$entry_file_array = blog_entry_listing();

	// Flip entry order

	if ( $blog_config[ 'blog_entry_order' ] == 'old_to_new' ) {

		$entry_file_array = array_reverse( $entry_file_array );

	}

	

	// Loop through entry files

	$prev_month_dir = '';

	$prev_year_dir = '';

	for ( $i = 0; $i < count( $entry_file_array ); $i++ ) {

		list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $entry_file_array[ $i ] );

		$blog_entry_data = blog_entry_to_array( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );

		if ($prev_month_dir != '' && $prev_year_dir != '' && $prev_month_dir != $month_dir || $prev_year_dir != $year_dir) {

			$output_str .= '<br />';

			$output_str .= '<h2>' . ucwords( strftime( '%B %Y', $blog_entry_data["DATE"]) ) . '</h2>';

			$output_str .= '<hr noshade size="1" color=#' . $user_colors['inner_border_color'] . '>';

		}

		$output_str = $output_str . '<a href="index.php?entry=' . sb_strip_extension( $entry_filename ) . '" title="' . format_date( $blog_entry_data["DATE"] ) . '">' . $blog_entry_data["SUBJECT"] . '</a><br />';

		$prev_month_dir = $month_dir;

		$prev_year_dir = $year_dir;

	}

	return ( $output_str );

}

?>
