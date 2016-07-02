<?php
session_start();
$flag=false;
if (isset($_SESSION['name']) || isset($_SESSION['pass'])) {
	if(isset($_SESSION['name']))
		unset($_SESSION['name']);
	if(isset($_SESSION['pass']))
	  	unset($_SESSION['pass']);
}
else
	echo "no session";
?>