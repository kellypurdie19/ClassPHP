<article>
	<form id="newsletter"  action="." method="post">
		<fieldset id="fieldset">
			<legend id="inside_form">To send inquiries, including feedback, requests for information, and questions	</legend>
			<div class="req_get_info">
				<h2 for="req_get_info" >Please fill the Feedback and	Inquiries form below.</h2>
			</div>
			<div id="req_first_name">
				<label for="req_first_name">First Name:</label>
				<input type="text" id="req_first_name"	name="req_first_name" maxlength="40"/>
			</div>
			<div id="req_last_name">
				<label for="req_last_name">Last Name:</label>
				<input type="text" id="req_last_name"	name="req_last_name" maxlength="40"/>
			</div>
			<div id="email">		
				<label for="email_news" >Email:</label>
				<input type="text" id="email_news" name="email_news" maxlength="100" />
			</div>	
			<div >	
				<label id="req_comments_label" for="comments">Comments:</label>
				<textarea id="req_comments" name="comments" rows="20" cols="30"></textarea>
			</div>
			
		</fieldset>
		<input class="submit" type="submit" value="response" name="action"/>
		<input class="reset" type="reset" value="Reset" />
	</form>
<?php echo $sRes;
?>
</article>