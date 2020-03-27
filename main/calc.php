<?php
require $_SERVER['DOCUMENT_ROOT']."/authentication.php";

?>

<html>
<head>
<title>Calculator</title>
<link rel="shortcut icon" type="image/x-icon" href="https://craypaul.com/myicon.ico"/>
<style>
	body {
		background: #4d4d4d;
		font-family: 'Segoe UI', sans-serif;;
		font-size: 1rem;
		line-height: 1.6;
		height: 100%;
		width: 100%;
		display: table;
		margin: 0;
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
	
	#wrap {
		width: 80%;
		height: 100%;
		float: left;
	}
	
	#wrap-right {
		width: 20%;
		height: 700px;
		float: left;
		postition: relative;
		margin-top: 50px;
		color: white;
		overflow-y: scroll;
		font-size: 20px;
	}
	
	#calculator {
		margin: 0;
		padding: 2rem;
	}	
    
	.in-out {
		background: #fafafa;
		border: 1px solid #eeeeee;
		padding: 20px 20px;
		width: 100%;
		justify-content: center;
		margin-bottom: 5px;
		font-size: 28px;
    	}

	.form-button {  
		background: #69d2e7;
		border: 1px solid #ddd;
		color: #ffffff;
		padding: 32px 16px;
		display: block;
		float: left;
		width: 29%;
		font-size: 22px;
		text-transform: uppercase;
  	}

    	.form-button:hover {
		background: #69c8e7;
    	}

    	.form-button:active {
		background: #24bddb;
    	}

	.form-button1 {  
		background: #69d2e7;
		border: 1px solid #ddd;
		color: #ffffff;
		padding: 32px 16px;
		display: block;
		float: left;
		width: 13%;
		font-size: 22px;
		text-transform: uppercase;
  	}

    	.form-button1:hover {
		background: #69c8e7;
    	}

    	.form-button1:active {
		background: #24bddb;
    	}

    	.form-header {
		margin-bottom: 0.5rem;
		font-size: 30px;
		text-align: center;
		color: #fafafa;
    	}

    	.form-footer {
		text-align: center;
    	}

	.back-button {
		background: #69d2e7;
		border: 1px solid #ddd;
		color: #ffffff;
		padding: 10px;
		margin-top: 30px;
		margin-right: 42%;
		width: 29%;
		display: block;
		float: right;
		font-size: large;
		text-transform: uppercase;
	}
	
    	.back-button:hover{
        	background: #69c8e7;
    	}
    </style>
</head>
<body>
	<ul class= "topnav">
		<li><a href="https://craypaul.com/main/">Home</a></li>
		<li><a href="https://craypaul.com/blog">Blog</a></li>
		<li><a href="#random">Fourm</a></li>
		<li class="app-dropdown">
			<a href="javascript:void(0)" class="dropbutton active">Apps</a>
		    <div class="dropdown-content">
				<a href="/main/calc.php">Calculator</a>
				<a href="#">Filler</a>
			</div>
		</li>
		<li class="dropdown">
			<?php 
			session_start();
			if (isset($_SESSION["username"])) { ?>
			<a href="javascript:void(0)" class="dropbutton"><?php echo "". protect_data($_SESSION["username"]) .""; ?></a>
		    <div class="dropdown-content">
				<a href="#">Account</a>
				<a href="#">Filler</a>
				<a href="https://craypaul.com/logout.php">Logout</a>
			</div>
			<?php 
			} else if (!isset($_SESSION["username"])) { ?>
			<a href="https://craypaul.com/" class="dropbutton" id ="myBtn"><?php echo "	Login	"; } session_destroy();?></a>
		</li>
	</ul>
	<div id="wrap">
		<form id="calculator">
	    		<div class="form-header">
				<h1>Calculator</h1>
	    		</div>
	    		<input type="text" class="in-out" id="result" readonly="">
	    		<br>
	    		<input type="button" class="form-button" value="1" onclick="dis('1')">
			<input type="button" class="form-button" value="2" onclick="dis('2')">
			<input type="button" class="form-button" value="3" onclick="dis('3')">
			<input type="button" class="form-button1" value="+" onclick="dis('+')">
			<br>
			<input type="button" class="form-button" value="4" onclick="dis('4')">
			<input type="button" class="form-button" value="5" onclick="dis('5')">
			<input type="button" class="form-button" value="6" onclick="dis('6')">
			<input type="button" class="form-button1" value="-" onclick="dis('-')">
			<br>
			<input type="button" class="form-button" value="7" onclick="dis('7')">
			<input type="button" class="form-button" value="8" onclick="dis('8')">
			<input type="button" class="form-button" value="9" onclick="dis('9')">
			<input type="button" class="form-button1" value="x" onclick="dis('*')">
			<br>
			<input type="button" class="form-button" value="c" onclick="clr()">
			<input type="button" class="form-button" value="0" onclick="dis('0')">
			<input type="button" class="form-button" value="=" onclick="solve()">
			<input type="button" class="form-button1" value="/" onclick="dis('/')">
			<br>
    			<div class="form-footer">
	        	<br>
				<input type="button" class="back-button" value="BACK TO MAIN" onclick="window.location.href='https://localhost/main/'">
	    		</div>
		</form>
    	</div>
	<div id="wrap-right">
		<h3>History:</h3>
	</div>
</body>
<script>
function dis(val) { 
	document.getElementById("result").value+=val;
} 
           
function solve() { 
	let x = document.getElementById("result").value;
	myFunction();
}

function clr() { 
	document.getElementById("result").value = "" ;
} 

function myFunction() {
	var x = document.getElementById("result").value;
	var y = eval(x);
	var para = document.createElement("P");
	para.innerHTML = x + "=" + y;
	document.getElementById("wrap-right").appendChild(para);
	document.getElementById("result").value = y;
	return 0;
}
</script>
</html>
