<?php 

if(empty($_POST['g-recaptcha-response'])) {
	header("Location: login.php?error=Please complete the captcha."); 
	die();
}

include 'user.php';
include 'database.php';

session_start();

if(isset($_POST['g-recaptcha-response']))
  {
        $secret = '_KEY_';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
            $succMsg = 'Your contact request have submitted successfully.';
        }
        else
        {
            $errMsg = 'Robot verification failed, please try again.';
        }
   }

$db = new database('admin');
$user = new user($db);

$username = stripslashes($_POST['email']);
$username = mysqli_real_escape_string($db->getDB(),$username);
$password = stripslashes($_POST['password']);
$password=mysqli_real_escape_string($db->getDB(),$password);

$password = md5($password);

$auth=$user->signIn($username,$password);

if( $auth ) header("Location: upload.php"); 
else header("Location: login.php?error=Wrong Username or Password.");


 ?>
