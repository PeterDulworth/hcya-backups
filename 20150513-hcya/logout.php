<?php
	session_start();
	
	$problem = "";
	$problem = $_GET['problem'];
	$page = $_GET['page'];
	
	if($problem == "signInAgain") { 
		$seconds = -10 + time();
		setcookie(loggedin, date("F js - g:i a"), $seconds);
		session_destroy();
		header("location:hcyaLogin.php?problem=signInAgain");
	}
	else if($page == "media") {
		$seconds = -10 + time();
		setcookie(loggedin, date("F js - g:i a"), $seconds);
		session_destroy();
		header("location:hcyaMedia.php");}
	else if($page == "index") {
		$seconds = -10 + time();
		setcookie(loggedin, date("F js - g:i a"), $seconds);
		session_destroy();
		header("location:index.php");}
	else {
	$seconds = -10 + time();
	setcookie(loggedin, date("F js - g:i a"), $seconds);
	session_destroy();
	header("location:index.php");
	}
?>