<!DOCTYPE html>
<html>
<head>
<title>Confirming...</title>
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
		color: #333;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.wrap {
		box-sizing: border-box;
		margin-left: 20px;
		margin-right: 20px;
	}

	/* Header and Blog Title */
	.header {
		padding: 10px;
		font-size: 70px;
		text-align: center;
		margin-top: 25px;
		margin-bottom: 25px;
	}
	
	.animated-div {
		width: 30px;
		height: 30px;
		background: #7bd7ea;
		position: relative;
		animation: example 2s infinite;
		-webkit-animation: example 2s infinite;
		-webkit-border-radius: 25px;
		border-radius: 25px;
		overflow: hidden;

	}
	
	.animated-div1 {
		width: 30px;
		height: 30px;
		background: #7bd7ea;
		position: relative;
		animation: example1 2s infinite;
		-webkit-animation: example1 2s infinite;
		-webkit-border-radius: 25px;
		border-radius: 25px;
		overflow: hidden;

	}
	
	.animated-div2 {
		width: 30px;
		height: 30px;
		background: #7bd7ea;
		position: relative;
		animation: example2 2s infinite;
		-webkit-animation: example2 2s infinite;
		-webkit-border-radius: 25px;
		border-radius: 25px;
		overflow: hidden;

	}
	
	@keyframes example {
		0% {left:47%;top:70px;}
		25% {top:100px;}
		50% {left:47%;top:70px;}
		75% {left:47%;top:70px;}
		100% {left:47%;top:70px;}
	}
		
	@-webkit-keyframes example {
		0% {left:47%;top:70px;}
		25% {top:100px;}
		50% {left:47%;top:70px;}
		75% {left:47%;top:70px;}
		100% {left:47%;top:70px;}
	}
	
	@keyframes example1 {
		0% {left:50%;top:40px;}
		25% {left:50%;top:40px;}
		50% {top:70px;}
		75% {left:50%;top:40px;}
		100% {left:50%;top:40px;}
	}
		
	@-webkit-keyframes example1 {
		0% {left:50%;top:40px;}
		25% {left:50%;top:40px;}
		50% {top:70px;}
		75% {left:50%;top:40px;}
		100% {left:50%;top:40px;}
	}
	
	@keyframes example2 {
		0% {left:53%;top:10px;}
		25% {left:53%;top:10px;}
		50% {left:53%;top:10px;}
		75% {top:40px;}
		100% {left:53%;top:10px;}
	}
		
	@-webkit-keyframes example2 {
		0% {left:53%;top:10px;}
		25% {left:53%;top:10px;}
		50% {left:53%;top:10px;}
		75% {top:40px;}
		100% {left:53%;top:10px;}
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
		<li><a>_</a></li>
	</ul>
<div class="wrap">
	<div class="header">
			<div class="animated-div">
			
			</div>
			<div class="animated-div1">
			
			</div>
			<div class="animated-div2">
			
			</div>
	</div>
</div>
</body>
<?php
require 'authentication.php';
require 'config.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = protect_data($_POST['username']);
	$password = protect_data($_POST['password']);
	
	if(!empty($username) && !empty($password)) {
		if(user_authentication($db, $username, $password) == TRUE) {
			$_SESSION['username'] = $username;
			$_SESSION['loginIP'] = $_SERVER['REMOTE_ADDR'];
			echo "<script> window.location.replace('login_success.php') </script>";
		}
		else {
			echo "<script> window.location.replace('https://localhost') </script>";
		}
	}
	else {
		echo "<script type='text/javascript'>alert('Please fill out all the forms.');</script>";
		echo "<script> window.location.replace('https://localhost') </script>";
	}
}
?>
</html>
