<html> 
<head>
<title>Success!</title>
<link rel="shortcut icon" type="image/x-icon" href="https://craypaul.com/myicon.ico"/>
<style>
	body {
		font-family: 'Segoe UI', sans-serif;;
		background: #4d4d4d;
		font-size: 1rem;
        line-height: 1.6;
		padding: 0;
		margin: 0;
		height: 100%;
		overflow: hidden;
		
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
	
	.body-body {
		color: white;
		text-align: center;
		margin-top: 60px;
	}
</style>
</head>
<body>
	<ul class= "topnav">
		<li><a>_</a></li>
	</ul>
</head> 
<body> 
	<div class="body-body"><?php
		require $_SERVER['DOCUMENT_ROOT']."/authentication.php";
		require $_SERVER['DOCUMENT_ROOT']."/config.php";
		session_start();
		
		echo "<h3 style=color:#7bd7ea>Login Successful!</h3>";
		echo "<p>Redirecting over to main menu...</p>";
		sleep(3);
		permission_level($db);
	?></div>
</body> 
</html>