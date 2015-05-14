<?php 
    session_start();
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
			<link rel="stylesheet" href="960/960.css" />
            <link rel="stylesheet" href="960/reset.css" />
            <link rel="stylesheet" href="960/text.css" />

			<?php include('includes/favicons.php');?>  <!-- * * * * * * * * * * * * * * * * * * * * * INCLUDE FAVICONS * * * * * * * * * * * * * * * * * * * * * * * -->
        		
    		<script src="javascripts/jquery.min.js"></script>
    		<script type="text/javascript">
		    	setTimeout(function preloader()    {
                	document.getElementById("loading").style.display = "none";
                	document.getElementById("content").style.display = "block";
           		}, 1000);
			</script>
			<script type="text/javascript">
				function showDiv() {
					document.getElementById('welcomebox').style.display = "none";
					document.getElementById('signupbox').style.display = "none";
					document.getElementById('welcomebox-footer').style.display = "none";
					document.getElementById('loginbox').style.display = "block";
				}
			</script>
			<script type="text/javascript">
				function showDiv2() {
					document.getElementById('welcomebox').style.display = "none";
					document.getElementById('loginbox').style.display = "none";
					document.getElementById('welcomebox-footer').style.display = "none";
					document.getElementById('signupbox').style.display = "block";
				}
			</script>
			<script type="text/javascript">	
				function showMenu() {
				    document.getElementById('social-bar').style.display = "block";
				}
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

		<!-- 	<div id="login-signup">
				<p><a id="login" href="login.php">Login</a><p>/</p><a id="signup" href="signup.php">Sign Up</a></p>
			</div> -->

			<div id="welcomebox">
				<div id="welcomebox-container">
					<div id="welcomebox-text" style="font-size: 70">Welcome <?php session_start(); $name = $_SESSION['name']; print(' ' . $name);?></div>
					<div id="welcomebox-text2" style="font-size: 20">"I can do all things through Christ who strengthens me"</div>
					<div id="welcomebox-text3" style="font-size: 15"> ~ Phillipians 4:13</div>
					<div><img class="hover" src="imgs/menu_b.svg" onclick="toggle_visibility('welcomebox-footer');"></div>
				</div>
			</div>
			<div id="welcomebox-footer" style="display: none;">
				<div id="welcomebox-footer-container">
					<a id="facebookLink" href="https://www.facebook.com/hcya.lions?fref=ts" target="_block">Facebook</a>
					<?php 
						session_start();
						if($_SESSION['logged_in'] !== "YES") {print('<a class="hover" onclick="showDiv()">Login</a>');}
						else {print('<a class="hover" href="logout.php">Logout</a>');}
					?>
					<!-- <a onclick="showDiv()">Login</a> -->
					<a class="hover" onclick="showDiv2()">Sign Up</a>
					<a id="gmailLink" href="mailto:pdulworth97@gmail.com">Gmail</a>
				</div>
			</div>

			<div id="loginbox" style="display:none;">
				<div id="loginbox-container">
					<img id="login-logo" src="imgs/logo_white.png">
					
					<form class="pure-form" action="login.php" method="POST" id="login-form">
		        		
			        		<input type="text" name="user" placeholder="Username" class="pure-input-1-2"/>
			        		<br><br>
			        		<input type="password" name="pass" placeholder="Password" class="pure-input-1-2"/>
		        			<br><br>
		        		
		        		<button type="submit" class="pure-button-primary pure-button pure-input-1-2">Sign In</button>
		        		<br><br>
		        		<a class="pure-button" href="new_user.php">Sign Up</a>
					
					</form>				
				</div>
			</div>

			<div id="signupbox" style="display:none;">
				<div id="signupbox-container">
					<img id="login-logo" src="imgs/logo_white.png">
					
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
		        		<a class="pure-button" href="index.php#showDiv()">Sign In</a>
					</form>				
				</div>
			</div>

			<div id="status-footer">
				<div id="status-footer-container">
					<?php 
						session_start();
						$name = $_SESSION['name'];
						
						if($_SESSION['logged_in'] == "YES") {
						print('Welcome <a class="status-bar-item" href="hcyaLogin.php">' . $name . "</a>! ");
						print('&nbsp; &nbsp; | &nbsp; &nbsp;');
						print('<a class="status-bar-item" href="logout.php">Logout</a>'); 
						} 
						else 

						 {print('<a class="hover status-bar-item" onclick="showDiv()">Sign In</a>');}
						
					?>
					&nbsp; &nbsp; | &nbsp; &nbsp;
					<a class ="status-bar-item status-social status-facebook" href="#">Facebook</a>&nbsp; &nbsp; | &nbsp; &nbsp;
					<a class ="status-bar-item status-social status-gmail" href="#">Gmail</a>
				</div>
			</div>

			</div> <!-- content -->

		</body>
		<script type="text/javascript">
			function toggle_visibility(id) {
		       	var e = document.getElementById(id);
		       	if(e.style.display == 'block')
		          	e.style.display = 'none';
		      	else
		          	e.style.display = 'block';
	    	}
		</script>
	
	</html>