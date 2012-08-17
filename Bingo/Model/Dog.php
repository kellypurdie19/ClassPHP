<?php
class Dog
{
	public $sHungry = 'hell yeah I am hungry.';
	public $sBreed = 'lab';
	
	function _construct($sBreed)
	{
		$this->sBreed = $sBreed;
	}
   	function eat($food)
	{
		$this->sHungry = 'not so much'.$food.'because I am a'.$this->sHungry;
	}
	function_destruct
}
?>