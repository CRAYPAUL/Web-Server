<?php
require $_SERVER['DOCUMENT_ROOT']."/authentication.php";
session_authentication();
?>

<html>
<head>
<title>Server Main Menu</title>
<link rel="shortcut icon" type="image/x-icon" href="https://craypaul.com/myicon.ico"/>
<style>
	*{
		margin:0;
		padding: 0;
		box-sizing: border-box;
	}

	html {
		height: 100%;
	}

	body {
		font-family: 'Segoe UI', sans-serif;;
		font-size: 1rem;
		line-height: 1.6;
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
	
	.wrap {
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		background: #4d4d4d;
	}

	.main-form {
		width: 45%;
		margin: 0 auto;
		padding: 2rem;
		background: #333;
		color: white;
	}

	.form-button {
		background: #69d2e7;
		border: 1px solid #333;
		display: block;
		color: #ffffff;
		padding: 22px 10px;
		width: 100%;
		font-size: 20px;
		text-transform: uppercase;
		transition: background-color 0.5s, width 0.5s;
	}
	
	.form-button:hover {
		background: #d57676;
		width: 65%;
	}

	.form-header {
		text-align: center;
		margin-bottom: 0.5rem;
	}

	.form-footer {
		text-align: center;
	}

	.back-button {
		background: #d57676;
		border: 1px solid #333;
		color: #ffffff;
		padding: 10px;
		margin-top: 0.5rem;
		width: 30%;
		font-size: 15px;
		text-transform: uppercase;
		transition: background-color 0.5s;
	}

	.back-button:hover {
		background: #c33c3c;
	}
	
	@media screen and (max-width: 840px) {
		.main-form {
			width: 90%; 
		}
	}
	@media screen and (max-width: 400px) {
		.dropdown, ul.topnav li {
			float: none;
		}
		.main-form {
			width: 100%; 
		}
	}
    </style>
</head>
<body>
	<ul class= "topnav">
		<li><a class="active" href="https://craypaul.com/main/">Home</a></li>
		<li><a href="https://craypaul.com/blog">Blog</a></li>
		<li><a href="#random">Fourm</a></li>
		<li><a href="#filler">Apps</a></li>
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
			<a href="#login" class="dropbutton" id ="myBtn"><?php echo "	Login	"; }?></a>
		</li>
	</ul>
	<div class="wrap">
		<form method="get" class="main-form">
			<div class="form-header">
				<h3 style="font-size:40px">WELCOME BACK</h3>
				<p><?php echo "Hello, ". protect_data($_SESSION['username']) ."!" ?></p>
				<p>Navigate To Applications:</p>
	    		</div>
			<input type="button" class="form-button" value="Calculator" onclick="window.location.href='calc.php'">
			<input type="button" class="form-button" value="BLOG" onclick="window.location.href='https://craypaul.com/blog/'">
			<input type="button" class="form-button" value="SETTINGS" onclick="window.location.href=''">
	    		<div class="form-footer">
				Once you are done:<br>
				<input type="button" class="back-button" value="LOGOUT" onclick="window.location.href='https://craypaul.com/logout.php'">
	   		 </div>
		</form>
   	 </div> <!--/.wrap-->
</body>
</html>
