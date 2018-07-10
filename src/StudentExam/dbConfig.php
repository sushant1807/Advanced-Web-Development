<?php 
error_reporting(1);
session_start();

$hostName = "localhost";
$userName = "root";
$passWord = "";

$hostConnect = mysql_connect($hostName,$userName,$passWord);

$databaseName = "studentexam";

$databaseConnect = mysql_select_db($databaseName,$hostConnect);

if($databaseConnect)
{
	echo "Connected to Database";
}
else
{
	die("Couldn't connect".mysql_error());
}

?>
