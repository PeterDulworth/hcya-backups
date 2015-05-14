<?php
	$username = "login42007";
	$password = "Lamborghini97!";
	$hostname = "68.178.217.44";

	$dbhandle = mysql_connect($hostname, $username, $password) or die("Coulda not connect to databasae");

	$selected = mysql_select_db("login42007", $dbhandle);

	if($_POST['user'] !== "" && $_POST['pass'] !== "" && $_POST['fname'] !== ""  && $_POST['pass'] !== "") {

		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$name = $_POST['fname'];
		$email = $_POST['email'];

		$user_query = mysql_query("SELECT * FROM Users WHERE Username='$user'");
		$admin_query = mysql_query("SELECT * FROM Admin WHERE admin_name='$user'");
		
		if(mysql_num_rows($user_query) > 0 || mysql_num_rows($admin_query)) {
			header("location:new_user.php?problem=usernameAlreadyExists"); 
		} 
										
		else {
			mysql_query("INSERT INTO Users (Username, Password, Name, Email) VALUES ('$user', '$pass', '$name', '$email')");
			mysql_query("INSERT INTO emailList (Email) VALUES ('$email')");
			header("location:logout.php?problem=signInAgain");
		} //else
	} //if
	else { 
		$url = 'new_user.php';
		$url = strtok($url, '?');
		header("location:new_user.php?problem=incompleteField"); }

	mysql_close();
?>