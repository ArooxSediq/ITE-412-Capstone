<?php 

/**
*   Author: Arukh Sediq Shkur
*   Supervisor: Alan Amin
*   ITE-410 - Capstone   
**/

class user
{
	private $name;
	private $password;
	private $email;
	private $data;
	private $db;

	function __construct($db)
	{
		$this->data = $db->fetch('users');
		$this->db = $db;
	
	}

	function create($username,$email,$password){}

	function signIn($email,$password)
	{
		// die(var_dump($email));
		foreach ($this->data as $datum) 
		{	
			// die(var_dump($password));
			if($email == $datum['email'] && $password == $datum['password']) 
				{

					$_SESSION['user_email']=$email;
					$_SESSION['user_password']=$password;
					return true;
				}
		}

		return false;

	}

	function signOut()
	{
		session_destroy();
	}
}

 ?>