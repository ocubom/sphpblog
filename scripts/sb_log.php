<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Untitled</title>
</head>

<body>
<?php
	// Experimenting with some logging functions
	
	function sb_log ()
	{
		$log='';
		//Client address
		$log=$log . $_SERVER['REMOTE_ADDR'] . ' -';
		//Client user
		$log=$log . ' - ';
		//Date
		$log=$log . '[' . date( 'd/M/Y:H:i:s' ) . ' GMT] ';
		//Petition
		$log=$log . '"GET ' . $_SERVER["URL"] . ' ' . $_SERVER['SERVER_PROTOCOL'] . '" ';
		//Code
		$log=$log . '200 ';
		//Size
		$log=$log . $_SERVER['CONTENT_LENGTH'] . ' ';
		//Referer
		if (empty($_SERVER['HTTP_REFERER']))
			$log=$log . '"-" ';
		else
			$log=$log . '"' . $_SERVER['HTTP_REFERER'] . '" ';
		//User agent
		$log=$log . '"' . $_SERVER['HTTP_USER_AGENT'] . '"' . "\r\n";
		
		$file=fopen( 'access.log', 'a' );
		fputs( $file, $log );
		fclose( $file );
	}

	sb_log();
?>
</body>
</html>
