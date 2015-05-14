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
           		}, 0);
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

			<div id="signupbox" style="display:block;">
				<div id="signupbox-container">
					<img id="login-logo" src="imgs/logo_white.png">
					<h3 id="error-msg" style="padding:0; margin:0 0 .5em 0">
						<?php 
							$problem = "";
							$problem = $_GET['problem'];
							$errormsg = "";
							if($_GET['problem'] == "incompleteField") { print($errormsg . "Please complete all fields!");}
							if($_GET['problem'] == "usernameAlreadyExists") { print($errormsg . "Username already exists.");} 
													
							if($problem !== "") {print($errormsg);}
						?>
					</h3>
					
					<form class="pure-form" action="addnew_user.php" method="POST" id="login-form">
		        		
			        		<input type="text" name="user" placeholder="Username" class="pure-input-1-2"/>
			        		<br><br>
			        		<input type="password" name="pass" placeholder="Password" class="pure-input-1-2"/>
		        			<br><br>

		        			<input type="text" name="fname" placeholder="First name" class="pure-input-1-2"/>
			        		<br><br>
			        		<input type="text" name="email" placeholder="Email" class="pure-input-1-2"/>
		        			<br><br>
		        		
		        		<button type="submit" class="pure-button-primary pure-button pure-input-1-2">Sign Up</button>
		        		<br><br>
		        		<a class="pure-button" href="hcyaLogin.php">Sign In</a>
					</form>				
				</div>
			</div>
			</div> <!-- content -->
			
			<?php include('includes/statusbar.php');?>  <!-- * * * * * * * * * * * * * * * * * * * * * INCLUDE STATUS BAR* * * * * * * * * * * * * * * * * * * * * * -->

		</body>
	
	</html>