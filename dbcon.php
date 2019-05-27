<?php
ob_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'mydb1');

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());

$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

if (!$connection)
    {   die('Could not connect: ' . mysql_error());   }
else
    {  echo " Congrats! connection established successfully";  }
?>
