
<!DOCTYPE html>

<!--
	Website:  		
	Page:			index.php			
	Developer:      Kelly Purdie
	Languages Used: HTML 5
	Date Created:   September 17, 2012 
	Last Revised:   september 18,2012

	Website Description:	
	Portfolio Site
	External files:
		./css/main.css
-->	
	
<html lang="en">
<head>
	<meta charset="utf-8" />

	<title>ck:me</title>
	
	<meta name="description" 
		content="Graphics Design and Web Development" />	
		
	<meta name="keywords" content="development, design, web" />
	
	<!-- Favicon links 
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	-->
	
	<!-- JavaScript link 
	<script src="./js/filename.js"></script>
	-->
	<script type="text/javascript" src="table_library.js"></script>
	
	
	<!-- CSS link -->
	<link rel="stylesheet" href="./css/main.css" />
	
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="page_wrap">
		<div id="container">
			<header>
				<?php include './views/navbar.php'; ?> 
			</header> <!-- header -->
			
			<div id="centerpanel">
				<?php include './views/main.php';?>
			</div> <!-- centerpanel -->
			
			<div id="imageContainer">				
				<?php include './views/container.php'; ?>
			</div> <!-- container -->
			
			<footer>
			</footer> <!-- footer -->
			
		</div> <!-- container -->
	</div> <!-- page_wrap -->
</body>
</html>