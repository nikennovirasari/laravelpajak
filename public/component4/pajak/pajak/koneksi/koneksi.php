<?php 
if (!isset($_SESSION)) {
	session_start();
}
	$localhost = "localhost";
	$username = "root";
	$password = "";
	$db 	= "pajak";

	$mysqli = new mysqli($localhost,$username,$password,$db);
 ?>