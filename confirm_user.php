<?php
require $_SERVER['DOCUMENT_ROOT']."/authentication.php";
require $_SERVER['DOCUMENT_ROOT']."/config.php";
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Server Home</title>
<link rel="shortcut icon" type="image/x-icon" href="https://craypaul.com/myicon.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	*{
		box-sizing: border-box;
	}

	/* Add a gray background color with padding */
	body {
		font-family: 'Segoe UI', sans-serif;;
		background: #4d4d4d;
		font-size: 1rem;
        	line-height: 1.6;
		padding: 0;
		margin: 0;
		height: 100%;
		overflow-x: hidden;
		
	}
	
	ul.topnav {
		list-style-type: none;
		margin: 0;
		padding: 0;
		background-color: #333;
		position: fixed;
		top: 0;
		width: 100%;
	}

	li {
		float: left;
		width: auto;
	}

	li a, .dropbutton {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover:not(.active) {
		background-color: #111;
	}
	
	.active:hover {
		background: #69c8e7;
	}

	.active {
		background: #69d2e7;
	}
	
	.dropdown {
		float: right;
		padding-right: 1px;
	}
	
	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 90px;
		z-index: 1;
		border: 1px solid #ddd;
	}
	
	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		text-align: right;
	}
	
	.dropdown-content a:hover {
		background-color: #f1f1f1;
	}
	
	.dropdown:hover .dropdown-content {
		display: block;
	}



	.wrap {
		box-sizing: border-box;
		margin-left: 20px;
		margin-right: 20px;
		animation: start 1.5s 1;
		-webkit-animation: start 1.5s 1;
		border-radius: 5px;
		-webkit-border-radius: 5px;
		
	}
	
	@keyframes start {
		0% {opacity: 0}
		100% {opacity: 1}
	}
		
	@-webkit-keyframes start {
		0% {opacity: 0}
		100% {opacity: 1}
	}


	/* Header and Blog Title */
	.header {
		padding: 10px;
		font-size: 70px;
		text-align: center;
		margin-top: 25px;
		margin-bottom: 25px;
	}
	
	.row {
		margin-bottom: 20px;
	}

	/* Create two unequal columns that floats next to each other */
	/* Left column */
	.leftcolumn {   
		float: left;
		width: 70%;
	}

	/* Right column */
	.rightcolumn {
		margin-top: 50px; 
		float: left;
		width: 30%;
		
	}
	
	.responsive {
		max-width: 100%;
		height: auto;
	}

	/* Fake image */
	.fakeimg {
		background-color: #aaa;
		width: 100%;
		padding: 20px;
	}
	
	.popular {
		background-color: white;
		width: 100%;
	}
	
	.popular:hover {
		width: 75%
	}

	/* Add a card effect for articles */
	.card {
		background-color: #333;
		padding: 20px;
		margin-top: 20px;
		transition: background-color 0.5s
	}

	.card:hover {
		background-color: #1a1a1a;	
	}
	
	.f-card {
		background-color: #4d4d4d;
		padding-bottom: 20px;
	}
	
	.p-card {
		background-color: #333;
		padding: 20px;
		width: 40%;
		display: block;
		margin: 10px;
		transition: background-color 0.5s, width 0.5s;
	}
	
	.t-card {
		color: #d9d9d9;
		overflow: hidden;
	}
	
	.a-card {
		background-color: #333;
		padding: 20px;
		border: 1px solid #ddd;
		display: inline-block;
		width: 24.5%;
		
	}
	.a-card:hover {
		background-color: #333;
		padding: 20px;
		border: 1px solid #ddd;
		display: inline-block;
		width: 24.5%;
		
	}
	
	.animated-div {
		width: 70px;
		height: 47px;
		background: #7bd7ea;
		position: relative;
		font-weight: bold;
		font-size: 20px;
		padding: 10px;
		animation: example 15s infinite;
		-webkit-animation: example 15s infinite;
		border-radius: 5px;
		-webkit-border-radius: 5px;
		overflow: hidden;

	}
	
	@keyframes example {
		0% {transform: rotate(0deg);left:0%;background:#7bd7ea;width:70px;}
		25% {width:20px;}
		50% {transform: rotate(360deg);left:95.2%;background:#d57676;width:70px;}
		75% {width:20px;}
		100% {transform: rotate(0deg);left:0%;background:#7bd7ea;width:70px;}
	}
		
	@-webkit-keyframes example {
		0% {transform: rotate(0deg);left:0%;background:#7bd7ea;width:70px;}
		25% {width:20px;}
		50% {transform: rotate(360deg);left:95.2%;background:#d57676;width:70px;}
		75% {width:20px;}
		100% {transform: rotate(0deg);left:0%;background:#7bd7ea;width:70px;}
	}
	
	@keyframes h-2 {
		0% {color:#d57676;}
		50% {color:#d57676;}
		75% {color:#7bd7ea;}
		100% {color:#d57676;}
	}
		
	@-webkit-keyframes h-2 {
		0% {color:#d57676;}
		50% {color:#d57676;}
		75% {color:#7bd7ea;}
		100% {color:#d57676;}
	}
	
	.p-card:hover {
		background-color: #1a1a1a;
		width: 60%;
	}

	/* Clear floats after the columns */
	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	/* Footer */
	.footer {
		margin-top: 20px;
		text-align: center;
		background: #333;
	}
	
	.modal {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		-webkit-animation-name: fadeIn; /* Fade in the background */
		-webkit-animation-duration: 0.4s;
		animation-name: fadeIn;
		animation-duration: 0.4s
	}
	
	.modal1 {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		-webkit-animation-name: fadeIn1; /* Fade in the background */
		-webkit-animation-duration: 0.4s;
		animation-name: fadeIn1;
		animation-duration: 0.4s
	}

	/* Modal Content */
	.modal-content {
		position: fixed;
		bottom: 25%;
		width: 100%;
		-webkit-animation-name: slideIn;
		-webkit-animation-duration: 0.4s;
		animation-name: slideIn;
		animation-duration: 0.4s
	}
	
	/* Modal Content */
	.modal-content1 {
		position: fixed;
		bottom: 25%;
		width: 100%;
		-webkit-animation-name: slideIn1;
		-webkit-animation-duration: 0.4s;
		animation-name: slideIn1;
		animation-duration: 0.4s
	}

	/* The Close Button */
	.close {
		color: white;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close:hover,.close:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}
	
	.close1 {
		color: white;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close1:hover,.close1:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}

	/* Add Animation */
	@-webkit-keyframes slideIn {
		from {bottom: -300px; opacity: 0} 
		to {bottom: 25%; opacity: 1}
	}

	@keyframes slideIn {
		from {bottom: -300px; opacity: 0}
		to {bottom: 25%; opacity: 1}
	}

	@-webkit-keyframes fadeIn {
		from {opacity: 0} 
		to {opacity: 1}
	}

	@keyframes fadeIn {
		from {opacity: 0} 
		to {opacity: 1}
	}
	
	/* Add Animation */
	@-webkit-keyframes slideIn1 {
		from {bottom: -300px; opacity: 0} 
		to {bottom: 25%; opacity: 1}
	}

	@keyframes slideIn1 {
		from {bottom: -300px; opacity: 0}
		to {bottom: 25%; opacity: 1}
	}

	@-webkit-keyframes fadeIn1 {
		from {opacity: 0} 
		to {opacity: 1}
	}

	@keyframes fadeIn1 {
		from {opacity: 0} 
		to {opacity: 1}
	}
	
	.wrap1 {
        	width: 100%;
        	height: 100%;
        	display: flex;
        	justify-content: center;
        	align-items: center;
	}
	
	.login-form {
        	width: 350px;
        	margin: 0 auto;
        	border: 5px solid #333;
        	padding: 2rem;
        	background: #4d4d4d;
    	}
	
    	.form-input {
        	background: #fafafa;
        	border: 1px solid #eeeeee;
        	padding: 12px;
        	width: 100%;
    	}
	
    	.form-group {
        	margin-bottom: 1rem;
    	}
	
    	.form-button {
        	background: #69d2e7;
        	border: 1px solid #4d4d4d;
        	color: #ffffff;
        	padding: 10px;
        	width: 100%;
        	text-transform: uppercase;
    	}
	
    	.form-button:hover {
        	background: #3ac3df;
    	}
	
    	.form-header {
        	text-align: center;
        	margin-bottom: 2rem;
		color: white;
	}
	
    	.form-footer {
       		text-align: center;
		color: white;
    	}
	
    	.button11 {
        	background: #d57676;
        	border: 1px solid #4d4d4d;
        	color: #ffffff;
        	padding: 10px;
        	text-transform: uppercase;
    	}
	
    	.button11:hover {
        	background: #cd5c5c;
    	}
	
    	.textInput {
        	background: #fafafa;
        	border: 1px solid #eeeeee;
        	padding: 12px;
        	width: 100%;
    	}
	
    	.btn {
       		background: #d57676;
        	border: 1px solid #4d4d4d;
        	color: #ffffff;
        	padding: 10px;
		width: 100%;
		text-transform: uppercase;
    	}
	
    	.btn:hover {
        	background: #cd5c5c;
    	}
	
	.wrapper {
        	width: 100%;
        	height: 100%;
        	display: flex;
        	justify-content: center;
        	align-items: center;
    	}
	
    	.register-form {
        	width: 350px;
        	margin: 0 auto;
        	border: 5px solid #333;
        	padding: 2rem;
        	background: #4d4d4d;
    	}
	
	.button1 {
        	background: #69d2e7;
        	border: 1px solid #4d4d4d;
        	color: #ffffff;
        	padding: 10px;
        	text-transform: uppercase;
    	}
	
    	.button1:hover {
        	background: #3ac3df;
    	}

	/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 1150px) {
		.leftcolumn, .rightcolumn {   
			width: 100%;
			padding: 0;
		}
		
		.rightcolumn {
			display: none;
		}
	}
	
	@media screen and (max-width: 1050px) {
		.p-card {
			width: 90%;
			
		}
	}
	
	@media screen and (max-width: 400px) {
		.dropdown, ul.topnav li {
			float: none
		}
	}
</style>
</head>
<body>
	<ul class= "topnav">
		<li><a class="active" href="https://craypaul.com/">Home</a></li>
		<li><a href="https://craypaul.com/blog">Blog</a></li>
	</ul>
<div class="wrap">
	<div class="leftcolumn">
	
	</div>
	<div class="middlecolumn">
	
	</div>
	<div class="rightcolumn">
	
	</div>
</div>
<script>
// Get the login form
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
var register = document.getElementsByClassName("button1")[0];
 
btn.onclick = function() {
	modal.style.display = "block";
}

span.onclick = function() {
	modal.style.display = "none";
}

register.onclick = function() {
	modal1.style.display = "none";
	modal.style.display = "block";
}

window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
		}
		
	else if (event.target == modal1) {
		modal1.style.display = "none";
	}
}

// Get the register form
var modal1 = document.getElementById("myModal1");
var btn1 = document.getElementById("myBtn1");
var span = document.getElementsByClassName("close1")[0];
var login = document.getElementsByClassName("button11")[0];
 
btn1.onclick = function() {
	modal1.style.display = "block";
}

span.onclick = function() {
	modal1.style.display = "none";
}

login.onclick = function() {
	modal.style.display = "none";
	modal1.style.display = "block";
}
</script>
</body>
</html>
