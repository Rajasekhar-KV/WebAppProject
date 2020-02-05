<?php 
DEFINE ('DB_USER', 'appdbuser');
DEFINE ('DB_PASSWORD', 'Appdbu$er1');
DEFINE ('DB_HOST', '127.0.0.1');
DEFINE ('DB_NAME', 'datadb');
//database connection
$dbcon = @mysqli_connect (DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('Could not connect to MySQL: '. mysqli_connect_error());

mysqli_set_charset($dbcon, 'utf8');

?>
