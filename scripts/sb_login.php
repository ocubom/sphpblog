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
		// Turn off URL SIDs.
		ini_set('url_rewriter.tags','');
		ini_set('session.use_trans_sid', false);
		
		// Init the session.
		session_set_cookie_params(60*60*24*5);
		session_start ();
		
		// Check if user is logged in.
		if ( isset( $_SESSION[ 'logged_in' ] ) && $_SESSION[ 'logged_in' ] == 'yes' ) {
			if ( $_SESSION[ 'site_path' ] === dirname($_SERVER[ 'PHP_SELF' ]) ) {
				if ( $_SESSION[ 'ip' ] === getIP() ) {
					// User is logged in.
					return ( true );
				}
			}
		}
		
		// Special Case:
		// If there's no password file then need to redirect them.
		$username = null;
		$password = null;
		
		@include('config/password.php');
		
		if ( $username == null || $password == null ) {
		
			// Clear variables (why not...)
			$username = null;
			$password = null;
			
			if ( $redirect_to_setup ) {
				redirect_to_url( 'install00.php' );
				exit;
			} else {
				return ( false );
			}
		}
		
		// Clear variables (why not...)
		$username = null;
		$password = null;
		
		if ( $redirect_to_login ) {
			redirect_to_url( 'index.php' );
			exit;
		} else {
			return ( false );
		}
	}
	
	function logout () {			
		// Turn off URL SIDs.
		ini_set('url_rewriter.tags','');
		ini_set('session.use_trans_sid', false);
		
		// Init the session.
		session_set_cookie_params(60*60*24*5);
		session_start();
		
		// Check if user is logged in (just for reporting...)
		$was_logged_in = 0;
		if ( isset( $_SESSION[ 'logged_in' ] ) && $_SESSION[ 'logged_in' ] == 'yes' ) {
			if ( $_SESSION[ 'site_path' ] === dirname($_SERVER[ 'PHP_SELF' ]) ) {
				if ( $_SESSION[ 'ip' ] === getIP() ) {
					$was_logged_in = 1;
				}
			}
		}
				
		session_unset();
		session_destroy(); 
		$_SESSION = array();
		
		return ( $was_logged_in );
	}
	
	function check_password ( $user, $pass ) {
		// Check password against hashed password file
		$username = null;
		$password = null;
		
		@include('config/password.php');
		
		if ( $username == null || $password == null ) {
			// Missing password.php file...
		} else {
			// Verify Username
			if ( crypt( $user, $username ) === $username ) {
				if ( crypt( $pass, $password ) === $password ) {
					// Start Session and Set Cookie
					ini_set('url_rewriter.tags','');
					ini_set('session.use_trans_sid', false);
			
					session_set_cookie_params(60*60*24*5);
					@session_start();
					
					// Support for PHP >= 4.1.0
					$_SESSION[ 'logged_in' ] = 'yes';
					$_SESSION[ 'site_path' ] = dirname($_SERVER[ 'PHP_SELF' ]);
					$_SESSION[ 'ip' ] = getIP();
					// setcookie('my_id',session_id(),time()+60*60*24*5);
					
					// Clear variables (why not...)
					$username = null;
					$password = null;
					
					return ( true );
				}
			}
		}
		
		// Clear variables (why not...)
		$username = null;
		$password = null;
		
		return ( false );
	}
	
	function redirect_to_url( $relative_url = "index.php" ) {
		// Many thanks to Ridgarou for fixing the port issue.
	
		if ( strpos ($_SERVER['HTTP_HOST' ], ":") != false ){
			$port = '';
		} else {
			$port = ':' . $_SERVER[ 'SERVER_PORT'];
			if ($port == ':80') {
				$port = '';
			}
		}
		
		$proto = 'http://';
		if ($_SERVER['HTTPS'] == 'on') {
			$proto = 'https://';
			if ($port == ':443') {
				$port = '';
			}
		}

 		if ( ( dirname($_SERVER[ 'PHP_SELF' ]) == '\\' || dirname($_SERVER[ 'PHP_SELF' ]) == '/' ) ) {
			// Hosted at root.
			header('Location: '.$proto.$_SERVER['HTTP_HOST' ].$port.'/'.$relative_url);
		} else {
			// Hosted in sub-directory.
			header('Location: '.$proto.$_SERVER['HTTP_HOST' ].$port.dirname($_SERVER[ 'PHP_SELF']).'/'.$relative_url);
		}
		exit;
	}
	
	/*
	function create_password ( $user, $pass ) {
		// Generate and store password hash and log the user in.
		//
		$mypasswd = $user.$pass;
		$hashed = crypt($mypasswd); 
		
		// Save File
		$filename = 'config/password.txt';
		$result = sb_write_file( $filename, $hashed );
		
		if ( $result ) {
			// Start Session and Set Cookie
			ini_set('url_rewriter.tags','');Ê
			ini_set('session.use_trans_sid', false);
			
			session_set_cookie_params(60*60*24*5);
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
			ini_set('url_rewriter.tags','');Ê
			ini_set('session.use_trans_sid', false);
			
			session_set_cookie_params(60*60*24*7);
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
	*/
?>
