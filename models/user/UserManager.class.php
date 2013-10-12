<?php
class UserManager
{
	private $_db; //Instance de PDO
	
	public function __construct($db)
	{
		$this->setDb($db);
	}
	
	public function addNewUser(User $user)
	{
		
	}
	
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
}