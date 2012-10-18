<!DOCTYPE html>

<!--
	Website:  	   Revee	
	Page:			Landing.php			
	Developer:      Kelly Purdie
	Languages Used: HTML 5
	Date Created:   October 16, 2012
	Last Revised:   

	Website Description:	
	Intern project of Revee Site Landing PAge been Created by Jey Legarie, Kelly Purdie, Rich ,Hildred
	
	External files:
		./css/main.css Public/index.php
-->	
	
<header>
	<div id="contect_header">
		<div id="logo"></div>
		<div id="title">
			<h1>TITLE</h1>
		</div>	
	</div>	
</header> <!-- header -->
<div id="main">
	<form id="form"  action="Landing.php" method="post">
		<fieldset id="fieldset">
		<legend id="inside_form"></legend>
			<div id="sign-in">
				<label id="label" for="req_sing-in">First Name:</label>
				<input type="text" name="req_sign-in" maxlength="40"/>
			</div>
			<div id="password">
				<label id="label" for="req_password">Last Name:</label>
				<input type="text"	name="req_password" maxlength="40"/>
				<a href="/">forgot your password?</a>
			</div>
			<div id="buttons">		
				<input class="submit" type="submit" value="SIGN-UP" name="action" />
			</div>	
		</fieldset>
		
	</form>
	<nav>
		<div id="buttons">		
				<input class="submit" type="submit" value="TEST DRIVE" name="action" />
				<input class="submit" type="submit" value="ABOUT US" name="action" />
				<input class="submit" type="submit" value="CONTACT US" name="action" />
			</div>	
	</nav>	
</div> <!-- main -->