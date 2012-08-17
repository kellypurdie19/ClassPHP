<?php
   foreach($aMyCDs as $aCD){
   	echo $aCD['Name'].'<br>';
   }
  
?>

<html>
<body>
 <form action="." method="post"> <!-- this is what links it to the PHP page -->
    <input type="text" name="title"/><br />
	<label>&nbsp;</label>
    <div id="buttons">
    <label>&nbsp;</label>
    <input type="submit" value="Add Name" /><br />
 </form>
</body>
</html>