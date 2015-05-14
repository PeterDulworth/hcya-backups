<?php 
	session_start(); 
	$problem = $_GET['problem'];
	if($problem == "")
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

			<?php include('includes/favicons.php');?>  <!-- * * * * * * * * * * * * * * * * * * * * * INCLUDE FAVICONS * * * * * * * * * * * * * * * * * * * * * * * -->
        		
			<script src="sliderengine/jquery.js"></script>
		    <script src="sliderengine/amazingslider.js"></script>
		    <script src="sliderengine/initslider-1.js"></script>

		</head>
 
	<!-- * * * * * * * * LOADING PAGE * * * * * * * *  -->
		<body id="homebody" onLoad="preloader()">
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
			
			<div id="background"><img src="http://puu.sh/9sGWq/733fc082fb.jpg" /></div>

			<?php include('includes/navbar.php');?> <!-- * * * * * * * * * * * * * * * * * * * * * INCLUDE NAVBAR * * * * * * * * * * * * * * * * * * * * * * * -->
 	<!-- * * * * * * * * * MEDIABOX1 * * * * * * * * *  -->
			<div id="mediabox" style="display:block">
				<div id="mediabox-container">
					<!-- <div class="resourcebox-text" id="resourcebox-text" style="font-size: 70">Gallery<hr></div> -->
				
					<div style="margin:0 auto -10px auto;max-width:950px;">  
					    <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 32px;">
					        <ul class="amazingslider-slides" style="display:none;">
					            <li><a href="images/465220_10151561540724114_264671468_o-lightbox.jpg" class="html5lightbox"><img src="images/465220_10151561540724114_264671468_o.jpg" alt="Abby and Colby winning state MVP." /></a></li>
					            <li><a href="images/473270_10151560676789114_956254956_o-lightbox.jpg" class="html5lightbox"><img src="images/473270_10151560676789114_956254956_o.jpg" alt="Kristie, Abby, Karis and Amanda."/></a></li>
					            <li><a href="images/903819_10151524972314114_164882098_o-lightbox.jpg" class="html5lightbox"><img src="images/903819_10151524972314114_164882098_o.jpg" alt="Prayer before practice."/></a></li>
					            <li><a href="images/904683_10151561540234114_654519235_o-lightbox.jpg" class="html5lightbox"><img src="images/904683_10151561540234114_654519235_o.jpg" /></a></li>
					            <li><a href="images/905618_10151524968874114_377930431_o-lightbox.jpg" class="html5lightbox"><img src="images/905618_10151524968874114_377930431_o.jpg" /></a></li>
					            <li><a href="images/905640_10151524963504114_1343245515_o-lightbox.jpg" class="html5lightbox"><img src="images/905640_10151524963504114_1343245515_o.jpg" /></a></li>
					            <li><a href="images/921446_10151561540739114_496677417_o-lightbox.jpg" class="html5lightbox"><img src="images/921446_10151561540739114_496677417_o.jpg" /></a></li>
					            <li><a href="images/1397806_194021990783658_485335222_o-1-lightbox.jpg" class="html5lightbox"><img src="images/1397806_194021990783658_485335222_o-1.jpg" /></a></li>
					        </ul>
					        <ul class="amazingslider-thumbnails" style="display:none;">
					            <li><img src="images/465220_10151561540724114_264671468_o-tn.jpg" /></li>
					            <li><img src="images/473270_10151560676789114_956254956_o-tn.jpg" /></li>					     
					            <li><img src="images/903819_10151524972314114_164882098_o-tn.jpg" /></li>
					            <li><img src="images/904683_10151561540234114_654519235_o-tn.jpg" /></li>
					            <li><img src="images/905618_10151524968874114_377930431_o-tn.jpg" /></li>
					            <li><img src="images/905640_10151524963504114_1343245515_o-tn.jpg" /></li>
					            <li><img src="images/921446_10151561540739114_496677417_o-tn.jpg" /></li>
					            <li><img src="images/1397806_194021990783658_485335222_o-1-tn.jpg" /></li>
					        </ul>
					        <div class="amazingslider-engine" style="display:none;"><a href="http://amazingslider.com" title="Responsive JavaScript Image Slideshow">Responsive JavaScript Image Slideshow</a></div>
					    </div> <!-- amazing slider -->
					</div> <!-- slider container --> 
				</div>  <!-- resource container -->
			</div>	<!-- resource box -->
	<!-- * * * * * * * * * MEDIABOX2 * * * * * * * * *  -->
			<div class="flip3D_2" id="flip3D_2" style="display:block">
				<div class="front_2" >
					<div class="mediabox2" style="display:block">
						<div class="mediabox2-container">
							<span style="font-size:50; line-height: 70px; border-bottom: 1px solid white;">HCYA LIONS</span><br>
							<span style="font-size: 20; line-height: 1em;"><i><b>H</b>ouston <b>C</b>hristian <b>Y</b>outh <b>A</b>ssociation </i></span>
						</div>
					</div>
				</div> <!-- end front_2 -->
				<div class="back_2">
					<div class="mediabox2" style="display:block">
						<div class="mediabox2-container">
							<div class="text" style="font-size: 30; line-height: 2em;">I can do all things through Christ who strengthens me</div>
							<div class="text" style="font-size: 20"><i> ~ Philippians 4:13</i></div>
						</div>
					</div>
				</div> <!-- end back_2 -->
			</div> <!-- end flip3D_2 -->

			<?php include('includes/statusbar.php');?>
			</div>
			<script src="javascripts/scripts.js"></script> 
		</body> 
	</html>