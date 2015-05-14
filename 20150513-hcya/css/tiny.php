<?php
    header("Content-type: text/css; charset: UTF-8");
?>

@charset "UTF-8";

html,body {
	margin:0;
	padding:0; 
	height:100%;
}

#loading-div { /*border: 1px solid blue;*/
   width: 624px;
   margin-left: auto;
   margin-right: auto;
   height: 395px;
}

#content {
    display: none;
}
 
#loading { /*border: 1px solid blue;*/
    margin: 0;
    position: absolute;
    top: 50%;
    margin-top: -200px;/* half of #content height*/
    left: 0;
    width: 100%;
    z-index: 1000;
    height: 100%;
    font-family: ROBOTO;
    font-style: italic;
    cursor: wait;
}

#loading img {/* border: 1px solid blue;*/
	width: 100px;
	height: 100px;
	margin-top: 20%;
}

#background img {
	position: fixed;
	z-index: 0;
	left: 0;
	top:0;
	height: 100%;
	width: 100%;
	opacity: 1.0;
}
 
#title { /*border: 1px solid blue;*/
	display: block;
	height: em;
	width: 300px;
	padding-top: .25em;
	padding-left: 1em;
	opacity: 1.0;
	color: white; 
	font-family: Roboto; 
	font-size: 25;
}

#title p {  /*border: 1px solid blue;*/
	padding-top: 0;
	display: block;
	height: 100%;
	font-size: 26.4;
}

#s-fixed-menu { /*border: 1px solid blue;*/
	font-family: roboto;
	position:absolute;
	top:0;
	left:0;
	right:0;
	z-index:0;
	font-size: 25;
	width: 100%;
	height: 2em;
	background-color: black;
	opacity: 0.5;
	text-align: center;
}

#s-title { /*border: 1px solid blue;*/
	display: block;
	position: absolute;
	left: 0;
	z-index: 2;
	color: #FFFFFF;
    color: rgba(255,255,255,1.0);
	font-family: roboto;
	width: 100%;
	text-align: center;
}

#s-title p { /*border: 1px solid blue;*/
	font-family: roboto;
	font-size: 25;
	line-height: 2em;
}

#s-title a {/* border: 1px solid blue;*/
	position: absolute;
	top: .33em;
	right: 0;
	z-index: 2;
	font-family: roboto;
	font-size: 25;
	line-height: 4em;
	padding-right: .6em;
}

#navbar {
	position:fixed;
	top:0;
	left:0;
	right:0;
	z-index: 10000;
}

#navbar-container { /*border: 1px solid blue;*/
	font-size: 25;
	width: 100%;
	height: 2em;
	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	font-family:Roboto;
	box-shadow: 0 0 20px rgba(0,0,0,1.0);
}

#navbar ul {/* border: 1px solid blue;*/
	float:right;
	list-style-type:none;
	margin:0;
	margin-right:1em; 
	padding:0;
	height:2em;
	font-family:Roboto;
	color: white;
	opacity: 1.0; 
	font-weight:400;
	font-size:40;
} 

#navbar li { /*border: 1px solid blue;*/
	display: inline-block;
	opacity: 1.0;
}

#navbar li a { /*border: 1px solid blue;*/
    font-size:25;
    display: block;
    position: relative;
    top: -75px;
   
	line-height: 2em; 
	height: 2em;
	padding: 0 .5em;
	text-decoration:none;
	color:rgba(255,255,255,1.0);
	z-index: 2;
	/*border: 1px solid blue;*/
}
 
.navbar-items-container {
	font-size: 20;
} 

#navbar li a:hover {
	font-size:25;
    display: block;
    position: relative;
    top: -75px;
   
	line-height: 2em;  
	height: 2em;
	padding: 0 .5em;
	text-decoration:none;
	z-index: 2;

	color:rgba(0,0,0,0.9);

	background-color: rgba(255,255,255,0.9);
}
/*
.welcomebox {
	position:absolute;
	top:200;
	bottom:0;
	left:0;
	right:0;
}*/

.welcomebox-container {
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	
	max-width:600px;
	padding:1em;
	padding-bottom:.5em;
	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	text-align:center;
	font-family:Roboto;
	box-shadow: 0 0 20px #000;
}

.welcomebox-container img {
	margin-top: 1em;
	width: 1.5em;
	height: 1em;
	margin-bottom: .25em;
}

.welcomebox-container img:hover {
	opacity: 0.7
} 

#welcomebox-footer {	/*border: 1px solid blue;*/
	position:fixed;
	top:401;
	bottom:0;
	left:0;
	right:0;
}

