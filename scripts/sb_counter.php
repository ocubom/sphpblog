<?php
// Originally based on a script by Wingnut.
  
// database files
$count = "content/counter/hits.txt"; 
$ipfile = "content/counter/counterip.txt";

// duration of IP lock in minutes
$duration = 5; 

$phpversion = phpversion();
if ($phpversion < 4.1){
  global $HTTP_SERVER_VARS;
  $aktip = $HTTP_SERVER_VARS['REMOTE_ADDR'];
  if (($aktip == "127.0.0.1") && ($HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'] != ""))
  {
    $aktip = $HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'];
  }
}
else{
  $aktip = $_SERVER['REMOTE_ADDR'];
  if (($aktip=="127.0.0.1")&&($_SERVER['HTTP_X_FORWARDED_FOR']!=""))
  {
    $aktip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
}

function checkforfiles() 
{
  global $ipfile, $count;
  // Basically, try to create and/or open the files first
  
  if (file_exists( 'content/counter' ) == false ) {
    sb_create_folder( 'content/counter' );
    }
  
  if (file_exists( $count ) == false ) {
    $filecount = file( $count );
    $counthandle = @fopen($filecount,"w");
    fclose($counthandle);
    }
    
  if (file_exists( $ipfile ) == false ) {
    $file = file( $ipfile );
    $iphandle = @fopen($file,"w");
    fclose($iphandle);
    }
}

function checkip($ip)
{
  global $ipfile,$duration;
  checkforfiles();
  
  $timestamp = time();
  
  $file = file($ipfile);
  $iphandle = fopen($ipfile,"w+");
  if(sizeof($file)==0)
  {
     fputs($iphandle, "$ip|$timestamp\n");
	   daily_counter();
  }
  else
  { 
    foreach ($file as $line) 
    {
      $exp_line = explode("|", $line);
      if(($exp_line[1]+ 60*$duration) < $timestamp)
      {
	    if ($exp_line[0] == $ip)
	    {
          fputs($iphandle, "$exp_line[0]|$timestamp\n");
        }
        else
	    {
          fputs($iphandle, "$ip|$timestamp\n"); 
        }
	    daily_counter();
      }
	  else 
      {
   	    fputs($iphandle, "$line");
      }
    }
  }
  fclose($iphandle);
}        

function daily_counter()
{
  global $count;	
  checkforfiles();
  $date = date("d.m.y.");
  $tstamp  = mktime(0, 0, 0, date("m"), date("d")-1, date("y"));
  $yesterday = date("d.m.y.", $tstamp);
  $time = date("H:i:s");
  $isempty = "readfile($count)";
  if ($isempty==""){
  	$emptyhandle = fopen($count,"w+");
	fputs($emptyhandle,"0|0|0|0|0");
	fclose($emptyhandle);
  }
  if ( file_exists( $count ) ) { 
    $counthandle = fopen($count,"r");
    $counter = fgets($counthandle, 1000);
    list($ctotalold,$dateold,$hits,$dateyesterday,$hitsyesterday ) = explode("|",$counter);
    fclose($counthandle);
  }
  
  $ctotalold++;
  $ctotal = $ctotalold;
  if ($dateold == $date)
  {
	$hits++;
  }
  elseif ($dateold == $yesterday)
  {
	$dateyesterday  = $dateold;
	$hitsyesterday  = $hits;
	$hits = 1;
  }
  else
  {
	$hits = 1;
	$dateyesterday = $yesterday;
	$hitsyesterday = 0;
  }
  $new_line = "$ctotal|$date|$hits|$dateyesterday|$hitsyesterday";
  
  $writecount = fopen($count,"w+");
  fputs($writecount,$new_line);
  fclose($writecount);
}

// print functions
function stat_total()
{
  global $count,$aktip;
  
  checkip($aktip);
  if ( file_exists( $count ) ) {    
    $handle = fopen($count,"r");
    while($counter = fgetcsv($handle, 1024, "|"))
    {
      $text = "$counter[0]";
    }
    fclose ($handle);
  } else {
    $text = "0";
  }
  
  return( $text );   
}

function stat_all()
{
  global $count,$aktip;
  
  checkip($aktip);
  if ( file_exists( $count ) ) {    
    $allhandle = fopen($count,"r");
    while($counter = fgetcsv($allhandle, 1024, "|"))
    {
      $text = "Total: <b>$counter[0]</b><br />Today: <b>$counter[2]</b><br />Yesterday: <b>$counter[4]</b><br />";
    }
  
    fclose ($allhandle);
  } else {
    $text = "Total: <b>0</b><br />Today: <b>0</b><br />Yesterday: <b>0</b><br />";
  }  
  return( $text );
}

?>
