<?php 

include 'user.php';
include 'database.php';

session_start();

$db = new database();
$user = new user($db);

if( $user->signIn($_POST['email'],$_POST['password']) ) header("Location: upload.php"); 
else header("Location: index.php");


 ?>