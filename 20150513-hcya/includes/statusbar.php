<!-- * * * * * * * * * LOGIN * * * * * * * * *  -->
				<div id="loginbox" style="display:none;">
					<div id="loginbox-container">
						<img id="login-logo" alt="HCYA LOGO" src="imgs/logo_white.png">
						<form class="pure-form" action="login.php?page=index" method="POST" id="login-form">
			        		<input type="text" name="user" placeholder="Username" class="pure-input-1-2"/>					<br><br>
			        		<input type="password" name="pass" placeholder="Password" class="pure-input-1-2"/>				<br><br>
		        			
		        			<button type="submit" class="pure-button-primary pure-button pure-input-1-2">Sign In</button>	<br><br>
		        			<a class="pure-button submit-btn" href="new_user.php">Sign Up</a>
						</form>				
					</div>
				</div>
	<!-- * * * * * * * * * REGISTER * * * * * * * * *  -->
				<div id="signupbox" style="display:none;">
					<div id="signupbox-container">
						<img id="login-logo" alt="HCYA LOGO" src="imgs/logo_white.png">
						<form class="pure-form" action="addnew_user.php" method="POST" id="login-form">
			        		<input type="text" name="user" placeholder="Username" class="pure-input-1-2"/>		<br><br>			        		
			        		<input type="password" name="pass" placeholder="Password" class="pure-input-1-2"/>	<br><br>
		        			<input type="text" name="fname" placeholder="First name" class="pure-input-1-2"/>	<br><br>			        		
			        		<input type="text" name="email" placeholder="Email" class="pure-input-1-2"/>		<br><br>
		        			
		        			<button type="submit" class="pure-button-primary pure-button pure-input-1-2">Sign Up</button><br><br>
		        			<a class="pure-button submit-btn" href="hcyaLogin.php">Sign In</a>
						</form>				
					</div>
				</div>
	<!-- * * * * * * * * * STATUS BAR * * * * * * * * *  -->
				<div id="status-footer">
					<div id="status-footer-container">
						<?php 
							// session_start();
							$name = $_SESSION['name'];
							
							if($_SESSION['logged_in'] == "YES" && $_SESSION['admin_logged_in'] !== "YES") {
								print("Welcome <a class='status-bar-item' href='hcyaAccount.php'>" . $name ."</a>!");
								print('&nbsp; &#x2022; &nbsp;');
								print('<a class="status-bar-item" href="logout.php?page=index">Logout</a>'); 
							} 

							else if($_SESSION['admin_logged_in'] == "YES" && $_SESSION['logged_in'] !== "YES") {
								print('Welcome <a class="status-bar-item" href="admin_view.php">ADMIN</a>!');
								print('&nbsp; &#x2022; &nbsp;');
								print('<a class="status-bar-item" href="logout.php?page=index">Logout</a>'); 
							} 

							else {	
								print('<a class="hover status-bar-item" href="hcyaLogin.php">Login</a>'); // onclick="showDiv()
								print(' / ');
								print('<a class="hover status-bar-item" href="new_user.php">Register</a>'); // onclick="showDiv2()
							}
						?>																												&nbsp; &#x2022; &nbsp;
						<a class ="status-bar-item status-social status-facebook" href="https://www.facebook.com/hcya.lions?fref=ts" 
						target="_blank">																			Facebook</a>		&nbsp; &#x2022; &nbsp;
						<a class ="status-bar-item status-social status-gmail" href="mailto:hcyalions@aol.com">		Gmail   </a>
						<?php 
							if($_SESSION['logged_in'] == "YES") {
								
							}  
							else {
								print('&nbsp; &#x2022; &nbsp;');
								print('<a class="status-bar-item" href="admin_view.php">Admin Panel</a>');
							}
						?>
						<span style="float:right; padding-right:1em;">&copy; 2014 Peter Dulworth. </span>
					</div>
				</div> 