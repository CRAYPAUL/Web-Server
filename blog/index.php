<?php
require $_SERVER['DOCUMENT_ROOT']."/authentication.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Server Blog</title>
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
		background-color: #262626;
		min-width: 120px;
		z-index: 1;
	}
	
	.dropdown-content a {
		color: white;
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
	
	.app-dropdown:hover .dropdown-content {
		display: block;
	}

	.wrap {
		box-sizing: border-box;
		margin-left: 20px;
		margin-right: 20px;
		animation: start 1s 1;
		-webkit-animation: start 1s 1;
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
		padding-bottom: 10px;
	}
	
	.p-card {
		background-color: #333;
		padding: 20px;
		width: 24.3%;
		display: inline-block;
		margin: 2px;
		transition: background-color 0.5s;
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
		0% {color:#7bd7ea;}
		50% {color:#7bd7ea;}
		75% {color:#d57676;}
		100% {color:#7bd7ea;}
	}
		
	@-webkit-keyframes h-2 {
		0% {color:#7bd7ea;}
		50% {color:#7bd7ea;}
		75% {color:#d57676;}
		100% {color:#7bd7ea;}
	}
	
	.p-card:hover {
		background-color: #1a1a1a;	
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
		background: #4d4d4d;
	}
	
	.links {
		margin-top: 15px;
		display: none;
		width: 100%;
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

	@-webkit-keyframes fadeIn {
		from {opacity: 0} 
		to {opacity: 1}
	}

	@keyframes fadeIn {
		from {opacity: 0} 
		to {opacity: 1}
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
	
	.wrap1 {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
	}
	
    .login-form{
        width: 350px;
        margin: 0 auto;
        border: 5px solid #333;
        padding: 2rem;
        background: #4d4d4d;
    }
	
    .form-input{
        background: #fafafa;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }
	
    .form-group{
        margin-bottom: 1rem;
    }
	
    .form-button{
        background: #69d2e7;
        border: 1px solid #4d4d4d;
        color: #ffffff;
        padding: 10px;
        width: 100%;
        text-transform: uppercase;
    }
	
    .form-button:hover{
        background: #3ac3df;
    }
	
    .form-header{
        text-align: center;
        margin-bottom : 2rem;
		color: white;
    }
	
    .form-footer{
        text-align: center;
		color: white;
    }
	
    .button11{
        background: #d57676;
        border: 1px solid #4d4d4d;
        color: #ffffff;
        padding: 10px;
        text-transform: uppercase;
    }
	
    .button11:hover{
        background: #cd5c5c;
    }

	/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 1150px) {
		.leftcolumn {   
			width: 95%;
			padding: 0;
		}
		
		.rightcolumn {
			width: 5%;
		}
		
		.card {
			display: none;
		}
		
		.links {
			display: block;
			float: right;
		}
		
		.p-card {
			width: 48%;
		}
		
	}
	
	@media screen and (max-width: 600px) {
		.p-card {
			display: block;
			width: 100%;
		}
	}
	
	@media screen and (max-width: 500px) {
		.leftcolumn {   
			width: 100%;
		}
		
		.dropdown, ul.topnav li {
			float: none
		}
		
		.dropdown-content {
			width: 100%;
		}
		
		.row {
			margin-top: 220px;
		}
		
		.links {
			display: none;
		}
	}
</style>
</head>
<body>
	<ul class= "topnav">
		<li><a href="https://craypaul.com/main/">Home</a></li>
		<li><a class="active" href="https://craypaul.com/blog">Blog</a></li>
		<li><a href="#random">Fourm</a></li>
		<li class="app-dropdown">
			<a href="javascript:void(0)" class="dropbutton">Apps</a>
		    <div class="dropdown-content">
				<a href="/main/calc.php">Calculator</a>
				<a href="#">Filler</a>
			</div>
		</li>
		<li class="dropdown">
			<?php 
			if (isset($_SESSION["username"])) { ?>
			<a href="javascript:void(0)" class="dropbutton"><?php echo "". protect_data($_SESSION["username"]) .""; ?></a>
		    <div class="dropdown-content">
				<a href="#">Account</a>
				<a href="#">Filler</a>
				<a href="https://craypaul.com/logout.php">Logout</a>
			</div>
			<?php 
			} else if (!isset($_SESSION["username"])) { ?>
			<a href="#login" class="dropbutton" id ="myBtn"><?php echo "	Login	"; } session_destroy();?></a>
		</li>
	</ul>
<div class="wrap">
	<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="wrap1">
				<form class="login-form" action="/login_confirm.php" method="post">
					<div class="form-header">
						<h3 style = "font-size:30px; margin-top:0px; margin-bottom:0px; color:#7bd7ea;">Login Form</h3>
						<p style = "margin-top:0px">Login to access your dashboard</p>
					</div>
					<!--Username Input-->
					<input type="text" class="form-input" placeholder="USERNAME" name="username">
					<!--Password Input-->
					<div class="form-group">
						<input type="password" class="form-input" placeholder="PASSWORD" name="password">
					</div>
					<!--Login Button-->
					<div class="form-group">
						<input type="submit" class="form-button" type="submit" value="Login">
					</div>
					<div class="form-footer">
						Don't have an account? <input class="button11" type="button" value="Register" onclick="window.location.href='https://craypaul.com/'">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="leftcolumn">
			<div class="header">
			<h2 style = "margin-top:0px; margin-bottom:0px; color:#7bd7ea;">BLOG</h2>
			<p style = "font-size:17px; color:white; padding-left: 100px; padding-right: 100px; margin-bottom:0px;">
				This blog aims to give updates regarding my server, but it will not be limited
				to just construction of the server. Cybersecurity-related subjects and off topic subjects
				will also be added along the way. Cheers!
			</p>
			</div>
			
		</div>
		<div class="rightcolumn">
			<div class="card">
				<h2 style = "margin-top:0px; margin-bottom:0px; color:#7bd7ea; animation:h-2 30s infinite">ABOUT THE PROJECT</h2>
				<p style = "color:white ; margin-top:0px; margin-bottom:10px;"><strong>Welcome to my server! </strong><br>
				   This is still a work in progress, but I'm having fun along the way.</p>
					<img src="https://craypaul.com/image/google_logo.png" alt="OSWP: Try Harder" style="width:10%;">
					<img src="https://craypaul.com/image/twitter_logo.png" alt="OSWP: Try Harder" style="width:10%;">
			</div>
			<div class="links">
					<img src="https://craypaul.com/image/google_logo.png" alt="OSWP: Try Harder" style="width:75%;">
					<img src="https://craypaul.com/image/twitter_logo.png" alt="OSWP: Try Harder" style="width:75%;">
				</div>
		</div>
	</div>
	<div class = "footer">
		<div class="animated-div">
			
		</div>
			<div class="f-card">
				<h2 style = "margin-top:10px; margin-bottom:10px; color:#7bd7ea; font-size: 60px;">POPULAR POSTS</h2>
				<div class="p-card"><a href="#random" style="text-decoration:none;">
					<h2 style = "color: #d57676; margin-top:0px; margin-bottom:0px">OSWP REVIEW</h2>
					<h5 style="color: #d9d9d9; margin-top:0px; margin-bottom:10px">My Journey with WiFu</h5>
					<div>
						<img src="https://craypaul.com/image/OSWP.png" alt="OSWP: Try Harder" class="responsive">
					</div>
					<div class="t-card"><?php
						include $_SERVER['DOCUMENT_ROOT']."/111.txt";
					?>
					</div>
				</a></div>
				<div class="p-card"><a href="#random" style="text-decoration:none;">
					<h2 style = "color: #d57676; margin-top:0px; margin-bottom:0px">OSWP REVIEW</h2>
					<h5 style="color: #d9d9d9; margin-top:0px; margin-bottom:10px">My Journey with WiFu</h5>
					<div>
						<img src="https://craypaul.com/image/OSWP.png" alt="OSWP: Try Harder" class="responsive">
					</div>
					<div class="t-card"><?php
						include $_SERVER['DOCUMENT_ROOT']."/111.txt";
					?>
					</div>
				</a></div>
				<div class="p-card"><a href="#random" style="text-decoration:none;">
					<h2 style = "color: #d57676; margin-top:0px; margin-bottom:0px">OSWP REVIEW</h2>
					<h5 style="color: #d9d9d9; margin-top:0px; margin-bottom:10px">My Journey with WiFu</h5>
					<div>
						<img src="https://craypaul.com/image/OSWP.png" alt="OSWP: Try Harder" class="responsive">
					</div>
					<div class="t-card"><?php
						include $_SERVER['DOCUMENT_ROOT']."/111.txt";
					?>
					</div>
				</a></div>
				<div class="p-card"><a href="#random" style="text-decoration:none;">
					<h2 style = "color: #d57676; margin-top:0px; margin-bottom:0px">OSWP REVIEW</h2>
					<h5 style="color: #d9d9d9; margin-top:0px; margin-bottom:10px">My Journey with WiFu</h5>
					<div>
						<img src="https://craypaul.com/image/OSWP.png" alt="OSWP: Try Harder" class="responsive">
					</div>
					<div class="t-card"><?php
						include $_SERVER['DOCUMENT_ROOT']."/111.txt";
					?>
					</div>
				</a></div>
			</div>
	</div>
</div>
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
 
btn.onclick = function() {
	modal.style.display = "block";
}

span.onclick = function() {
	modal.style.display = "none";
}


window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
		}
}
</script>
</body>
</html>