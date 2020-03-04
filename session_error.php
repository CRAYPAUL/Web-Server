<html> 
<head>
	<title>Server Error</title>
	<link rel="shortcut icon" type="image/x-icon" href="https://craypaul.com/myicon.ico"/>
<script>
	window.onload = function() { 
	setInterval(function() {window.location.href='https://craypaul.com/';}, 1500); };
</script>
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
	<div class="body-body">
		<h1 style="font-size:50px; color:#7bd7ea; margin-bottom:0px">PLEASE LOGIN FOR ACCESS</h1>
		<h3 style="font-size:20px"><?php 
			echo "You need to login to access this URL." 
		?></h3>
	</div>
</body> 
</html>