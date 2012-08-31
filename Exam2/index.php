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




include 'Views/list.php';
echo "Hello World!";
?>