#welcomebox-footer-container {/* border: 1px solid blue;*/
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	
	max-width:600px;
	height: 0em;

	background: black;
	text-align:center;
	font-family:Roboto;
	overflow: hidden;
	box-shadow: 0 0 20px #000;

}

#welcomebox-footer-container a { /*border: 1px solid blue;*/
	list-style-type: none;
	text-align: center;
}

#welcomebox-footer-container a { /*border: 1px solid blue;*/
	list-style-type: none;
	padding: 0 .5em;
	text-decoration: none;
	color: white;
	line-height: 3em;
	/*border-right: 1px solid white;
	*/
}

#welcomebox-footer-container a:hover	{
	color: white;
	opacity: 0.7;
}

.adminbox {
	position:absolute;
	top:150;
	bottom:0;
	left:0;
	right:0;
	z-index: 2;
}

.adminbox-container {
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	
	max-width:800px;
	padding:1em;
	padding-bottom:.5em;
	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	text-align:center;
	font-family:Roboto;
	box-shadow: 0 0 20px #000;
}

.adminbox-container img {
	margin-top: 1em;
	width: 1.5em;
	height: 1em;
	margin-bottom: .25em;
}

.massEmail {
	color: white;
}

.text-1:hover {
	border-bottom: 1px solid maroon;
	border-top: 1px solid maroon;
}

.adminbox-container img:hover {
	opacity: 0.7
} 


#adminbox-footer {	/*border: 1px solid blue;*/
	position:fixed;
	top:401;
	bottom:0;
	left:0;
	right:0;
}

#adminbox-footer-container {/* border: 1px solid blue;*/
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	
	max-width:800px;
	height: 0em;

	background: black;
	text-align:center;
	font-family:Roboto;
	overflow: hidden;
	box-shadow: 0 0 20px #000;

}

#adminbox-footer-container a { /*border: 1px solid blue;*/
	list-style-type: none;
	text-align: center;
}

#adminbox-footer-container a { /*border: 1px solid blue;*/
	list-style-type: none;
	padding: 0 .5em;
	text-decoration: none;
	color: white;
	line-height: 3em;
	/*border-right: 1px solid white;
	*/
}

#adminbox-footer-container a:hover	{
	color: white;
	opacity: 0.7;
}

.gallerybox {
	position:absolute;
	top:100;
	bottom:0;
	left:0;
	right:0;
}

.gallerybox-container {
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	
	max-width:1200px;
	min-height: 500px;
	padding:1em;
	padding-bottom:.5em;
	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	text-align:center;
	font-family:Roboto;
	box-shadow: 0 0 20px #000;
}

#status-footer {
	position: fixed;
	bottom: 0;
	right: 0;
	left: 0;
	z-index: 100000;
}

#status-footer-container { /*border: 1px solid blue;*/
	width: 100%;
	max-height: 1.7em;
	padding: 0 0 0 1em;
	margin: 0;
	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	text-align: left; 
	box-shadow: 0 0 5px #000;
}

#status-footer-container .status-bar-item { /*border: 1px solid blue;*/
	text-decoration: none;
	color: white;
}

.status-social { padding: 0; }
.status-facebook {border-right: none;}
.status-gmail {}

#status-footer-container a:hover {
	color: white;
	opacity: 0.7;
}

#loginbox, #signupbox {
	position:fixed;
	top:150;
	bottom:0;
	left:0;
	right:0;
	z-index: 2;
}

#loginbox-container, #signupbox-container {
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	/*border-top: 1px solid white;
	border-bottom: 1px solid white;
	border-right: 1px solid white;
	border-left: 1px solid white;*/
	max-width:600px;
	padding:1em;
	padding-bottom:2em;
	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	text-align:center;
	font-family:Roboto;
	position: relative;
	z-index: 2;
	box-shadow: 0 0 20px #000;
/*	border-radius: 4px;*/
}

.submit-btn:hover {
	color: black;
	text-decoration: none;
}

#resourcebox {
	position:absolute;
	top:100;
	bottom:0;
	left:0;
	right:0;
}

#resourcebox-container {
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	max-width:1200px;
	padding:1em;
	padding-bottom:2em;
	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	text-align:center;
	font-family:Roboto;
	box-shadow: 0 0 20px #000;
}

#resourcebox ul {
	text-decoration: none;
	list-style-type:none;
	float: left;
	line-height: 1.25em;
}
 
#mediabox {
	position:absolute;
	top:100;
	bottom:0;
	left:0;
	right:0;
}

