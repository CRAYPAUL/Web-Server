<?php
if(isset($_GET['error'])) {
        if($_GET['error']=='400'){
                $errorcode = "Error 400";
                $errormessage = "<strong>The HTTP request could not be understood by the server due to malformed syntax.</strong></br>
<i>The web browser may be too recent, or the HTTP server may be too old.</i>";
        }
        if($_GET['error']=='401'){
                $errorcode = "Error 401";
                $errormessage = "<strong>The request requires user authentication.</strong></br>
<i>This means that all or a part of the requested server is protected by a password that should be given to the server to allow access to its contents.</i>";
        }
        if($_GET['error']=='402'){
                $errorcode = "Error 402";
                $errormessage = "<strong>Payment Required</strong>
<i></i>";
        }
        if($_GET['error']=='403'){
                $errorcode = "Error 403";
                $errormessage = "<strong>The HTTP server understood the request, but is refusing to fulfill it.</strong></br>
<i>This status code is commonly used when the server does not wish to reveal exactly why the request has been refused, or when no other response is applicable (for example the server is an Intranet and only the LAN machines are authorized to connect).</i>";
        }
        if($_GET['error']=='404'){
                $errorcode = "Error 404";
                $errormessage = "<strong>The server has not found anything matching the requested address (URI) ( not found ).</strong></br>
<i>This means the URL you have typed or clicked on is wrong or obsolete and does not match any document existing on the server (you may try to gradually remove the URL components from the right to the left to eventually retrieve an existing path).</i>";
        }
        if($_GET['error']=='405'){
                $errorcode = "Error 405";
                $errormessage = "<strong>This code is given with the Allow header and indicates that the method used by the client is not supported for this URI.</strong>
<i></i>";
        }
        if($_GET['error']=='500'){
                $errorcode = "Error 500";
                $errormessage = "<strong>The HTTP server encountered an unexpected condition which prevented it from fulfilling the request.</strong></br>
<i>For example this error can be caused by a server misconfiguration, or a resource exhausted or denied to the server on the host machine.</i>";
        }
        if($_GET['error']=='501'){
                $errorcode = "Error 501";
                $errormessage = "<strong>The HTTP server does not support the functionality required to fulfill the request.</strong></br>
<i>This is the appropriate response when the server does not recognize the request method and is not capable of supporting it for any resource (either the web browser is too recent, or the HTTP server is too old).</i>";
        }
        if($_GET['error']=='502'){
                $errorcode = "Error 502";
                $errormessage = "<strong>The gateway server returned an invalid response.</strong></br>
<i>The HTTP server, while acting as a gateway or proxy, received an invalid response from the upstream server it accessed in attempting to fulfill the request.</i>";
        }
        if($_GET['error']=='503'){
                $errorcode = "Error 503";
                $errormessage = "<strong>The HTTP server is currently unable to handle the request due to a temporary overloading or maintenance of the server.</strong></br>
<i>The implication is that this is a temporary condition which will be alleviated after some delay.</i>";
        }
        if($_GET['error']=='504'){
                $errorcode = "Error 504";
                $errormessage = "<strong>This response is like 408 (Request Time-out) except that a gateway or proxy has timed out.</strong>
<i></i>";
        }
}
else {
        $errorcode = "Error";
        $errormessage = "An error has occured while trying to contact the website. Please contact support.";
}
?>
<html>
<head>
<title>Error page</title>
<style>
	body {
		font-family: 'Segoe UI', sans-serif;
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
	
	.error-body {
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
	<div class="error-body">
		<h3 style="font-size:55px; margin-bottom:10px">- <?php echo $errorcode; ?> -</h3>
		<p style="margin-bottom:10px; padding-left: 150px; padding-right: 150px"><?php echo $errormessage; ?></p>
	</div>
</body>
</html>
