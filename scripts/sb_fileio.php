<?php 

	// The Simple PHP Blog is released under the GNU Public License.

	//

	// You are free to use and modify the Simple PHP Blog. All changes 

	// must be uploaded to SourceForge.net under Simple PHP Blog or

	// emailed to apalmo <at> bigevilbrain <dot> com

	// ------------------

	// File I/O Functions

	// ------------------

	function sb_read_file( $filename ) {

		// Safely read a file.

		//

		// Returns either the contents of the file or NULL on fail.

		if ( version_compare( phpversion(), '4.3.0' ) == -1 ) {

			$result = NULL;

			if ( file_exists( $filename ) ) {

				$fp = @fopen( $filename, 'r' );

				if ( $fp ) {

					flock( $fp, LOCK_SH );

					$result = fread( $fp, filesize( $filename )*100 );

					if ( ( strpos( $filename, '.gz' ) !== false ) && ( extension_loaded( 'zlib' ) ) ) {

						$result = gzinflate( substr( $result, 10 ) );

					}

					flock( $fp, LOCK_UN );

					fclose( $fp );

				}

			}

		}

		else {

			$result=@file_get_contents( $filename );

			if ( ( strpos( $filename, '.gz' ) !== false ) && ( extension_loaded( 'zlib' ) ) ) {

				$result = gzinflate( substr( $result, 10 ) );

			}

		}

		

		return( $result );

	}

	

	function sb_write_file( $filename, $str ) {

		// Safely write a file.

		//

		// Returns true or false.

		if ( ( strpos( $filename, '.gz' )!==false ) && ( extension_loaded( 'zlib' ) ) ) {

			$str=gzencode( $str, 9 );

		}

		

		if ( version_compare( phpversion(), '5.0.0' ) == -1 ) {

			$result = false;

			$fp = @fopen( $filename, 'w' );

			if ( $fp ) {

				flock( $fp, LOCK_EX );

				$result = fwrite( $fp, $str );

				$lock = flock( $fp, LOCK_UN );

				fclose( $fp );

			}

		}

		else {

			$result = file_put_contents( $filename, $str );

		}

		

		return( $result );

	}

	

	function sb_folder_listing( $dir, $ext_array ) {

		// Return an array of files in a directory.

		// On fail returns an empty array.

		//

		// Optionally you can pass an array of file

		// extensions to match. Pass an empty array

		// if you want it to return all files.

		//

		$result = array();

		

		if ( is_dir($dir) ) {

			$dhandle = opendir($dir);

			if ( $dhandle ) {

				// Loop through files

				$filename = readdir( $dhandle );

				while ( $filename ) {

					if ( is_file( $dir . $filename ) ) {

						if ( count( $ext_array ) > 0 ) {

							$ok = false;

							for ( $i = 0; $i < count( $ext_array ); $i++ ) {

								if ( strtolower( strrchr( $filename, '.' ) ) == strtolower( $ext_array[$i] ) ) {

									$ok = true;

									break;

								}

							}

						} else {

							$ok = true;

						}

						if ( $ok == true ) {

							array_push( $result, $filename );

						}

					}

					$filename = readdir( $dhandle );

				}

			}

			closedir( $dhandle) ;

		}

		sort( $result );

		return( $result );

	}

	

	function sb_delete_file ( $filename ) {

		// Delete a file.

		//

		// I'm guessing that we don't need to lock a file to delete it. Who knows?

		clearstatcache();

		$result = @unlink( $filename );

		return( $result );

	}

	

	function sb_delete_directory ( $dirname ) {

		// Delete a directory. Only works if directory is empty.

		//

		// Returns true or false

		clearstatcache();

		$result = @rmdir( $dirname );

		return( $result );

	}

	

	function sb_strip_extension ( $filename ) {

		$temp_pos = strpos( $filename, '.' );

		if ( $temp_pos !== false ) {

			$filename = substr( $filename, 0, $temp_pos );

		}

		return( $filename );

	}

	

	function get_permissions( $filename ) {

		$perms = fileperms( $filename );

		

		if (($perms & 0xC000) == 0xC000) {

			// Socket

			$info = 's';

		} elseif (($perms & 0xA000) == 0xA000) {

			// Symbolic Link

			$info = 'l';

		} elseif (($perms & 0x8000) == 0x8000) {

			// Regular

			$info = '-';

		} elseif (($perms & 0x6000) == 0x6000) {

			// Block special

			$info = 'b';

		} elseif (($perms & 0x4000) == 0x4000) {

			// Directory

			$info = 'd';

		} elseif (($perms & 0x2000) == 0x2000) {

			// Character special

			$info = 'c';

		} elseif (($perms & 0x1000) == 0x1000) {

			// FIFO pipe

			$info = 'p';

		} else {

			// Unknown

			$info = 'u';

		}

		

		// Owner

		$info .= (($perms & 0x0100) ? 'r' : '-');

		$info .= (($perms & 0x0080) ? 'w' : '-');

		$info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x' ) : (($perms & 0x0800) ? 'S' : '-'));

		

		// Group

		$info .= (($perms & 0x0020) ? 'r' : '-');

		$info .= (($perms & 0x0010) ? 'w' : '-');

		$info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x' ) : (($perms & 0x0400) ? 'S' : '-'));

		

		// World

		$info .= (($perms & 0x0004) ? 'r' : '-');

		$info .= (($perms & 0x0002) ? 'w' : '-');

		$info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x' ) : (($perms & 0x0200) ? 'T' : '-'));

		

		return( $info );

	}

	?>
