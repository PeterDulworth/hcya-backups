<?php 
    session_start();
    if($_SESSION['logged_in'] !== "YES") {
        header("location:index.php?problem=notLoggedIn");
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
                }, 1000);
            </script>
            <script type="text/javascript">
                function showDiv() {
                    document.getElementById('welcomebox').style.display = "none";
                    document.getElementById('loginbox').style.display = "block";
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

        <!--    <div id="login-signup">
                <p><a id="login" href="login.php">Login</a><p>/</p><a id="signup" href="signup.php">Sign Up</a></p>
            </div> -->

            <div id="welcomebox">
                <div id="welcomebox-container">
                    <div id="welcomebox-text" style="font-size: 70">HCYA LIONS</div>
                    <div id="welcomebox-text2" style="font-size: 20">"I can do all things through Christ who strengthens me"</div>
                    <div id="welcomebox-text3" style="font-size: 15"> ~ Phillipians 4:13</div>
                    <a href="logout.php">Logout</a>
                </div>
            </div>

            <?php include('includes/copyright.php');?>  <!-- * * * * * * * * * * * * * * * * * * * * * * INCLUDE COPYRIGHT * * * * * * * * * * * * * * * * * * * * * * * * -->

            </div> <!-- content -->

        </body>
    
    </html>
     