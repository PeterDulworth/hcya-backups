<?php
session_start();
if ($_SESSION['logged_in'] == "YES" && $_SESSION['admin_logged_in'] !== "YES") {
	header("location:hcyaLogin.php?problem=userNotAdmin");
} else if ($_SESSION['logged_in'] !== "YES" && $_SESSION['admin_logged_in'] !== "YES") {
	header("location:hcyaLogin.php?problem=adminNotLoggedIn");
}
?>
<html !DOCTYPE>
	<html>
		<head>
			<title>HCYA Lions | Amin Panel</title>

			<meta charset="UTF-8">																					<!-- Unicode Encoding(1byte) -->
			<meta name="HCYA LIONS">																				<!-- Title -->
			<meta name="keywords" content="HCYA, Lions, Track and Field, Homeschool, XC, Cross Country">			<!-- Keywords -->
			<meta name="description" content="Homeschool Christian Youth Association Running Club. Houston Texas.">	<!-- Description -->
			<meta name="author" content="Peter Dulworth">															<!-- Author -->

			<link rel="stylesheet" href="hcyaStyle.css">										<!-- StyleSheet(CSS) -->
			<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">		<!-- Pure(form style) -->
			<link rel="stylesheet" href="960/960.css" />										<!-- Main 960 -->
            <link rel="stylesheet" href="960/reset.css" />										<!-- 960 extras -->
            <link rel="stylesheet" href="960/text.css" />										<!-- OPTIONAL 960 font -->

<?php include ('includes/favicons.php');?>
<script src="javascripts/jquery.min.js"></script>	<!-- JQUERY -->
    		<!-- Copryright © 2012 -->
        </head>

	<!-- * * * * * * * * LOADING PAGE * * * * * * * *  -->

		<body onLoad="preloader()">

			<div id="loading">
				  <div id="loading-div">
				    <center>
				    	<img alt="loading wheel" src="imgs/loading.gif" />
				    	<p>LOADING</p>
				    </center>
				  </div>
			</div>
	<!-- * * * * * * * * * CONTENT * * * * * * * * *  -->
			<div id="content">
				<div id="background">
					<img alt="background img" src="http://puu.sh/9sGWq/733fc082fb.jpg" />
				</div>

<?php include ('includes/navbar.php');?><!-- * * * * * * * * * WELCOME * * * * * * * * *  -->
					<div class="adminbox" id="emailUsers" style="display:block;">
						<div class="adminbox-container">
							<div class="text" style="font-size: 50; line-height: 1em; padding-bottom: .25em;">Admin Panel</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em; margin-left:1.3em" onclick="showAdminDiv('emailUsers');">Email Users</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('manageUsers');">Manage Users</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('manageGallery');">Manage Gallery</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('websiteOptions');">Website 	Options</div><br><br><br>
								<div class="massEmail" style="padding: auto;">
									<?php $page = $_GET['page'];
									if ($page == "emailSent") {print('<span style="color:green; font-size:25;">Email Sent!</span>');}?>
										<form class="pure-form" action="email.php" method="POST" id="email-form">

											<input type="text" name="recipients" placeholder=<?php if (isset($_SESSION['mailto']) && $_SESSION['recipients'] !== "") {print($_SESSION['recipients']);} else {print('"Additional Recipients. Please Seperate with Commas."');}?> class="pure-input-2-3"/><br><br>

						        			<input type="text" name="subject" placeholder=<?php if (isset($_SESSION['mailto']) && $_SESSION['subject'] !== "") {print($_SESSION['subject']);} else {print('"Subject..."');}?> class="pure-input-2-3"/><br><br>

						        			<textarea name="emailContent" placeholder=<?php if (isset($_SESSION['mailto']) && $_SESSION['emailContent'] !== "") {print($_SESSION['emailContent']);} else {print('"Body..."');}?>class="pure-input-2-3" style="height: 7em; color:black;"></textarea><br><br>
											<?php if (!isset($_SESSION['mailto'])) {print('<button type="submit" class="pure-button-primary pure-button pure-input-1-3 a-text">Send</button><br><br>');} else{print('<span style="color:green; font-size: 25;">Successfully Validated!</span><br><br>');}
												if($_GET['problem'] == "messageSent") {print('<span style="color:green; font-size: 25;">Email Sent!</span><br><br>');}
											?>
										
											<?php session_start();
												if (isset($_SESSION['mailto'])) {print($_SESSION['mailto']); $_SESSION['mailto'] = null;}
											?>
										<!-- <a class="pure-button pure-input-1-3" href="hcyaLogin.php">SEND(Validate First)</a> -->
										</form>
								</div> <!-- email -->
						</div> <!-- end welcomebox container -->
					</div> <!-- end welcomebox -->
	<!-- * * * * * * * * * WELCOME * * * * * * * * *  -->
					<div class="adminbox" id="manageUsers" style="display:none">
						<div class="adminbox-container">
							<div class="text" style="font-size: 50; line-height: 1em; padding-bottom: .25em;">Admin Panel</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em; margin-left:1.3em" onclick="showAdminDiv('emailUsers');">Email Users</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;
