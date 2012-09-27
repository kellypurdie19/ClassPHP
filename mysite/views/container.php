<article id="imageContainer">

<?php 
if(isset($_GET['page'])){
	if($_GET['page']=='about'){
		include 'aboutme.php';
	}
	elseif ($_GET['page']=='projects'){
		
		include 'coder.php';
		include 'projects.php';
		
	}elseif ($_GET['page']=='database'){
		
		include 'coder.php';
		include 'database.php';
		
		
	}elseif ($_GET['page']=='designs'){
		include 'designs';
	}//end of elseif
	
}//end of if	
else{
		include 'aboutme.php';
	}//end else
?>
<script type="text/javascript" src="table.js></script>
</article>	
