<?php 

	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes 
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com
	
	// -------------------------
	// Session & Login Functions
	// -------------------------
	
	function logged_in ( $redirect_to_login, $redirect_to_setup ) {
		// Check if the user is logged in and has a session.
		//
		// Session data is stored in a client-side cookie.
		// Login flag is stored in the session cookie.

		// Support for PHP >= 4.1.0
		// Check if the user has a client-side cookie.
		if ( isset( $_COOKIE[ 'my_id' ] ) ) {
			$my_id = $_COOKIE[ 'my_id' ];
			
			// Turn off URL SIDs.
			// ini_set( 'session.use_trans_sid', '0' );
			
			// Init the session.
			session_set_cookie_params(time()+60*60*24*7);
			session_id($my_id);
			session_start ();
			
			// Check if they're logged in.
			if ( isset( $_SESSION[ 'logged_in' ] ) && $_SESSION[ 'logged_in' ] == 'yes' ) {
				if ( $_SESSION[ 'site_path' ] === dirname($_SERVER[ 'PHP_SELF' ]) ) {
					return ( true );
				}
			}
		}
		
		// Special Case:
		// If there's no password file then need to redirect them.
		$passFile = 'config/password.txt';
		if ( !file_exists( $passFile ) ) {
			if ( $redirect_to_setup ) {
				redirect_to_url( 'install00.php' );
				
				exit;
			} else {
				return ( -1 );
			}
		}
		
		if ( $redirect_to_login ) {
			redirect_to_url( 'index.php' );
			
			exit;
		} else {
			return ( false );
		}
	}
	
	function logout () {
		// Log Out
		//
		// Support for PHP >= 4.1.0
		if ( isset( $_COOKIE[ 'my_id' ] ) ) {
			$my_id = $_COOKIE[ 'my_id' ];
			
			// Turn off URL SIDs.
			// ini_set( 'session.use_trans_sid', '0' );
			
			// Init the session.
			session_set_cookie_params(time()+60*60*24*7);
			session_id($my_id);
			session_start();
			session_unset($_SESSION[ 'logged_in' ]);
			session_unset($_SESSION[ 'site_path' ]);
			session_destroy();
		}
	}
	
	function create_password ( $user, $pass ) {
		// Generate and store password hash
		//
		$mypasswd = $user.$pass;
		$hashed = crypt($mypasswd); 
		
		// Save File
		$filename = 'config/password.txt';
		$result = sb_write_file( $filename, $hashed );
		
		if ( $result ) {
			// Start Session and Set Cookie
			// ini_set( 'session.use_trans_sid', '0' );
			session_set_cookie_params(time()+60*60*24*7);
			@session_start();
			
			// Support for PHP >= 4.1.0
			$_SESSION[ 'logged_in' ] = 'yes';
			$_SESSION[ 'site_path' ] = dirname($_SERVER[ 'PHP_SELF' ]);
			setcookie('my_id',session_id(),time()+60*60*24*7);
			
			return ( true );
		} else {
			// Error:
			// Probably couldn't create file...
			return ( $filename );
		}
	}
	
	function check_password ( $user, $pass ) {
		// Check password against hashed password file
		//
		$passFile = 'config/password.txt';
		$hashed = sb_read_file( $passFile );
		
		// Verify Password
		$mypasswd = $user.$pass;
		$chkpass = crypt($mypasswd, $hashed); 
		if ($hashed === $chkpass) { 
			// Start Session and Set Cookie
			// ini_set( 'session.use_trans_sid', '0' );
			session_set_cookie_params(time()+60*60*24*7);
			@session_start();
			
			// Support for PHP >= 4.1.0
			$_SESSION[ 'logged_in' ] = 'yes';
			$_SESSION[ 'site_path' ] = dirname($_SERVER[ 'PHP_SELF' ]);
			setcookie('my_id',session_id(),time()+60*60*24*7);
			
			return ( true );
		} else { 
			return ( false );
		}
	}
	
	function redirect_to_url( $relative_url = 'index.php' ) {
		if ( ( dirname($_SERVER[ 'PHP_SELF' ]) == '\\' || dirname($_SERVER[ 'PHP_SELF' ]) == '/' ) ) {
			// Hosted at root.
			header('Location: http://'.$_SERVER[ 'HTTP_HOST' ].'/'.$relative_url);
		} else {
			// Hosted in sub-directory.
			header('Location: http://'.$_SERVER[ 'HTTP_HOST' ].dirname($_SERVER[ 'PHP_SELF' ]).'/'.$relative_url);
		}
		exit;
	}
?>
