<?php
	/**
	* Feature story class.
	*
	* @author		Alexander Palmo <alex dot palmo at fahlgren dot com>
	* @access		public
	*/
	class user extends container {
		var $path, $html_template, $tags;
		
		/**
		* Contructor
		*
		* @param		string $filename
		* @return		null
		*/
		function user($filename='',$is_cached=false) {
			$this->path = USER_DIR;
			$this->html_template = TEMPLATE_DIR.'data/user.tpl';
		
			$this->filename = $filename;
			$this->is_cached_data = $is_cached;
			
			$this->setDefaults();
		}
		
		function setDefaults() {
			// Allowed Tags
			$this->tags = array();
			array_push($this->tags, 'ID');
			array_push($this->tags, 'USER_NAME');
			array_push($this->tags, 'DISPLAY_NAME');
			array_push($this->tags, 'PASSWORD');
			array_push($this->tags, 'EMAIL');
			array_push($this->tags, 'AVATAR');
			array_push($this->tags, 'ACTIVE');
			array_push($this->tags, 'MODERATE_COMMENTS');
			array_push($this->tags, 'DELETE_BLOG_ENTRIES');
			array_push($this->tags, 'EDIT_ANY_ENTRY');
			
			// Cache Excluded Tags
			// $this->do_not_cache_tags = array();
			// array_push($this->do_not_cache_tags, 'USER_NAME');
			// array_push($this->do_not_cache_tags, 'DISPLAY_NAME');
			array_push($this->do_not_cache_tags, 'PASSWORD');
			array_push($this->do_not_cache_tags, 'EMAIL');
			array_push($this->do_not_cache_tags, 'AVATAR');
			array_push($this->do_not_cache_tags, 'ACTIVE');
			array_push($this->do_not_cache_tags, 'MODERATE_COMMENTS');
			array_push($this->do_not_cache_tags, 'DELETE_BLOG_ENTRIES');
			array_push($this->do_not_cache_tags, 'EDIT_ANY_ENTRY');
			
			// Default Values
			foreach ($this->tags as $key) {
				$this->setTag($key, '');
			}

			$this->setTag('ACTIVE', 'N');
			$this->setTag('MODERATE_COMMENTS', 'N');
			$this->setTag('DELETE_BLOG_ENTRIES', 'N');
			$this->setTag('EDIT_ANY_ENTRY', 'N');
		}
		
		function write_file() {
			delete_users_cache();
			$result = parent::write_file();
			return $result;
		}
	}
	
	/* -------------------- SORT -------------------- */
	
	/*
	function sort_users_records_by_display_name($recordA, $recordB) {
		$valA = $recordA->getTag('USER_NAME');
		$valB = $recordB->getTag('USER_NAME');
		if ($valA == $valB) {
			return 0;
		}
		return ($valA < $valB) ? -1 : 1;
	}
	*/
	
	/* -------------------- CACHE -------------------- */
	
	function build_users_cache() {
		$filearr = fileio::file_listing(USER_DIR, array('.txt'));
		
		$arr = array();
		for ($i=0; $i<count($filearr); $i++) {
			$filename = $filearr[$i];
			
			$record = new user($filename);
			$record->read_file();
			
			array_push($arr, $record->getCacheData());
		}
		
		if (count($arr)) {
			$str = arrays::implode_list($arr);
			$result = fileio::write_file(CACHE_DIR.'users.txt', $str);
			return ($result!==false);
		} else {
			return false;
		}
	}
	
	function get_users_cache() {
		if (!file_exists(CACHE_DIR.'users.txt')) {
			build_users_cache();
		}
		$str = fileio::read_file(CACHE_DIR.'users.txt', true);
		
		$record_arr = array();
		if ($str != null) {
			$arr = arrays::explode_list($str);
			$record_arr = array();
			for ($i=0; $i<count($arr); $i++) {
				$data = $arr[$i];
				
				$record = new user($data['ID'].'.txt', true);
				$record->data = $data;
				
				array_push($record_arr, $record);
			}
			
			sort_by_arbitrary_tag($record_arr, 'DISPLAY_NAME', true);
		}
		
		return($record_arr);
	}
	
	function delete_users_cache() {
		fileio::delete_file(CACHE_DIR.'users.txt');
	}
	
	/* -------------------- SEARCH -------------------- */
	
	function find_user_by_user_name($admin_mode=false, $user_name='') {
		$record_arr = get_users_cache();
		// rsort($record_arr);
		
		for ($i=0; $i<count($record_arr); $i++) {
			$record = $record_arr[$i];
			
			$name = $record->getTag('USER_NAME');
			if ($user_name == $name || $user_name == $url) {
				if ($admin_mode) {
					return $record;
				} else if ($record->getTag('ACTIVE')=='Y') {
					return $record;
				} else {
					return;
				}
			}
			unset($record);
		}	
	}
	
	function users_to_drop_down($admin_mode=false, $sel=null) {
		$record_arr = get_users_cache();
		
		$arr = array();
		for ($i=0; $i<count($record_arr); $i++) {
			$record = $record_arr[$i];
			
			if (!$admin_mode && $record->getTag('ACTIVE')=='Y') {
				continue;
			}
			
			$key = $record->getTag('ID');
			$val = $record->getTag('DISPLAY NAME');
			
			$arr[$key] = $val;
			unset($record);
		}
		
		return html::array_to_dropdown($arr, $sel);
	}
	
?>