#mediabox-container { /*border: 1px solid blue;*/
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	max-width:1000px;
	box-shadow: 0 0 20px #000;
	/*border-top: 1px solid white;
	border-bottom: 1px solid white;*/
	/*border-right: 1px solid white;
	border-left: 1px solid white;*/
	padding:1px;
	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	text-align:center;
	font-family:Roboto;
}
/*
.mediabox2 {
	position:absolute;
	top:620;
	bottom:0;
	left:0;
	right:0;
}*/

.mediabox2-container { /*border: 1px solid blue;*/
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	max-width:1000px;
	min-height: 70px;
	box-shadow: 0 0 20px #000;

	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	text-align:center;
	font-family:Roboto;
}

.videoname {
	font-size: 20;
	color: rgba(255,255,255,1.0);
	/*float:left;*/
}

#joinbox {
	position:fixed;
	top:200;
	bottom:0;
	left:0;
	right:0;
}

#joinbox-container {
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	/*border-top: 1px solid white;
	border-bottom: 1px solid white;
	border-right: 1px solid white;
	border-left: 1px solid white;*/
	max-width:800px;
	padding:1em;
	padding-bottom:2em;
	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	text-align:center;
	font-family:Roboto;
/*	border-radius: 4px;*/
}

#schedulebox {
	position:absolute;
	top:13%;
	bottom:0;
	left:0;
	right:0;
}

#schedulebox-container {
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	
	max-width:1200px;
	height: auto - 1em;
	padding:1em;
	padding-bottom:2em;
	background:rgba(0,0,0,0.5);
	color:#FFFFFF;
	font-family:Roboto;
	border-radius: 8px;
}

.xc-meet { /*border: 1px solid blue;*/
	text-align: center;
	font-size: 25;
	font-style: bold;
	border-right: 3px white inset;
	border-left: 3px white inset;
	border-top: 3px white inset;
	margin-bottom: 0;
	color: white;
}

.xc-meet-date { /*border: 1px solid blue;*/
	text-align: center;
	font-style: italic;
	border-right: 3px white inset;
	border-left: 3px white inset;
	border-bottom: 3px white inset;
	font-size: 15;
	margin-top: 0;
	padding-top: 0;
	color: white;
}

.xc-meet-location {
	font-size: 18;
}

.xc-meet-schedule {
	
}

.xc-meet-link {
	text-align: center;
	text-decoration: none;
	font-style: italic;
}

.xc-meet-map {
	display: block;
	/*border: 1px solid blue;*/
	width: 100%;
}

.xc-meet-map img{
	height: 4em;
	width: 4em;
	position: relative;
	float: right;
}

#quotesbox {
	position:absolute;
	top:100;
	bottom:0;
	left:0;
	right:0;
}

#quotesbox-container {
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	/*border-top: 1px solid white;
	border-bottom: 1px solid white;
	border-right: 1px solid white;
	border-left: 1px solid white;*/
	max-width:1000px;
	padding:1em;
	padding-bottom:2em;
	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	text-align:center;
	font-family:Roboto;
/*	border-radius: 4px;*/
}

#featuredbox {
	position:absolute;
	top:100;
	bottom:0;
	left:0;
	right:0;
}

#featuredbox-container {
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;
	/*border-top: 1px solid white;
	border-bottom: 1px solid white;
	border-right: 1px solid white;
	border-left: 1px solid white;*/
	max-width:1000px;
	max-height: 100%;
	padding:1em;
	padding-bottom:2em;
	background:rgba(0,0,0,0.7);
	color:#FFFFFF;
	text-align:center;
	font-family:Roboto;
/*	border-radius: 4px;*/
}

#previousSlide {
	float: right;
	padding-right: 1em;
	position: relative;
	bottom: 50px;
	z-index: 2;
}

#nextSlide {
	float: left;
	padding-left: 1em;
	position: relative;
	bottom: 50px;
	z-index: 2;
}

#nextSlide, #previousSlide {
	text-align: center;
	text-decoration: none;
	color: white;
}

#nextSlide:hover, #previousSlide:hover {
	text-align: center;
	text-decoration: none;
	color: rgba(255,255,255,.6);
}

#slide	{
	height: auto; 
	max-height: 80%; 
	width: 100%;
}

#social-media {	
	display: block-inline;
	position: fixed;
	top:84%;
	bottom:0;
	left:40%;
	right:auto;
	float: right;
	z-index: 2;
}

#social-media li {
	display: block;
	position: relative;
	top: 0px;
	right: 0px;
	margin-left: auto;
	margin-right: auto;
	padding: 1em;
	margin: 1em;
	float: left;
}

#social-media li a img {
	height: 40px;
	width: 40px;
}

#contactsocial-media {	
	display: block-inline;
	position: fixed;
	top:84%;
	bottom:0;
	left:36.75%;
	right:auto;
	float: right;
	z-index: 2;
}

