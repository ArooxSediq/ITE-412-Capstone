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

	$spreadsheet = new Spreadsheet();

	$spreadsheet->getProperties()->setCreator($_SESSION['user_email'])
	    ->setLastModifiedBy($_SESSION['user_email'])
	    ->setTitle('Final Exams Schedule')
	    ->setSubject('Final Exams Schedule')
	    ->setDescription('Final Exam Schedule for The American University of Iraq, Slemani\' students')
	    ->setCategory('Schedule');

	$headings=[];

	foreach ($events as $event) {

		$time = strtotime(substr($event->start,0,10));

		$time = date('Y-m-d',$time);

		array_push($headings, $time);
	}
	
	$headings=array_unique($headings);
	
	sort($headings);

	$indexs='A B C D E F G H I J K L M N O P Q R S T U V W X Y Z';
	$indexs = explode(' ', $indexs);
	$ix=2;

	// die(print_r($headings));

    foreach ($headings as $key => $value) {

	    	$spreadsheet->setActiveSheetIndex(0)->setCellValue($indexs[$key]."1", $value);
	    	$spreadsheet->getActiveSheet()->getColumnDimension($indexs[$key])->setAutoSize(true);
	    	
	    	foreach ($events as $k => $event)
	    	{
	    		
	    		if(substr($event->start,0,10)==trim($value))
					$spreadsheet->setActiveSheetIndex(0)->setCellValue($indexs[$key].$ix++, $event->title.'
'.$event->location.'
'.substr( $event->end,11,8));
	    	}

	    	$ix=2;
	    }

	$spreadsheet->getActiveSheet()->getStyle("A1:I1")->getFont()->setBold( true );
	$spreadsheet->getActiveSheet()->setTitle('Final Exams Schedule');
	$spreadsheet->setActiveSheetIndex(0);


	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="schedule.xlsx"');
	header('Cache-Control: max-age=0');
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
	header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	header('Pragma: public'); // HTTP/1.0
		

	$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
	$link = 'excelFiles/'.gmdate('d-M-Y').".xlsx";
	$writer->save( $link );
	header("Location: $link");

 ?>