<?php 

/**
*   Author: Arukh Sediq Shkur
*   Supervisor: Alan Amin
*   ITE-410 - Capstone   
**/

class controller
{
	public $data;
	
	function __construct($link)
	{
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$reader->setReadDataOnly(true);
		$spreadsheet = $reader->load($link);

		$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

		array_shift($sheetData);

		$this->data = $sheetData;
	}

	function getStudentIDs()
	{
		$students = array();

		foreach ($this->data as $datum) 
		{
		  array_push($students,  $datum['A']);
		}

		$students = array_unique($students);

		return $students;
	}

	function addClasses($students)
	{

		foreach ($students as $student) 
		{
			$classes = array();	

			foreach ($this->data as $datum) 
			{
				if($datum['A']==$student->id)
				{
					 array_push($student->classes,$datum['B']);
				}
			}
	
		}

	}

	function getClasses()
	{
		$classes = array();

		foreach ($this->data as $datum) 
		{
		  array_push($classes,  $datum['B']);
		}

		$classes = array_unique($classes);
		sort($classes);
		return $classes;
	}

}//class controller()


 ?>