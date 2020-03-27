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
		margin-bottom: 25px;
	}
	
	.row {
		margin-bottom: 20px;
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
	
	.textInput{
        background: #fafafa;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }
	
    .btn{
        background: #d57676;
        border: 1px solid #4d4d4d;
        color: #ffffff;
        padding: 10px;
		width: 100%;
		text-transform: uppercase;
    }
	
    .btn:hover{
        background: #cd5c5c;
    }
	
	.wrapper {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .register-form{
        width: 350px;
        margin: 0 auto;
        border: 5px solid #333;
        padding: 2rem;
        background: #4d4d4d;
    }
	
	.button1{
        background: #69d2e7;
        border: 1px solid #4d4d4d;
        color: #ffffff;
        padding: 10px;
        text-transform: uppercase;
    }
	
    .button1:hover{
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
		<li><a href="https://craypaul.com/">Home</a></li>
		<li><a href="https://craypaul.com/blog">Blog</a></li>
		<li><a href="#filler">Forum</a></li>
		<li><a href="#random">Apps</a></li>
	</ul>
<div class="wrap">
	<div class="header">
			<h2 style = "margin-top:0px; margin-bottom:0px; color:#7bd7ea;">WELCOME</h2>
			<p style = "font-size:17px; color:white; padding-left: 100px; padding-right: 100px; margin-bottom:0px; margin-top:0px;">
				Welcome to My Server!
			</p>
			<p style = "font-size:17px; color:white; padding-left: 100px; padding-right: 100px; margin-bottom:0px; margin-top:0px;">
				Please Login or Register if you are a new member:
			</p>
	</div>
	<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="wrap1">
				<form class="login-form" action="login_confirm.php" method="post">
					<div class="form-header">
						<h3 style = "font-size:30px; margin-top:0px; margin-bottom:0px; color:#7bd7ea;">Login Form</h3>
						<p style = "margin-top:0px">Login to access your dashboard</p>
					</div>
					<!--Username Input-->
					<div>
						<input type="text" class="form-input" placeholder="USERNAME" name="username"></input>
					</div>
					<!--Password Input-->
					<div class="form-group">
						<input type="password" class="form-input" placeholder="PASSWORD" name="password"></input>
					</div>
					<!--Login Button-->
					<div class="form-group">
						<input type="submit" class="form-button" type="submit" value="Login"></input>
					</div>
					<div class="form-footer">
						Don't have an account? <input class="button11" type="button" value="Register" onclick="href='#register'"></input>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="myModal1" class="modal1">
		<div class="modal-content1">
			<span class="close1">&times;</span>
			<div class="wrapper">
				<form method="post" action="register_confirm.php"  name="vform" class="register-form">
					<div class ="form-header">	
						<h3 style="font-size:30px; margin-top:0px; margin-bottom:0px; color:#d57676">Register Form</h3>
						<p style = "margin-top:0px">Register an account to the server</p>
					</div>
					<div id="username_div">
						<input type="text" placeholder="USERNAME" class="textInput" name="username"></input>
						<div id="name_error"></div>
					</div>
					<div id="password_div">
						<input type="password" placeholder="PASSWORD" class="textInput" name="password"></input>
					</div>
					<div id="pass_confirm_div" class="form-group">
						<input type="password" placeholder="CONFIRM PASSWORD" class="textInput" name="password_confirm"></input>
						<div id="password_error"></div>
					</div>
					<div class="form-group">
						<input type="submit" name="register" value="Register" class="btn"></input>
					</div>
					<div class="form-footer">
						Already have an account? <input class="button1" type="button" value="Login" onclick="href='#login'"></input>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class = "row">
			<div class="f-card"><center>
				<div class="p-card"><a href="#login" style="text-decoration:none;">
					<h2 id="myBtn" style = "font-size:50px; margin-top:0px; margin-bottom:0px; color:#d57676; animation:h-2 30s infinite">LOGIN</h2>
				</a></div>
				<div class="p-card"><a href="#register" style="text-decoration:none;">
					<h2 id="myBtn1" style = "font-size:50px; margin-top:0px; margin-bottom:0px; color:#d57676; animation:h-2 30s infinite">REGISTER</h2>
				</a></div>
			</center></div>
	</div>
	<br></br>
	<div class="animated-div">
		
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
