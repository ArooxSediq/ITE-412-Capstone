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

	function signOut() { session_destroy(); }

	function signIn($email,$password)
	{
		foreach ($this->data as $datum)
		{
			if($email == $datum['email'] && $password === $datum['password'])
				{
					$_SESSION['user_email']=$email;
					$_SESSION['user_password']=$password;
					return true;
				}
		}
		return false;
	}
}//class User

 ?>
