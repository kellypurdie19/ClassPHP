<html><body>
<form action='.' method='post' align="center" >

<li><label>Title:</label><input type='text' name='title'/><p/>
<p><label>Link:</label><input type='text' name='link'/><p/>
<p><label>Date Posted:</label><input type='text' name='pubDate'/><p/>
<p><label>Next Action:</label>
	<select name="cdata">
		<optgroup label="nextAction">
			<option value="perform_research">Perform Research</option>
			<option value="send_resume">Send Resume</option>
			<option value="prepare_for_interview">Prepare for Interview</option>
			<option value="attend_interview">Attend Interview</option>
			<option value="send_thank_you">Send Thank You</option>
			<option value="follow_up">Follow-Up</option>
	</select>

<p><input type='submit' name='action' value='Submit'/>
<input type='submit' name='action' value='Edit List'/><p/>

</form>
</body></html>