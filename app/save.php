<?php 
  
  require 'database.php';

  $DB = new database('admin');

  foreach ($_POST as $event) 
  {
    $event = json_decode($event);
    $DB->insert($event);
  }

  header("Location: scheduler.php");




 ?>