<?php
	// Emoticon Code by NoWhereMan and Hydra	
	
	// This function checks for alternate smiley tags
	// EX: the image for :) could be the same of ^^ ^__^ :happy: or :smile:
	function emoticons_check_tags($smile_path) {
		// Loop through the emoticon array. Look for matching smile_path and emote['path']. Return associated tags.
		$emote_arr = emoticons_load_tags();
		
		if ( $emote_arr !== false ) {
			for ( $n = 0; $n < count( $emote_arr ); $n++ ) {
				if ($emote_arr[$n]['PATH']==$smile_path) {
					return( $emote_arr[$n]['TAGS'] );
				}
			}
		}
		
		return( false );
	}

	function emoticons_load_tags () {
		$str = sb_read_file( 'config/emoticons.txt' );
		$exploded_array = explode( '|', $str );
		
		$emote_arr = array();
		if ( count( $exploded_array ) > 0 ) {
			for ( $i = 0; $i < count( $exploded_array ); $i++ ) {
				$emo = explode_with_keys( $exploded_array[$i], '=' );
				$tags = $emo['TAGS'];
				$tags = str_replace( '&#124;', '|', $tags );
				$tags = str_replace( '&#61;', '=', $tags );
				$emo['TAGS'] = $tags;
				array_push( $emote_arr, $emo);
			}
		} else {
			return( false );
		}
		
		return( $emote_arr );
	}
	
	function emoticons_load () {
		global $blog_theme;
		
		$emotepath_arr = Array();
		array_push( $emotepath_arr, 'themes/' . $blog_theme . '/images/emoticons/' );
		array_push( $emotepath_arr, 'interface/emoticons/' );
		array_push( $emotepath_arr, 'images/emoticons/' );
		
		$emoteimage_arr = Array();
		for ( $i = 0; $i < count( $emotepath_arr ); $i++) {
			$dir = $emotepath_arr[$i];
			$temp_arr = sb_folder_listing( $dir, array(".gif", ".jpg", ".jpeg", ".png") );
			
			for ( $j = 0; $j < count( $temp_arr ); $j++ ) {
				array_push( $emoteimage_arr, $dir . $temp_arr[$j] );
			}
		}
		// echo('<pre>');
		// print_r($emoteimage_arr);
		// echo('</pre>');
		
		return( $emoteimage_arr );
	}
	
	function emoticons_show () {
		$emote_arr = emoticons_load_tags();
		
		$str_out =  "<div>\n";
		for ( $n = 0; $n < count( $emote_arr ); $n++ ) {
			$path = $emote_arr[ $n ][ 'PATH' ];
			$tags_str = $emote_arr[ $n ][ 'TAGS' ];
			$tags_arr = explode( ' ', $tags_str );
			$str_out .=  '<span style="Cursor: hand;" onclick="Javascript:ins_emoticon(document.getElementById(\'text\'), \'' . $tags_arr[0] . '\');">' ."\n";
			$str_out .=  '<img border="0" src="' . $path . '" alt="'.$tags_str.'"title="'.$tags_str.'"  />' ."\n";
			$str_out .=  '</span>' ."\n";
		}
		$str_out .=  "</div>\n";
				
		echo $str_out;
		return $str_out;
	}
?>
