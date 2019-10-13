<?php 

/**
*   Author: Arukh Sediq Shkur
*   Supervisor: Alan Amin
*   ITE-410 - Capstone   
**/

class database
{
	private $db;
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $schema = "examschedulingassistant";


	function __construct()
	{

		// Create connection
		$this->db = new mysqli($this->servername, $this->username, $this->password , $this->schema);

		// Check connection
		if ($this->db->connect_error) {
		    die("Connection failed: " . $this->db->connect_error);
		}
		// echo "Connected successfully";
		
	}

	function emptyCalendar()
	{
		$result =	$this->db->query("TRUNCATE table `events`;");
	}

	function fetch($table)
	{

		$sql = "SELECT * FROM $table";
		$result = $this->db->query($sql);
		$data = array();

		if ($result->num_rows > 0) 
		{
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        array_push($data,$row);
		    }
		} 

		// die(var_dump($data));
		// $this->db->close();
		return $data;

	}
	
	function insert($event)
	{
		$sql = "SELECT * FROM events where `title` = '".$event[0]."'; ";
	
		$result = $this->db->query($sql);

		if ( $result->num_rows > 0 ) 
		{

			$sql = "UPDATE `events` SET `start` = '".$event[1]."', `end` = '".$event[2]."'  WHERE `events`.`title` = '".$event[0]."';";
			$result = $this->db->query($sql);
			
		} 
		else
		{


			$sql = "INSERT INTO `events` (`id`, `title`, `start`, `end`) VALUES (NULL, '".$event[0]."', '".$event[1]."' , '".$event[2]."' );";			
			$result = $this->db->query($sql);


		}
		
		// die(var_dump($this->db->error));
		// $this->db->close();
		return $result;

	}


}//Class 

 ?>