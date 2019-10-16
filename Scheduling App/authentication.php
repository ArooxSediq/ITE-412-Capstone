<?php 

include 'user.php';
include 'database.php';

session_start();

$db = new database();
$user = new user($db);

$auth=$user->signIn(mysqli_real_escape_string($db->getDB(),$_POST['email']),mysqli_real_escape_string($db->getDB(),$_POST['password']));

if( $auth ) header("Location: upload.php"); 
else header("Location: index.php?error=".$db->error);


 ?>