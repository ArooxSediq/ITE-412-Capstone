<?php

/**
*   Author: Arukh Sediq Shkur
*   Supervisor: Alan Amin
*   ITE-410 - Capstone   
**/

require 'vendor/autoload.php';
require 'student.php';
require 'controller.php';
require 'database.php';
require 'user.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Import the excel data file


if(!isset($_SESSION['ExcelFile']))
{
	$target_dir = "data/";
	$target_file = $target_dir . basename($_FILES["sonis_data"]["name"]);
		
	if (move_uploaded_file($_FILES["sonis_data"]["tmp_name"], $target_file))
	{
		$_SESSION['ExcelFile'] = $target_file ;
	} else 
	{
	    header("Location: upload.php?msg=Sorry, We couldn't upload your file");
	}
}

$DB = new database();

$events = $DB->fetch('events');

$controller = new controller($_SESSION['ExcelFile']);

$students= array();
$classes=$controller->getClasses();

foreach ($classes as $key => $value)
{
	
	foreach ($events as $event) 
	{
		if( trim($event['title']) == trim($value) ) unset($classes[$key]);
	}

}

$studentIDs = $controller->getStudentIDs();

foreach ($studentIDs as $studentID)
{
    array_push($students, new student($studentID) );
}

$controller->addClasses($students);

if(isset($_GET['reset'])) 
	{
		$DB->emptyCalendar();
		header("Location: scheduler.php");	
	}

?>