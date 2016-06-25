<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$dbhost	= 'localhost';
$dbusn	= 'root';
$dbpass	= 'root';
$dbname	= 'techponya';
$dbconn	= mysql_connect($dbhost,$dbusn,$dbpass);
$dbconf = new mysqli($dbhost,$dbusn,$dbpass, $dbname); 
$dbopen	= mysql_select_db($dbname,$dbconn);
?>