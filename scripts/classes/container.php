<?php
	/**
	* Data container class.
	*
	* @author		Alexander Palmo <alex dot palmo at fahlgren dot com>
	* @access		public
	*/
	class container {
		var $filename = '';
		var $path = CONTENT_DIR;
		var $data = array();
		var $tags = array();
		var $html_template = '';
		
		var $is_cached_data = false;
		var $do_not_cache_tags = array();
		
		/**
		* Contructor
		*
		* @param		string $filename
		* @return		null
		*/
		function container( $filename='' ) {
			$this->$filename = $filename;
		}
		
		function getTags() {
			return($this->tags);
		}
		
		/**
		* Get data in HTML format.
		*
		* @return		string
		*/
		function getHTML($template_object=null, $convert_special=false, $convert_html=true, $convert_returns=true) {
			if (isset($template_object)) {
				$template = $template_object;
			} else {
				$template = new Template($this->html_template);
			}
			
			// If the data is cached then load the real data.
			if ($this->is_cached_data) {
				$this->read_file();
			}
			
			foreach ($this->data as $key => $val) {
				$str = $val;
				if ($convert_special) {
					$str = @htmlspecialchars($str, ENT_NOQUOTES);
				}
				if ($convert_html) {
					$str = str_replace(array('<', '>'), array('&lt;', '&gt;'), $str);
					// $str = str_replace(array('Ò', 'Ó', 'Ô', 'Õ'), array('&#8220;', '&#8221;', '&#8216;', '&#8217;'), $str);
					if ($convert_returns) {
						$str = html::returns_to_breaks($str);
					}
				} else {
					if ($convert_returns) {
						$str = $this->html_return_escape($str);
					}
				}
				
				
				$template->setTag('{'.$key.'}', $str);
			}
			
			return($template->getHTML());
		}
		
		/**
		* Get data in HTML format.
		*
		* @return		string
		*/
		function getTagHTML($tag, $convert_special=false, $convert_html=true, $convert_returns=true) {
			$str = $this->getTag($tag);
			
			if ($convert_special) {
				$str = @htmlspecialchars($str, ENT_NOQUOTES);
			}
			if ($convert_html) {
				$str = str_replace(array('<', '>'), array('&lt;', '&gt;'), $str);	
				if ($convert_returns) {
					$str = html::returns_to_breaks($str);
				}
			} else {
				if ($convert_returns) {
					$str = $this->html_return_escape($str);
				}
			}
			
			return($str);
		}
		
		
		/**
		* Get data to cache. Exclude certain tags (to reduce file size.)
		*
		* @return		string
		*/
		function getCacheData() {
			$cache = $this->data;
			
			foreach ($this->do_not_cache_tags as $key) {
				unset($cache[$key]);
			}
			
			return($cache);
		}
		
		/**
		* This converts returns to <br> unless between [HTML][/HTML].
		*
		* @return		string
		*/
		function html_return_escape($str) {
			$str_out = '';
			
			$offset = strpos($str, '[HTML]'); // Look for BEGIN tag
			while ($offset !== false) {
				$temp_str = substr($str, 0, $offset); // Text BEFORE the tag
				
				// Do HTML and return conversion
				// $temp_str = str_replace(array('<', '>'), array('&lt;', '&gt;'), $temp_str);
				$temp_str = html::returns_to_breaks($temp_str);
				$str_out .= $temp_str;
				
				$str = substr($str, $offset + strlen('[HTML]')); // Store text AFTER tag
				
				$offset = strpos($str, '[/HTML]'); // Look for END tag
				if ($offset !== false) {
					$temp_str = substr($str, 0, $offset); // Just store the text the BETWEEN tags
					$str_out .= $temp_str;
					
					$str = substr($str, $offset + strlen('[/HTML]')); // Store text AFTER tag
					$offset = strpos($str, '[HTML]'); // Look for BEGIN tag
				}
			}
			// $str = str_replace(array('<', '>'), array('&lt;', '&gt;'), $str);
			$str = html::returns_to_breaks($str);
			$str = $str_out . $str;
			
			return($str);
		}
		
		/**
		* Read file.
		*
		* @return		boolean
		*/
		function read_file() {
			$str = fileio::read_file($this->path . $this->filename);
			if ($str != null) {
				$this->data = arrays::explode_key($str);
				$this->is_cached_data = false;
				return(true);
			} else {
				return(false);
			}
		}
		
		/**
		* Write file.
		*
		* @return		boolean
		*/
		function write_file() {
			$str = arrays::implode_key($this->data);
			$result = fileio::write_file($this->path . $this->filename, $str);
			
			return ($result!==false);
		}
		
		/**
		* Get property from data array
		*
		* @param		string $tag
		* @return		string
		*/
		function getTag($tag) {
			
			// If the data is cached then load the real data.
			if ($this->is_cached_data) {
				if (in_array($tag,$this->do_not_cache_tags)) {
					$this->read_file();
				}
			}
		
			if (in_array($tag, $this->tags)) {
				if (array_key_exists($tag, $this->data)) {
					return($this->data[$tag]);
				}
			}
			return('');
		}
		
		/**
		* Set data associative array property.
		*
		* @param		string $tag
		* @param		string $value
		* @return		null
		*/
		function setTag($tag, $value) {
			if (in_array($tag, $this->tags)) {
				$this->data[$tag] = $value;
				return(true);
			}
			return(false);
		}
		
	}
?>