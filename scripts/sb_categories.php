<?php 

	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes 
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com
	
	// ------------------
	// Category Functions
	// ------------------
	
	function get_category_array () {
		// Load category information from file
		//
		$contents = sb_read_file( 'config/categories.txt' );
		
		$catArray = Array();
		if ( $contents ) {
			$temp_array = explode( '|', $contents );
			for ( $i=0; $i<count($temp_array); $i = $i + 3 ) {
				$id_number = $temp_array[$i];
				$name_str = $temp_array[$i+1];
				$space_count = $temp_array[$i+2];
				array_push( $catArray, Array( $id_number, $name_str, $space_count ) );
			}
		}
		
		return $catArray;
	}
	
	function write_categories ( $catArray ) {
		// Save the category array
		//
		// Array( $id_number, $name_str, $space_count );
		$str = '';
		for ( $i = 0; $i < count( $catArray ); $i++ ) {
			$str = $str . implode( '|', $catArray[$i] );
			if ( $i < count( $catArray ) - 1 ) {
				$str = $str . '|';
			}
		}
		
		$ok = sb_write_file( 'config/categories.txt', $str );
		
		if ( $ok ) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_category_by_id ( $id ) {
		$catArray = get_category_array();
		for ( $i = 0; $i < count( $catArray ); $i++ ) {
			if ( $catArray[ $i ][ 0 ] == $id ) {
				return $catArray[ $i ][ 1 ];
			}
		}
	}
?>