</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('manageUsers');">Manage Users</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;
</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('manageGallery');">Manage Gallery</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;
</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('websiteOptions');">Website Options</div><br><br>
								<h3 style="border:1px inset white">Users</h3><br>
									<?php
										$username = "login42007";
										$password = "Lamborghini97!";
										$hostname = "68.178.217.44";

										$con = mysql_connect($hostname, $username, $password) or die("Could not connect to databasae");

										mysql_select_db("login42007", $con);

										$sql    = "SELECT * FROM Users";
										$mydata = mysql_query($sql, $con);

										echo "
											<div style='display:block; margin:auto;'>
												<table style='border: 1px solid white; border-collapse:collapse; padding: .5em 2em; color: white; margin:auto; text-align: center;' >
													<tr>
														<th style='border: 1px solid white; text-align: center; padding: .5em 2em;'>Username</th>
														<th style='border: 1px solid white; text-align: center; padding: .5em 2em;'>Name</th>
														<th style='border: 1px solid white; text-align: center; padding: .5em 2em;'>Email</th>
													</tr>";

										while ($record = mysql_fetch_array($mydata)) {
											echo "<tr>";
											echo "<td style='border: 1px solid white; padding: .5em 2em;'>".$record['Username']."</td>";

											echo "<td style='border: 1px solid white; padding: .5em 2em;'>".$record['Name']."</td>";
											echo "<td style='border: 1px solid white; padding: .5em 2em;'>".$record['Email']."</td>";
											echo "</tr>";
										}

										echo "</table></div><br><br>";

										mysql_close();
									?>
</div> <!-- end welcomebox container -->
					</div> <!-- end welcomebox -->
	<!-- * * * * * * * * * WELCOME * * * * * * * * *  -->
					<div class="adminbox" id="manageGallery" style="display:none">
						<div class="adminbox-container">
							<div class="text" style="font-size: 50; line-height: 1em; padding-bottom: .25em;">Admin Panel</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em; margin-left:1.3em" onclick="showAdminDiv('emailUsers');">Email Users</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;
</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('manageUsers');">Manage Users</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;
</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('manageGallery');">Manage Gallery</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;
</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('websiteOptions');">Website Options</div><br><br><br>
								<h3>Manage Gallery</h3>
						</div> <!-- end welcomebox container -->
					</div> <!-- end welcomebox -->
	<!-- * * * * * * * * * WELCOME * * * * * * * * *  -->
					<div class="adminbox" id="websiteOptions" style="display:none">
						<div class="adminbox-container">
							<div class="text" style="font-size: 50; line-height: 1em; padding-bottom: .25em;">Admin Panel</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em; margin-left:1.3em" onclick="showAdminDiv('emailUsers');">Email Users</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;
</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('manageUsers');">Manage Users</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;
</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('manageGallery');">Manage Gallery</div>
							<div style="font-size: 25; float:left; line-height:1em; padding:.25em;"> &#x2022;
</div>
							<div class="text-1 hover" style="font-size: 25; float:left; line-height:1em; padding:.25em;" onclick="showAdminDiv('websiteOptions');">Website Options</div><br><br><br>
								<h3>Website Options</h3>
						</div> <!-- end welcomebox container -->
					</div> <!-- end welcomebox -->

<?php include ('includes/statusbar.php');?>
			</div> <!-- content -->
			<script src="javascripts/scripts.js"></script>
		</body>
	</html>