<?php 
	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes 
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com

	// --------------------
	// Form Validation Functions
	// --------------------
	function validatePostData( ) {
	
	}

	// ------------------
	// HTML Markup Functions
	// ------------------
	function HTML_dropdown( $label=false, $id, $itemArray, $add_returns=true, $onchange=null, $width=0, $size=0, $multiple=false, $disabled=false ) {
		// This function creates a standard HTML select form.
		// Can be used for drop-downs, or selection boxes.
		
		$str = '';
		// <label for="$id">$label</label><br />
		if ( isset( $label ) && $label !== false ) {
			$str .= '<label for="'.$id.'">'.$label.'</label>';
			if ( $add_returns ) {
				$str .= '<br />';
			}
			$str .= "\n";
		}
		
		// <select id="$id" name="$id" size="$size" multiple disabled style="width: 100px;">
		$str .= '<select id="'.$id.'" name="'.$id.'"';
		if ( $size > 0 ) {
			$str .= ' size="'.$size.'"';
		}
		if ( $multiple == true ) {
			$str .= ' multiple';
		}
		if ( $disabled == true ) {
			$str .= ' disabled';
		}
		if ( $width > 0) {
			$str .= ' style="width: '.$width.'px;"';
		}
		if ( isset( $onchange ) ) {
			$str .= ' onchange="'.$onchange.'"';
		}
		$str .= '>' . "\n";
		
		// <option label="$label" value="$value" disabled selected>$string</option>
		// <option label="$label" value="$value" disabled selected>$label</option>
		for ( $i = 0; $i < count( $itemArray ); $i++ ) {
			$item = $itemArray[$i];
			
			$str .= "\t" . '<option label="'.$item['label'].'" value="'.$item['value'].'"';
			if ( array_key_exists( 'disabled', $item ) && $item['disabled'] == true ) {
				$str .= ' disabled';
			}
			if ( array_key_exists( 'selected', $item ) && $item['selected'] == true ) {
				$str .= ' selected';
			}
			if ( array_key_exists( 'string', $item ) ) {
				$str .= '>'.$item['string'].'</option>' . "\n";
			} else {
				$str .= '>'.$item['label'].'</option>' . "\n";
			}
		}
		$str .= '</select>';
		if ( $add_returns ) {
			$str .= '<p />';
		}
		$str .= "\n";
		
		return $str;
	}
	
	function HTML_input( $label=false, $id, $value=null, $add_returns=true, $type='text', $size=null, $maxlength=null, $onchange=null, $width=0, $disabled=false, $autocomplete=false ) {
		// This function creates a standard HTML input form.
		
		$str = '';
		if ( isset( $label ) && $label !== false ) {
			$str .= '<label for="'.$id.'">'.$label.'</label>';
			if ( $add_returns ) {
				$str .= '<br />';
			}
			$str .= "\n";
		}
		
		// <input name="name" id="id" type="text" value="value" size="2" maxlength="2" onchange="" disabled>
		$str .= '<input name="'.$id.'" id="'.$id.'" type="'.$type.'"';
		if ( isset( $value ) ) {
			$str .= ' value="'.$value.'"';
		}
		if ( $size > 0 ) {
			$str .= ' size="'.$size.'"';
		}
		if ( $maxlength > 0 ) {
			$str .= ' maxlength="'.$maxlength.'"';
		}
		if ( isset( $onchange ) ) {
			$str .= ' onchange="'.$onchange.'"';
		}
		if ( $width > 0) {
			$str .= ' style="width: '.$width.'px;"';
		}
		if ( !$autocomplete ) {
			$str .= ' autocomplete="OFF"';
		}
		if ( $disabled ) {
			$str .= ' disabled';
		}
		$str .= '>' . "\n";
		
		if ( $add_returns ) {
			$str .= '<p />';
		}
		$str .= "\n";
		
		return $str;
	}
?>
