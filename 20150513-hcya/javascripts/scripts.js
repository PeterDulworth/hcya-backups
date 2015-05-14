setTimeout(function preloader()    {
    	document.getElementById("loading").style.display = "none";
    	document.getElementById("content").style.display = "block";
		}, 1000);

function showDiv() { 
	document.getElementById('mediabox').style.display = "none"; 
	document.getElementById('flip3D').style.display = "none"; 
	document.getElementById('signupbox').style.display = "none";
	document.getElementById('welcomebox-footer').style.display = "none";
	document.getElementById('loginbox').style.display = "block";
}

function showDiv2() {
	document.getElementById('mediabox').style.display = "none"; 
	document.getElementById('flip3D').style.display = "none";
	document.getElementById('loginbox').style.display = "none";
	document.getElementById('welcomebox-footer').style.display = "none";
	document.getElementById('signupbox').style.display = "block";
}

function showAdminDiv(div) {
	document.getElementById('emailUsers').style.display = "none";
	document.getElementById('manageUsers').style.display = "none";
	document.getElementById('manageGallery').style.display = "none";
	document.getElementById('websiteOptions').style.display = "none";
	document.getElementById(div).style.display = "block";
}

function redirect() {
	window.location.assign("http://www.nickdulworth.com/p/d/admin_view.php");
}   

function showEl(el) { 
	document.getElementById('flip3D').style.display = "none";
	document.getElementById('mediabox').style.display = "none";
	document.getElementById('loginbox').style.display = "none";
	document.getElementById('welcomebox-footer').style.display = "none";
	document.getElementById(el).style.display = "block";
} 

function showMenu() {
    document.getElementById('social-bar').style.display = "block";
}

function toggle_visibility(id) {
   	var e = document.getElementById(id);
   	if(e.style.display == 'block')
      	e.style.display = 'none';
  	else
      	e.style.display = 'block';
}

function toggle_visibility_slide(id) {
   	var e = document.getElementById(id);
   	if(e.style.height == '3em') {
		e.style.transition = "height 0.1s linear 0s";
		e.style.height = "0em";	

   	}
  	else {
		e.style.transition = "height 0.1s linear 0s";
		e.style.height = "3em";
    }
} 

function fadeOut(el){
	var elem = document.getElementById(el);
	elem.style.transition = "opacity 0.5s linear 0s";
	elem.style.opacity = 0;
}
function fadeIn(el){
	var elem = document.getElementById(el);
	elem.style.transition = "opacity 2.0s linear 0s";
	elem.style.opacity = 1.0;
}

// function yHandler(){
// 	var wrap = document.getElementById('wrap');  			// creates javascript object wrap (initial content)
// 	var contentHeight = wrap.offsetHeight;					// sets var contentHeight = the height in px of wrap
// 	var yOffset = window.pageYOffset; 						// sets var yOffset = amount in px that has been scrolled
// 	var y = yOffset + window.innerHeight;					// sets var y = px scrolled + px of wrap div
// 	if(y >= contentHeight){									// if (amount scrolled + amount on page) >= total div height 
// 		wrap.innerHTML += '<div class="newData"></div>';	// then show new div
// 	}	
// 	var status = document.getElementById('status');			// creates javascript object status (counters)
// 	status.innerHTML = contentHeight + " | " + y;			// code to update counter vars onscreen
// }
//window.onscroll = yHandler; 								// whenever you scroll the function YHANDLER is run.

// var i = 1;
// function scroll() {
// 	var yOffset = window.pageYOffset; 						// sets var yOffset = amount in px that has been scrolled
// 	if(yOffset > 1200) {
// 		if(i < 2) {
// 			alert('1000');
// 			fadeIn('video1');
// 			i++; 
// 		}
// 	}
// }
// window.onscroll = scroll;

function scroll() {
	var yOffset = window.pageYOffset; 						// sets var yOffset = amount in px that has been scrolled
	if(yOffset > 1100) {
		fadeIn('video1');
	}
	if(yOffset > 1500) {
		fadeIn('video2');
	}
	if(yOffset > 1800) {
		fadeIn('video3');
	}
	if(yOffset > 2200) {
		fadeIn('video4');
	}
	if(yOffset > 2600) {
		fadeIn('video5');
	}
}
window.onscroll = scroll;


// x = document.body.scrollTop();
// if(x > 0) {
// 	window.location="/index.php?scroll=true/"
// }

// if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent))	{
// 	window.location ="/m/";
// }
// 	<script type="text/javascript"> 
// if(<?php session_start(); if($_SESSION['logged_in'] == "YES") {print('true');}?> ) {
// 		alert('You have already logged in!');
// 	}
// <script>
