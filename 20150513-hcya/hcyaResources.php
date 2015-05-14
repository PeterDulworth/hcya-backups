<?php
    session_start();
    if($_SESSION['logged_in'] !== "YES") { //$_SESSION['problem'] = 'notLoggedIn';
        //$url = 'hcyaLogin.php';
		//$url = strtok($url, '?');
        header("location:hcyaLogin.php?problem=notLoggedIn&page=resources");
    }
?> 

<html !DOCTYPE>
	<html> 
		<head>
			<title>HCYA Lions | Resources</title>

			<?php include('includes/head.php');?>

			<?php include('includes/favicons.php');?>  <!-- * * * * * * * * * * * * * * * * * * * * * INCLUDE FAVICONS * * * * * * * * * * * * * * * * * * * * * * * -->
        		
			<script src="sliderengine/jquery.js"></script>
		    <script src="sliderengine/amazingslider.js"></script>
		    <script src="sliderengine/initslider-1.js"></script>
		    <script src="javascripts/scrollToggle/scrollToggle.js"></script> 
		</head>

	<!-- * * * * * * * * LOADING PAGE * * * * * * * *  -->
 
		<body id="resourcebody" onLoad="preloader()">

			<div id="loading">
				  <div id="loading-div">
				    <center>
				    	<img src="imgs/loading.gif" />
				    	<p>LOADING</p>
				    </center>
				  </div>
			</div>
	<!-- * * * * * * * * * CONTENT * * * * * * * * *  -->
			
			<div id="content">

			<div id="background">
				<img src="http://puu.sh/9sGWq/733fc082fb.jpg" />				
			</div>
 
			<?php include('includes/navbar.php');?>

			<div id="resourcebox">
				<div id="resourcebox-container">
					<div class="resourcebox-text" id="resourcebox-text" style="font-size: 70">Resources</div>
					<div id="resourcebox-text2" style="font-size: 20">"I can do all things through Christ who strengthens me"</div>
					<div class="resourcebox-text" id="resourcebox-text3" style="font-size: 15"> ~ Phillipians 4:13 <hr> </div>
					<div  class="resource-subheader" id="familydirectory" style="font-size: 25"><p style="font-size: 25; text-shadow: 2px 2px #352E2E;">Family Directory<br><hr></p></div>
				
				<div id="resourceTableDiv">
					<table id="resourceTable" >
						<tr class ="resourceTableRow">
							<td><strong>&nbsp; &nbsp; &nbsp; Name &nbsp; &nbsp; &nbsp;</strong></td>
							<td><strong>Phone &nbsp;</strong></td>
							<td><strong>&nbsp; &nbsp; &nbsp; Email &nbsp; &nbsp; &nbsp; &nbsp;</strong></td>
							<td><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </strong></td>
						</tr>
						<tr class ="resourceTableRow">
							<td>&nbsp; &nbsp; &nbsp; Dulworth &nbsp; &nbsp; &nbsp;</td>
							<td>713-667-0336</td>
							<td>pdulworth97@gmail.com</td>
							<td>5315 Westchester, Houston, TX 77005</td>
						</tr>
						<tr class ="resourceTableRow">
							<td>&nbsp; &nbsp; &nbsp; Alas &nbsp; &nbsp; &nbsp;</td>
							<td>832-298-0550</td>
							<td>Waikwanalas@gmail.com </td>
							<td>5647 Wigton Houston, TX 77096</td>
						</tr>
						<tr class ="resourceTableRow">
							<td>&nbsp; &nbsp; &nbsp; Shy &nbsp; &nbsp; &nbsp;</td>
							<td>832-332-0819</td>
							<td>cdaddyshy@yahoo.com</td>
							<td>13931 Sorrel Grove Ct Houston, Tx 77047</td>
						</tr>
						<tr class ="resourceTableRow">
							<td>&nbsp; &nbsp; Blenkenship &nbsp; &nbsp;</td>
							<td>832-766-4646</td>
							<td>stacey_blankenship@bcbstx.com </td>
							<td>1414 Sugar Creek Blvd Sugar Land, TX 77478</td>
						</tr>
						<tr class ="resourceTableRow">
							<td>&nbsp; &nbsp; &nbsp; Shy &nbsp; &nbsp; &nbsp;</td>
							<td>713-667-0336</td>
							<td>pdulworth97@gmail.com</td>
							<td>5315 Westchester, Houston, TX 77005</td>
						</tr>
						<tr class ="resourceTableRow">
							<td>&nbsp; &nbsp; &nbsp; Shy &nbsp; &nbsp; &nbsp;</td>
							<td>713-667-0336</td>
							<td>pdulworth97@gmail.com</td>
							<td>5315 Westchester, Houston, TX 77005</td>
						</tr>
						<tr class ="resourceTableRow">
							<td>&nbsp; &nbsp; &nbsp; Shy &nbsp; &nbsp; &nbsp;</td>
							<td>713-667-0336</td>
							<td>pdulworth97@gmail.com</td>
							<td>5315 Westchester, Houston, TX 77005</td>
						</tr>
						<tr class ="resourceTableRow">
							<td>&nbsp; &nbsp; &nbsp; Shy &nbsp; &nbsp; &nbsp;</td>
							<td>713-667-0336</td>
							<td>pdulworth97@gmail.com</td>
							<td>5315 Westchester, Houston, TX 77005</td>
						</tr>

					</table>
				</div>
					<br>
					<br>
				
					<?php   
						$username = "login42007";
						$password = "Lamborghini97!";
						$hostname = "68.178.217.44";

						$con = mysql_connect($hostname, $username, $password) or die("Could not connect to databasae");

						mysql_select_db("login42007", $con);

						$sql = "SELECT * FROM Users";
						$mydata = mysql_query($sql,$con);
						
						echo "
						<div style='display:block; margin:auto;'>
							<table style='border: 1px solid white; border-collapse:collapse; padding: .5em 2em; color: white; margin:auto; text-align: center;' > 
								<tr>
									<th style='border: 1px solid white; text-align: center; padding: .5em 2em;'>Username</th>
									<th style='border: 1px solid white; text-align: center; padding: .5em 2em;'>Name</th>
									<th style='border: 1px solid white; text-align: center; padding: .5em 2em;'>Email</th>
								</tr>";

						while($record = mysql_fetch_array($mydata)) {
							echo "<tr>";
							echo "<td style='border: 1px solid white; padding: .5em 2em;'>" . $record['Username'] . "</td>"; 
							echo "<td style='border: 1px solid white; padding: .5em 2em;'>" . $record['Name'] . "</td>";
							echo "<td style='border: 1px solid white; padding: .5em 2em;'>" . $record['Email'] . "</td>";
							echo "</tr>";
						}

						echo "</table></div>";
		 
						mysql_close();
					?>	
				
					<br>
					<br>
				<div style="font-size: 25"><p style="font-size: 25; "><hr>Documents<br><hr></p></div>
				
				<div id="documentlist"> 
					<ul>
						<li><a style="text-decoration: none; font-family: Roboto; font-size: 20; float:left; color: rgba(255,255,255,1.0)" href="https://www.homeschool-life.com/sysfiles/member/custom/file_retrieve.cfm?memberid=1420&customid=14094" target="_block">&#8226; Membership Form</a></li>
						<li><a style="text-decoration: none; font-family: Roboto; font-size: 20; float:left; color: rgba(255,255,255,1.0)" href="https://www.dropbox.com/sh/p9rfiziq61w6my8/AAAGHdXmPcZc7ISvMrsRPo3-a" target="_block"><br>&#8226; HCYA Handbook</a></li>
						<li><a style="text-decoration: none; font-family: Roboto; font-size: 20; float:left; color: rgba(255,255,255,1.0)" href="https://www.homeschool-life.com/sysfiles/member/custom/file_retrieve.cfm?memberid=1420&customid=17479" target="_block"><br>&#8226; Participation Physical</a></li>
						<li><a style="text-decoration: none; font-family: Roboto; font-size: 20; float:left; color: rgba(255,255,255,1.0)" href="https://www.dropbox.com/s/jwkqem38dws9rq0/custom15106.doc" target="_block"><br>&#8226; 6 Week Core Training Regime</a></li>
						<li><a style="text-decoration: none; font-family: Roboto; font-size: 20; float:left; color: rgba(255,255,255,1.0)" href="https://www.dropbox.com/s/i37h8j4pv1wxv2m/custom15108.doc" target="_block"><br>&#8226; EZ Guide to Sprinting</a></li>
						<li><a style="text-decoration: none; font-family: Roboto; font-size: 20; float:left; color: rgba(255,255,255,1.0)" href="https://www.dropbox.com/s/qahr121jpgmnk74/longdistancerunning.doc" target="_block"><br>&#8226; Long Distance Running</a></li>
						<li><a style="text-decoration: none; font-family: Roboto; font-size: 20; float:left; color: rgba(255,255,255,1.0)" href="https://www.dropbox.com/s/hup6q8fydu3xn50/howtopolevault.doc" target="_block"><br>&#8226; How to Pole Vault</a></li>
						<li><a style="text-decoration: none; font-family: Roboto; font-size: 20; float:left; color: rgba(255,255,255,1.0)" href="https://www.dropbox.com/s/9aw8hxd63jjq6jc/4tipsdistance.doc" target="_block"><br>&#8226; 4 Tips for Distance Runners</a></li>
						<li><a style="text-decoration: none; font-family: Roboto; font-size: 20; float:left; color: rgba(255,255,255,1.0)" href="https://www.dropbox.com/s/jacfm1jorcleuml/calisthenics6weeks.docx" target="_block"><br>&#8226; 6 Week Calisthenics Programe</a></li>
					</ul>
				</div>
				
				<div style="font-size: 25"><p style="font-size: 25; "><br><br><br><br><br><br><br><br><br><hr>Training Videos<br><hr></p></div>
				
				<div id="videolist">
					<p class="videoname">Long Jump</p>  
					<iframe id="video1" style="opacity:0;" width="560" height="420" src="http://www.youtube.com/embed/h7IX6rf6pMA?rel=0" frameborder="0" modestbranding="1" rel="0" allowfullscreen></iframe>
					<br>
					<p class="videoname">Triple Jump</p>
					<iframe id="video2" style="opacity:0;" width="560" height="315" src="http://www.youtube.com/embed/n6_Q563nGh0?rel=0" frameborder="0" allowfullscreen></iframe>
					<br>
					<p class="videoname">High Jump</p>
					<iframe id="video3" style="opacity:0;" width="560" height="315" src="http://www.youtube.com/embed/wnaYlvlgLm8?rel=0" frameborder="0" allowfullscreen></iframe>
					<br>
					<p class="videoname">110m Hurdles</p>
					<iframe id="video4" style="opacity:0;" width="560" height="315" src="http://www.youtube.com/embed/l-TBOgoqClg?rel=0" frameborder="0" allowfullscreen></iframe>
					<br>
					<p class="videoname">Shot Put</p>
					<iframe id="video5" style="opacity:0;" width="560" height="315" src="http://www.youtube.com/embed/XUiVKu-gr_w?rel=0" frameborder="0" allowfullscreen></iframe>
					<br>
				</div> 
				
				</div> 
				<div style="width: 100%; height: 50px;"></div>  
			</div>	 

		</div>
			<script src="javascripts/scripts.js"></script>
		</body>
	</html>