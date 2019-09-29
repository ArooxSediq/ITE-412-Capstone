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

$target_dir = "data/";
$target_file = $target_dir . basename($_FILES["sonis_data"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["sonis_data"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["sonis_data"]["name"]). " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
        header("Location: index.php");
    }
}

$controller = new controller($target_file);

$students= array();
$classes=$controller->getClasses();

$studentIDs = $controller->getStudentIDs();

foreach ($studentIDs as $studentID)
{
    array_push($students, new student($studentID) );
}

$controller->addClasses($students);

?>