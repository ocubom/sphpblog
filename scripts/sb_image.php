<?php 

	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes 
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com
	
	// ----------------------
	// Image Upload Functions
	// ----------------------
	
	function image_list () {
		// Get a list of images in the image folder. Return HTML.
		//
		
		if (!file_exists('images')) {
			$oldumask = umask(0);
			$ok = mkdir('images', 0777 );
			umask($oldumask);
		}
			
		$dir = 'images/';
		// $contents = sb_folder_listing( $dir, array( '.jpg', '.gif', '.png' ) );
		$contents = sb_folder_listing( $dir, array() );
		
		$str = NULL;
		if ($contents) {
			for ( $i = 0; $i < count( $contents ); $i++ ) {
				$str = $str . '<a href='.$dir.$contents[$i].' target=_blank>'.$contents[$i].'</a><br />';
			}
		}
		
		return ( $str );
	}
	
	function image_dropdown () {
		// Get a list of images in the image folder. Return HTML.
		//
		global $theme_vars;
		
		$dir = 'images/';
		// $contents = sb_folder_listing( $dir, array( '.jpg', '.gif', '.png' ) );
		$contents = sb_folder_listing( $dir, array() );
		
		$str = NULL;
		if ($contents) {
			if ( count( $contents ) > 0 ) {
				$str = '<select name="image_list" onchange="ins_image_dropdown(this.form.blog_text,this.form.image_list);">';
				$str = $str . '<option label="--" value="--">--</option>';
				for ( $i = 0; $i < count( $contents ); $i++ ) {
					$str_url = $dir.$contents[$i];
					$img_size = @getimagesize( $str_url );
					if ( $img_size !== false ) {
						$width = $img_size[0];
						$height = $img_size[1];
						$max_image_width = $theme_vars[ 'max_image_width' ];
						if ( $width > $max_image_width ) {
							$height_resized = round( $height * ( $max_image_width / $width ) );
							$width_resized = $max_image_width;
							$str = $str . '<option label="'.$contents[$i].' - '.$width.' x '.$height.'" value="[img='.$dir.$contents[$i].' popup=true]">'.$contents[$i].'</option>';
						} else {
							$str = $str . '<option label="'.$contents[$i].' - '.$width.' x '.$height.'" value="[img='.$dir.$contents[$i].' popup=false]">'.$contents[$i].'</option>';
						}
					} else {
						$str = $str . '<option label="'.$contents[$i].'" value="[img='.$dir.$contents[$i].' ]">'.$contents[$i].'</option>';
					}
				}
				$str = $str . '</select>';
			}
		}
		
		return ( $str );
	}
?>
