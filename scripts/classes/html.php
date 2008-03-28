<?php
	/**
	* HTML utility functions.
	*
	* @author		Alexander Palmo <apalmo at bigevilbrain dot com>
	* @access		public static
	*
	* array_to_dropdown($arr, $sel)
	* returns_to_breaks($str)
	*/
	
	class html {
	
		
		/**
		* Create HTML dropdown from an associative array.
		*
		* Example Usage:
		* $str = html::array_to_dropdown(array("KEY1"=>"VALUE1"));
		*
		* @param		array $arr
		* @param		string $sel
		* @return		string
		*/
		function array_to_dropdown($arr, $sel=null) {
			$str_out = '';
			foreach ($arr as $key => $val) {
				if ($key == $sel) {
					$str_out .= '<option value="'.$key.'" selected="selected">'.$val.'</option>';
				} else {
					$str_out .= '<option value="'.$key.'">'.$val.'</option>';
				}
			}
			
			return $str_out;
		}
	
		
		/**
		* Create an HTML list from an array.
		*
		* Example Usage:
		* $str = html::array_to_list(array("VALUE1","VALUE2"));
		*
		* @param		array $arr
		* @return		string
		*/
		function array_to_list($arr) {
			$str_out = '';
			foreach ($arr as $val) {
				$str_out .= "<li>$val</li>\r";
			}
			
			return $str_out;
		}
		
		
		/**
		* Replace return characters with HTML line breaks.
		*
		* Example Usage:
		* $str = html::returns_to_breaks("Hi\rThere!");
		*
		* @param		string $str
		* @return		string
		*/
		function returns_to_breaks($str) {
			// Replace hard returns in string with '<br />' tags.
			// "\r\n" - WINDOWS
			// "\n"   - UNIX
			// "\r"   - MACINTOSH
			$str = str_replace("\r\n", '<br />', $str);
			$str = str_replace("\n", '<br />', $str);
			$str = str_replace("\r", '<br />', $str);
			return $str;
		}
		
	}
?>
