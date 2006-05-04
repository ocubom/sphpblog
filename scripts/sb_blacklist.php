<?php
	/* @module file="sb_blacklist.php" version="Rev0.1.0" date="20060306" */

	/*---------------------------------------------------------------------*/
	
	class CBlacklist {
		//-----------------------------------------------------------------
		var $aEntries;
		//-----------------------------------------------------------------
		function CBlacklist( ) {
			$this->aEntries = array( );
		}
		//-----------------------------------------------------------------
		
		function load( $sBlacklistPathFileName  ) {
			$bReturnCode = false;
			
			$sContent = sb_read_file( $sBlacklistPathFileName );
			// $sContent = file_get_contents( $sBlacklistPathFileName );
			
			if ( $sContent !== false ) {
				$this->aEntries = explode( '|', trim( $sContent ) );
				$bReturnCode = true;
			}
			
			return $bReturnCode;
		}
		
		function isBanned( $sIPAddress ) {
			return in_array( $sIPAddress, $this->aEntries );
		}
	}
	
	/*---------------------------------------------------------------------*/
?>
