
<?php
if(array_key_exists('username', $_POST)){
	setcookie('username', $_POST['username']);// makes the reference that will contain the cookie
	$_COOKIE['username']=$_POST['username'];// makes the cookie
}
if(array_key_exists('username', $_COOKIE)){
	include 'views/hello.php';
}else{
	include 'views/form.php';
}
?>