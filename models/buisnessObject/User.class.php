<?php
class Question {
	private $id;
	private $username;
	private $password;
	private $firstname;
	private $lastname;
	private $birthdate;
	private $registerdate;
	
	//Getter and Setter
	public function getId()
	{
		return $this->id;
	}
	
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function getUsername()
	{
		return $this->id;
	}
	
	public function setUsername($username)
	{
		$this->username = $username;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
	public function setPassword($id)
	{
		$this->password = $password;
	}
	
	public function getFirstname()
	{
		return $this->firstname;
	}
	
	public function setFirstname($firstname)
	{
		$this->firstname = $firstname;
	}
	
	public function getLastname()
	{
		return $this->lastname;
	}
	
	public function setLastname($lastname)
	{
		$this->lastname = $lastname;
	}
	
	public function getBirthdate()
	{
		return $this->birthdate;
	}
	
	public function setBirthdate($birthdate)
	{
		$this->birthdate = $birthdate;
	}
	
	public function getRegisterdate()
	{
		return $this->registerdate;
	}
	
	public function setRegisterdate($registerdate)
	{
		$this->registerdate = $registerdate;
	}
	
	//Constructor
	public function __construct($id, $username, $password, $firstname, $lastname, $birthdate, $registerdate)
	{
		$this->setId($id);
		$this->setUsername($username);
		$this->setPassword($password);
		$this->setFirstname($firstname);
		$this->setLastname($lastname);
		$this->setBirthdate($birthdate);
		$this->setRegisterdate($registerdate);
		
	}
	
}
