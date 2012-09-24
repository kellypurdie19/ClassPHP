<!DOCTYPE html>  
  
<html lang="en">  
<head>  
   <meta charset="utf-8">  
   <title>Search:</title>  
   <link href="date/css/redmond/jquery-ui-1.8.13.custom.css" rel="stylesheet" />  
</head>  
<body>
	<form action="." method="post">

		<p>
			<label>Start Date:</label><input type="date" name="startdate" id="startdate" value="startdate" onclick="date"/>  <!--  should work in HTML5 alone--> 
  			<label>End Date:</label><input type="date" name="enddate" id="enddate" value="enddate" onclick="date"/>  <!--  should work in HTML5 alone-->
  			
  			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>  
			<script src="date/js/jquery-ui.js"></script>  
			<!-- <script> $('#date').datepicker();</script> this makes it work in firefox but it duplicates in chrome -->
			<script>  
			(function() {  
			      var elem = document.createElement('input');  
			      elem.setAttribute('type', 'date');  
			  
			      if ( elem.type === 'text' ) {  
			         $('#date').datepicker();   
			      }  
			   })();   
			</script> 
			
		
		</p>
		<p>
			<label>Purchased Item:</label><input type="text" name="purchase"/>		
	
		</p>
		<p>
			<label>Lowest amount:</label><input type="text" name="price"/>
			<label>Hightest amount:</label><input type="text" name="price"/>
		
		</p>
		<input type="submit" name="action" value="Search" />
		

	</form>
</body>
</html>

