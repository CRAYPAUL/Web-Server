<!doctype html> 
<html> 
<head>
	<title>Access Denied</title>
	<link rel="shortcut icon" type="image/x-icon" href="https://craypaul.com/myicon.ico"/>
    <script>
	window.onload = function() { 
	    setInterval(function() {window.location.href='logout.php';}, 1500); };
    </script>
</head> 
<body> 
    <h2>ACCESS DENIED</h2>
    <p><?php 
		echo "This Address is not allowed to access this URL.";
		session_destroy();
	?></p> 
</body> 
</html>