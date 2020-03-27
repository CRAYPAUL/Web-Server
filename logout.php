<?php
require $_SERVER['DOCUMENT_ROOT']."/authentication.php";
session_start( );
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
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
		text-align: center;
		margin-top: 25px;
		margin-bottom: 25px;
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
		<li><a>____</a></li>
	</ul>
<div class="wrap">
	<div class="header">
		<h2 style = "font-size:40px; color:#7bd7ea;">Logout Successful!</h2>
		<p style = "font-size:17px; color:white; padding-left: 100px; padding-right: 100px; margin-bottom:0px; margin-top:0px;"><?php 
			if (isset($_SESSION["username"]))
			echo "Thank you ".protect_data($_SESSION["username"]) ." for using the Application.";
		?></p>
		<p style = "font-size:17px; color:white; padding-left: 100px; padding-right: 100px; margin-bottom:0px; margin-top:0px;">Redirecting over to main menu...</p> 
		<?php 
			session_destroy( );
		?>
	</div>
</div>
</body>
<script>
	window.onload = function() { 
	setInterval(function() {window.location.href='https://craypaul.com/';}, 1500); };
</script>
</html>
