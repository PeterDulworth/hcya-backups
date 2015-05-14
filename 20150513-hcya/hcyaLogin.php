<?php 
    session_start();
    if($_SESSION['logged_in'] == "YES") {
        header("location:index.php?problem=alreadyLoggedIn");
    }
?>
<html !DOCTYPE>
	<html> 	
		<head>
			<title>HCYA Lions | Home</title>

			<meta charset="UTF-8">
			<meta name="HCYA LIONS">
			<meta name="keywords" content="HCYA, Lions, Track and Field, Homeschool, XC, Cross Country">
			<meta name="description" content="Homeschool Christian Youth Association Running Club. Houston Texas.">
			<meta name="author" content="Peter Dulworth">
			
			<link rel="stylesheet" href="hcyaStyle.css">
			<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

			<?php include('includes/favicons.php');?>  <!-- * * * * * * * * * * * * * * * * * * * * * INCLUDE FAVICONS * * * * * * * * * * * * * * * * * * * * * * * -->
        		
    		<script src="javascripts/jquery.min.js"></script>
    		<script type="text/javascript">
		    	setTimeout(function preloader()    {
                	document.getElementById("loading").style.display = "none";
                	document.getElementById("content").style.display = "block";
           		}, 250);
			</script>
        </head>

		<body onLoad="preloader()">

			<div id="loading">
				  <div id="loading-div">
				    <center>
				    	<img src="imgs/loading.gif" />
				    	<p>LOADING</p>
				    </center>
				  </div>
			</div>
			
			<div id="content">
			<div id="background">
				<img src="http://puu.sh/9sGWq/733fc082fb.jpg" />				
			</div>
			
			<?php include('includes/navbar.php');?> <!-- * * * * * * * * * * * * * * * * * * * * * * INCLUDE NAVIGATION BAR * * * * * * * * * * * * * * * * * * * * * * * -->

			<div id="loginbox" style="display: block;">
				<div id="loginbox-container">
					<img id="login-logo" src="imgs/logo_white.png">
					
					<h3 id="error-msg">
						<?php 
							$problem = $_GET['problem'];
							$errormsg = "";
							if($problem == "notLoggedIn") { print($errormsg . "Please login to access this page!");}
							if($problem == "adminNotLoggedIn") { print($errormsg . "Please login as Admin to access this page!");}
							if($problem == "invalidUser") { print($errormsg . "Incorrect Username or Password.");}
							if($problem == "signInAgain")  { print($errormsg . "<span style='color:green'>Account Created! Please Login.</span>");}
							
							if($problem !== "") {print($errormsg);}
						?>
					</h3>

					<form class="pure-form" action=<?php $page = $_GET['page']; print('login.php?page=' . $page);?> method="POST" id="login-form">
		        		
			        		<input type="text" name="user" placeholder="Username" class="pure-input-1-2"/>
			        		<br><br>
			        		<input type="password" name="pass" placeholder="Password" class="pure-input-1-2"/>
		        			<br><br>
		        		
		        		<button type="submit" class="pure-button-primary pure-button pure-input-1-2">Sign in</button>
		        		<br><br>
		        		<a class="pure-button" href="new_user.php">Sign Up</a>
					
					</form>				
				</div>
			</div>

			 <!-- * * * * * * * * * * * * * * * * * * * * * * INCLUDE COPYRIGHT * * * * * * * * * * * * * * * * * * * * * * * * -->


			</div> <!-- content -->

			
			<?php include('includes/statusbar.php');?> <!-- * * * * * * * * * * * * * * * * * * * * * INCLUDE STATUS BAR * * * * * * * * * * * * * * * * * * * * * * -->

		</body>
	
	</html>