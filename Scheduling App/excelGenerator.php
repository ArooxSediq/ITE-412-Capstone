<?php 
	session_start();


	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;

	require_once  'vendor/PhpOffice/PhpSpreadsheet/src/Bootstrap.php';
	require 'vendor/autoload.php';

	$events=json_decode($_GET['data']);


	$helper = new Sample();
	if ($helper->isCli())
	{
	    $helper->log('This example should only be run from a Web Browser' . PHP_EOL);

	    return;
	}

	// Create new Spreadsheet object
	$spreadsheet = new Spreadsheet();

	// Set document properties
	$spreadsheet->getProperties()->setCreator($_SESSION['user_email'])
	    ->setLastModifiedBy($_SESSION['user_email'])
	    ->setTitle('Final Exams Schedule')
	    ->setSubject('Final Exams Schedule')
	    ->setDescription('Final Exam Schedule for The American University of Iraq, Slemani\' students')
	    ->setCategory('Schedule');

	// Add some data
	$headings=[];

	foreach ($events as $event) {
		array_push($headings, substr($event->start,0,10));
	}
	
	$headings=array_unique($headings);
	$indexs='A B C D E F G H I J K L M N O P Q R S T U V W X Y Z';
	$indexs = explode(' ', $indexs);
	$ix=3;
	    foreach ($headings as $key => $value) {
	    	echo $indexs[$key]."1";
	    	$spreadsheet->setActiveSheetIndex(0)->setCellValue($indexs[$key]."1", $value);

	    	foreach ($events as $k => $event) {
	    		
	    		if(substr($event->start,0,10)==trim($value))
	    		{
	    			$spreadsheet->setActiveSheetIndex(0)->setCellValue($indexs[$key].$ix++, $event->title);
	    		}

	    	}

	    	$ix=3;
	    }



	$spreadsheet->getActiveSheet()->setTitle('Final Exams Schedule');
	$spreadsheet->setActiveSheetIndex(0);


	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="Final_exam_schedule.xlsx"');
	header('Cache-Control: max-age=0');
	
	// If you're serving to IE 9, then the following may be needed
	header('Cache-Control: max-age=1');

	
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
	header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	header('Pragma: public'); // HTTP/1.0
		

	$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
	$writer->save('php://output');
	header("Location: scheduler.php");

 ?>