<?php
$sRes = '';
	if(isset($_POST['
			.
			'])){
	// The message
	$req_first_name = $_POST['req_first_name'];
	$req_last_name = $_POST['req_last_name'];
	$email_news = $_POST['email_news'];
	$comments = $_POST['comments'];
	
	$message = "Work request $req_first_name $req_last_name $email_news $comments";	
		
	// In case any of our lines are larger than 70 characters, we should use wordwrap()
	$message = wordwrap($message, 70);
	
	if(mail('kellypurdie19@yahoo.ca', 'site reply', $message)){
		$sRes = "Thank you for your inquiery";
	}else{
		$sRes = "mail failed";
	}
}	
?>
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
	
<html class="no-js" lang="en">
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
	
	<!-- JavaScript link -->
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=3.0.1'></script>    
	<script type='text/javascript' src='./js/infinite-rotator.js'></script>		
	<link rel="stylesheet" href="./css/rotator.css" type="text/css" media="screen" />
		
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
				<?php echo $sRes;
				?>
				
			</div> <!-- centerpanel -->
			
			<div id="imageContainer">				
				<?php include './views/container.php'; ?>
			</div> <!-- container -->
			
			<footer>
			</footer> <!-- footer -->
			
		</div> <!-- container -->
	</div> <!-- page_wrap -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript"></script>
	<script src="slideshow.js" type="text/javascript"></script>
</body>
</html>