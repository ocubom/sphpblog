<?php 

	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes 
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com

	// --------------------
	// RSS & Ping Functions
	// --------------------
	
	function sb_mail ($from, $to, $subject, $body, $text=true, $priority=3)
	{
		// Contributed by: Javier Gutierrez, guti <at> ya <dot> com
		//
		global $sb_info;
	
		$headers='';
		if ($text)
		{
			$headers=$headers . "Content-Type: text/plain \r\n";
		}
		else
		{
			$headers=$headers . "MIME-Version: 1.0 \r\n";
			$headers=$headers . "Content-type: text/html; charset=iso-8859-1 \r\n";
		}
		$headers=$headers . 'From: ' . $from . " \r\n";
		$headers=$headers . 'Reply-To: ' . $from . " \r\n";
		$headers=$headers . 'Return-Path: ' . $from . " \r\n";
		$headers=$headers . 'Date: ' . date("r") . " \r\n";
		$headers=$headers . 'X-Priority: ' . $priority . " \r\n";
		$headers=$headers . 'X-Mailer: SPHPBLOG/' . $sb_info[ 'version' ] . " \r\n";
		ini_set('sendmail_from', $from);
		$res=mail($to, stripslashes($subject), stripslashes($body), $headers);
		ini_restore('sendmail_from');
		return($res);
	}
	
	// Send a update ping to a ping server in url.
	//
	function sb_ping ( $url )
	{
		// Contributed by: Javier Gutierrez, guti <at> ya <dot> com
		//
		if ( $url == NULL || $url == '' ) {
			return( false );
		}
		
		global $blog_config, $sb_info;

		$result = '';
		$user_agent = 'SPHPBLOG ping script/' . $sb_info[ 'version' ];
		$url = parse_url($url);

		$xml="<?xml version=\"1.0\"?".">\n";
		$xml=$xml . "<methodCall>\n";
		$xml=$xml . "\t<methodName>weblogUpdates.ping</methodName>\n";
		$xml=$xml . "\t<params>\n";
		$xml=$xml . "\t\t<param><value>" . htmlspecialchars( strip_tags( $blog_config[ 'blog_title' ] ) ) . "</value></param>\n";
		// Use external name (SERVER_NAME) for pings to the outside world!!
		if ( ( dirname($_SERVER['PHP_SELF']) == '\\' || dirname($_SERVER['PHP_SELF']) == '/' ) ) {
		   $xml=$xml . "\t\t<param><value>http://" . $_SERVER['SERVER_NAME'] . "/</value></param>\n";
		} else {
		   $xml=$xml . "\t\t<param><value>http://" . $_SERVER['SERVER_NAME'] . dirname( $_SERVER['PHP_SELF'] ) . "/</value></param>\n";
		}
		$xml=$xml . "\t</params>\n";
		$xml=$xml . "</methodCall>\n";
		$socket = @fsockopen( $url['host'], 80, $errno, $errstr, 30);
		if ( $socket ) { 
			fwrite( $socket, 'POST ' . $url['scheme'] . '://' . $url['host'] . $url['path'] . " HTTP/1.0\nHost: " . $url['host'] . "\nUser-Agent:" . $user_agent . " 0.1\nContent-Type: text/xml\nContent-Length: " . strlen ( $xml ) . "\n\n" . $xml . "\n" );
			$result = fread( $socket, 8192 );
			fclose ( $socket );
			return( strpos( $result, 'fault' )===false );
		}
		else {
			return( false );
		}
	}
	
	// Send a trackback ping to a ping server in url.
	//
	function sb_tb_ping ( $url, $title, $permalink, $excerpt )
	{
		// Contributed by: Arjan Hakkesteegt, sphpblog <at> hakwerk <dot> com
		//
		if ( $url == NULL || $url == '' || $permalink == NULL || $permalink == '' ) {
			return( false );
		}
		
		global $blog_config, $sb_info;

		$result = '';
		$user_agent = 'SPHPBLOG ping script/' . $sb_info[ 'version' ];
		$url = parse_url($url);
		
		$data = "";
		$data = $data . "title=" . urlencode( strip_tags( $title ) );
		// Use external name (SERVER_NAME) for pings to the outside world!!
		if ( ( dirname($_SERVER['PHP_SELF']) == '\\' || dirname($_SERVER['PHP_SELF']) == '/' ) ) {
		   $data = $data . "&url=http://" . $_SERVER['SERVER_NAME'] . "/" . urlencode( strip_tags( $permalink ) );
		} else {
		   $data = $data . "&url=http://" . $_SERVER['SERVER_NAME'] . dirname( $_SERVER['PHP_SELF'] ) . "/" . urlencode( strip_tags( $permalink ) );
		}
		$data = $data . "&excerpt=" . urlencode( strip_tags( $excerpt ) );
		$data = $data . "&blog_name=" . urlencode( strip_tags( $blog_config[ 'blog_title' ] ) );

		// $socket = fsockopen( $url['host'], 80, $errno, $errstr, 30);
		$socket = fsockopen( ( $url['host'] === $_SERVER['HTTP_HOST'] ? $_SERVER['SERVER_ADDR'] : $url['host'] ), 80, $errno, $errstr, 30);
		if ( $socket ) { 
			fwrite( $socket, 'POST ' . $url['scheme'] . '://' . $url['host'] . $url['path'] . '?' . $url['query'] . " HTTP/1.0\nHost: " . $url['host'] . "\nUser-Agent:" . $user_agent . " 0.1\nContent-Type: application/x-www-form-urlencoded\nContent-Length: " . strlen ( $data ) . "\n\n" . $data . "\n" );
			$result = fread( $socket, 8192 );
			fclose ( $socket );
			return( strpos( $result, '<error>0</error>' ) );
		}
		else {
			return( false );
		}
	}
	
?>
