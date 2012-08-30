<?php

function addCookie($sUser){
	setcookie('username', $sUser);
	$_COOKIE['username']= $sUser;
}

function addUser($aPost){
		$sError = "success";
		$oUser = User::find_by_username($aPost['username']);
		if($oUser){
			$sError = "username already taken";
		}elseif ($aPost['password'] != $aPost['repeatpassword']){
			$sError = "password dont match";
		}else{
			$oUser = new User;
			$oUser->password = sha1($aPost['password'] . $aPost['password']);
			$oUser->username = $aPost['username'];
			$oUser->save();
		}
		return $sError;
}

function validateUser($aPost){
	$oUser = User::find_by_username($aPost['username']);
	if($oUser && sha1($aPost['password'] . $aPost['password']) == $oUser->password){
		return true;
	}
	return false;
}

?>