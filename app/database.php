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

	function getDB()
	{
		return $this->db;
	}
	
	function __construct($type)
	{
		if($type=='public')
		{
		
			$this->db = new mysqli($this->servername, 'Public', '1234@4321' , $this->schema);

			if ($this->db->connect_error) 
			{
			    die("Connection failed: " . $this->db->connect_error);
			}	
					
		}else
		{
			$this->db = new mysqli($this->servername, $this->username, $this->password , $this->schema);

			if ($this->db->connect_error)
			{
			    die("Connection failed: " . $this->db->connect_error);
			}
		}
		
	}


	function emptyCalendar()
	{

		return $this->db->query("TRUNCATE table `events`;");
		
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


			$sql = "INSERT INTO `events` (`id`, `title`, `start`, `end`,`location`) VALUES (NULL, '".$event[0]."', '".$event[1]."' , '".$event[2]."','TBA' );";			
			$result = $this->db->query($sql);


		}
		
		while($this->db->more_results())
		{
		    $this->db->next_result();
		    if($res = $this->db->store_result())
		    {
		        $res->free(); 
		    }
		}

		return $result;

	}

function addLocation($title,$location)
{

	$Q="UPDATE `events` SET `location` = '".mysqli_real_escape_string($this->db,$location)."' WHERE `events`.`title` = '".mysqli_real_escape_string($this->db,$title)."';";
	$result = 	$this->db->query($Q);
	return $result;
}

function addStudents($students)
{
	$Q="TRUNCATE table `students`";
	$this->db->query($Q);
	$Query=array( 0 => "", 1 => "",2 => "",3 => "",4 => "",5 => "",6 => "",7 => ""); $i=0;

	foreach ($students as $student)
	{
		if ($i<100) 
		{		
			$Query[0].= "INSERT INTO `students` (`auis_id`, `classes`) VALUES ( '".$student->id."' , '".json_encode($student->classes)."' );";			
		}

		if($i < 200 && $i > 99)
		{
			$Query[1].= "INSERT INTO `students` (`auis_id`, `classes`) VALUES ( '".$student->id."' , '".json_encode($student->classes)."' );";
		}

		if($i < 300 && $i > 199)
		{
			$Query[2].= "INSERT INTO `students` (`auis_id`, `classes`) VALUES ( '".$student->id."' , '".json_encode($student->classes)."' );";
		}


		if($i < 400 && $i > 299)
		{
			$Query[3].= "INSERT INTO `students` (`auis_id`, `classes`) VALUES ( '".$student->id."' , '".json_encode($student->classes)."' );";
		}


		if($i < 500 && $i > 399)
		{
			$Query[4].= "INSERT INTO `students` (`auis_id`, `classes`) VALUES ( '".$student->id."' , '".json_encode($student->classes)."' );";
		}


		if($i < 600 && $i > 499)
		{
			$Query[4].= "INSERT INTO `students` (`auis_id`, `classes`) VALUES ( '".$student->id."' , '".json_encode($student->classes)."' );";
		}


		if($i < 700 && $i > 599)
		{
			$Query[4].= "INSERT INTO `students` (`auis_id`, `classes`) VALUES ( '".$student->id."' , '".json_encode($student->classes)."' );";
		}


		if($i < 800 && $i > 699)
		{
			$Query[4].= "INSERT INTO `students` (`auis_id`, `classes`) VALUES ( '".$student->id."' , '".json_encode($student->classes)."' );";
		}


		if($i < 900 && $i > 799)
		{
			$Query[4].= "INSERT INTO `students` (`auis_id`, `classes`) VALUES ( '".$student->id."' , '".json_encode($student->classes)."' );";
		}



		$i++;	
	}

	foreach ($Query as $SQL)
	{
		$result = $this->db->multi_query($SQL);
		
		while($this->db->more_results())
		{
		    $this->db->next_result();
		    if($res = $this->db->store_result())
		    {
		        $res->free(); 
		    }
		}
	} 	
	return $result;
}

}//Class 

 ?>