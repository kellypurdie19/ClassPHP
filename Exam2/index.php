<?php
$action = (array_key_exists('action', $_POST)?$_POST['action']:'');
$action = (array_key_exists('action', $_GET)?$_GET['action']: $action);

require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('Model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/jobs',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

/*if($action == 'Subscribe'){
	
	$oEmail = new Email;
	$oEmail->email = $_POST['email'];
	$oEmail->save(); 
	
}elseif($action == 'Delete'){
	
	$oEmail= Email::find_by_email($_GET['email']);
	if($oEmail && $oEmail->delete()){
		echo "1 email deleted";
	}
	else{
		echo "0 emails deleted";
	}
	
}elseif($action == 'Unsubscribe'){
	
	$oEmail= Email::find_by_email($_GET['email']);
	if($oEmail && $oEmail->delete()){
		echo "You have been unsubscribe";
	}else{
		echo "unsubscription failed";
	}
	
		exit();

}elseif($action == 'Send'){
	include 'Model/helpers.php';
	sendEmails();
}
	
if($action == '' || $action == 'Send'){
	include 'Views/email.php';
}else{
	include 'Views/edit.php';
}*/
include 'Views/edit.php';
echo "Hello World!";
?>
