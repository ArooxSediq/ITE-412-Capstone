<?php

/**
*   Author: Arukh Sediq Shkur
*   Supervisor: Alan Amin
*   ITE-410 - Capstone   
**/

require 'vendor/autoload.php';
require 'student.php';
require 'controller.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$controller = new controller("book1.xlsx");

$students= array();

$studentIDs = $controller->getStudentIDs();

foreach ($studentIDs as $studentID)
{
    array_push($students, new student($studentID) );
}

$controller->addClasses($students);




?>