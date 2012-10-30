<?php 
if(isset($_GET['page'])){
	if($_GET['page']=='about'){
		include 'aboutme.php';
	}
	elseif ($_GET['page']=='projects'){
	
		include 'projects.php';
		
	}elseif ($_GET['page']=='database'){
		
		include 'database.php';
			
	}elseif ($_GET['page']=='photography'){
		
		include 'photography.php';
			
	}elseif($_GET['page']=='projects'){
		
		include 'coder.php';
		include 'projects.php';
			
	}elseif($_GET['page']=='languageSample'){

		include 'languageSample.php';
			
	}elseif($_GET['page']=='contact'){
		
		include 'contact.php';
			
	}elseif($_GET['page']=='artist'){
		
		include 'artist.php';
			
	}elseif($_GET['page']=='designer'){
		
		include 'designer.php';
			
	}elseif($_GET['page']=='languageSample'){
		
		include 'coder.php';
		include 'languageSample.php';
			
	}elseif ($_GET['page']=='designs'){
		include 'designs';
	}//end of elseif
	
}//end of if	
else{
		include 'aboutme.php';
	}//end else
?>
	