#contactsocial-media li {
	display: block;
	position: relative;
	top: 0px;
	right: 0px;
	margin-left: auto;
	margin-right: auto;
	padding: 1.5em;
	margin: 1em;
	float: left;
}

#contactsocial-media li a img {
	height: 40px;
	width: 40px;
}

#copyright {
	display: block;
	position: fixed;
	color: white;
	font-size: 12;
	z-index: 2;
	top: 95%;
	left: 29%;
	right: 30%;
}

#contactcopyright {
	display: block;
	position: fixed;
	color: white;
	font-size: 12;
	z-index: 2;
	top: 95%;
	left: 25%;
	right: 30%;
}

#resourceTable {
	margin: auto;
}

#resourceTable, #resourceTable th,#resourceTable td {
	border: 1px solid white;
	text-align: center;
	padding: .5em 1em;
	color: white;
}

.scheduleTable table {
	margin: auto;
}

.scheduleTable table , .scheduleTable th , .scheduleTable td {
	border: 1px solid white;
	text-align: center;
	padding: .25em;
	padding-left: 1em; 
	padding-right: 1em;
	color: white;
}

#social-bar { /*border: 1px solid blue;*/
	position:fixed;
	bottom: 0;
	left: 40%;
	z-index: 100000;
}

#social-bar-container { /*border: 1px solid blue;*/
	margin-left:auto;
	margin-right:auto;
	margin-top: auto;
	margin-bottom: auto;

	max-height:5em;
	padding:1em;
	background:rgba(0,0,0,1.0);
	color:#FFFFFF;
	text-align:center; 
	font-family:Roboto;
	/*border-radius: 10px;*/
}

.bottom-icon { /*border: 1px solid blue;*/
	line-height: 3em;
	height: 3em;
	width: 3em;
	margin: .25em .25em;
}

#login-logo {
	height: 15em;
	width: 15em;
}

input[type=text], input[type=password] {
	color: black;
	padding: .5em 0;
}

input {
	padding: .5em 0;
}

#error-msg {
	color: red;
}

.hover { 
	cursor: pointer; cursor: hand; 
}

.a-text:hover {
	text-decoration: none;
}	


/* * * * * * * * * * * * * * * * * * * * * * * * * * * FLIP * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.flip3D{
	position: relative;
	z-index: 10; 
	display: block;
 }

.flip3D > .front{
	position:absolute; top:200; bottom:0; left:0; right:0; display: block;
	-webkit-transform: perspective( 1000px ) rotateY( 0deg );
	transform: perspective( 1000px ) rotateY( 0deg );
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: -webkit-transform .5s ease-out 0s;
	transition: transform .5s linear 0s;
}
.flip3D > .back{
	position:absolute; top:200; bottom:0; left:0; right:0; display: block;
	-webkit-transform: perspective( 1000px ) rotateY( 180deg );
	transform: perspective( 1000px ) rotateY( 180deg );
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: -webkit-transform .5s ease-out 0s;
	transition: transform .5s linear 0s;
}
.flip3D:hover > .front{
	-webkit-transform: perspective( 1000px ) rotateY( -180deg );
	transform: perspective( 1000px ) rotateY( -180deg );
}
.flip3D:hover > .back{
	-webkit-transform: perspective( 1000px ) rotateY( 0deg );
	transform: perspective( 1000px ) rotateY( 0deg );
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * FLIP 2 * * * * * * * * * * * * * * * * * * * * * * * * * * * */

.flip3D_2{
	position: relative;
	z-index: 10; 
	display: block;
 }

.flip3D_2 > .front_2{
	position:absolute; top:620; bottom:0; left:0; right:0; display: block;
	-webkit-transform: perspective( 2000px ) rotateY( 0deg );
	transform: perspective( 2000px ) rotateY( 0deg );
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: -webkit-transform .5s ease-out 0s;
	transition: transform .5s linear 0s;
}
.flip3D_2 > .back_2{
	position:absolute; top:620; bottom:0; left:0; right:0; display: block;
	-webkit-transform: perspective( 2000px ) rotateY( 180deg );
	transform: perspective( 2000px ) rotateY( 180deg );
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: -webkit-transform .5s ease-out 0s;
	transition: transform .5s linear 0s;
}
.flip3D_2:hover > .front_2{
	-webkit-transform: perspective( 2000px ) rotateY( -180deg );
	transform: perspective( 2000px ) rotateY( -180deg );
}
.flip3D_2:hover > .back_2{
	-webkit-transform: perspective( 2000px ) rotateY( 0deg );
	transform: perspective( 2000px ) rotateY( 0deg );
}
 
