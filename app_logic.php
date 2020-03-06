<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';
require_once "config.php";

session_start();
$errors = [];
$user_id = "";
/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($link, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT email FROM users WHERE email='$email'";
  $results = mysqli_query($link, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($link, $sql);

    // $_SESSION['token'] = $token;
    // Send email to user with the token in a link they can click on
    $to = $email;
    $base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
    // $subject = "Reset your password on examplesite.com";
    $msg = "Hi there, click on this <a href='".$base_url."reset-password.php?token=" . $token . "'>Reset Password</a> to reset your password on our site";

    $msg = wordwrap($msg,70);
// var_dump($msg);exit;
    // $mail = new PHPMailer();//new PHPMailer(true) : debug case
    
    //$message = "Your Activation Code is ".$code."";

    // $mail->IsSMTP(); // enable SMTP
    // $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
    // $mail->SMTPAuth = true; // authentication enabled
    // $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    // $mail->Host = "smtp.gmail.com";
    // $mail->Port = 587; // or 587
    // $mail->SetFrom("info@exam.com", "Admin");
    // $mail->IsHTML(true);
    // $mail->Username = "";
    // $mail->Password = "theStrongestPasswordEver";
    
    // $mail->Subject = "Reset your password.";
    // $mail->Body = $msg;
    // $mail->AddAddress($to);
    $subject="Reset your password";
    $from = 'info@exam.com';
    $body = $msg;
    $headers = "From:".$from;
    mail($to, $subject, $body, $headers);
 
    // if(!$mail->Send()) {
    //   header('location: login.php');
    // } else {
      header('location: login.php?email=' . $email);
    // }

  }
}

// ENTER A NEW PASSWORD
if (isset($_POST['new_password'])) {
  $new_pass = mysqli_real_escape_string($link, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($link, $_POST['new_pass_c']);

  // Grab to token that came from the email link
  $token = $_POST['token'];
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
  if (count($errors) == 0) {
    // select email address of user from the password_reset table 
    $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
    $results = mysqli_query($link, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if ($email) {
      $new_pass = password_hash($new_pass,PASSWORD_DEFAULT);
      $sql = "UPDATE users SET password='$new_pass' WHERE email='$email'";
      $results = mysqli_query($link, $sql);
      header('location: login.php?new_pass=1');
    }
  }
}
?>