<?php
require $_SERVER['DOCUMENT_ROOT']."/authentication.php";
require $_SERVER['DOCUMENT_ROOT']."/config.php";
session_start();

session_authentication();
admin_authentication($db);
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
    html{
        height: 100%;
    }
    body{
        font-family: 'Segoe UI', sans-serif;;
        font-size: 1rem;
        line-height: 1.6;
        height: 100%;
    }
    .wrap {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fafafa;
    }
    .main-form{
        width: 350px;
        margin: 0 auto;
        border: 1px solid #ddd;
        padding: 2rem;
        background: #ffffff;
    }
    .form-button{
        background: #69d2e7;
        border: 1px solid #ddd;
	float: left;
        color: #ffffff;
        padding: 22px 10px;
        width: 50%;
        text-transform: uppercase;
    }
    .form-button:hover{
        background: #69c8e7;
    }
    .form-header{
        text-align: center;
        margin-bottom : 0.5rem;
    }
    .form-footer{
        text-align: center;
    }
    .back-button{
        background: #69d2e7;
        border: 1px solid #ddd;
        color: #ffffff;
        padding: 10px;
	margin-top: 0.5rem;
        width: 30%;
        text-transform: uppercase;
    }
    .back-button:hover{
        background: #69c8e7;
    }
    </style>
</head>
<body>
    <div class="wrap">
	<form method="get" class="main-form">
	    <div class="form-header">
		<h3>WELCOME BACK</h3>
		<p><?php echo "Admin ". protect_data($_SESSION['username']) .", use the different menus to configure the server" ?></p>
		<br>
		<p><strong>Navigate To Applications:</strong></p>
	    </div>
		<input type="button" class="form-button" value="phpMyAdmin" onclick="window.location.href='https://craypaul.com/phpmyadmin'">
		<input type="button" class="form-button" value="BLOG" onclick="window.location.href='https://craypaul.com/blog'">
	    <div class="form-footer">
		Once you are done:<br>
		<input type="button" class="back-button" value="LOGOUT" onclick="window.location.href='https://craypaul.com/logout.php'">
	    </div>
	</form>
    </div> <!--/.wrap-->
</body>
</html>