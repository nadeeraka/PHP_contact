<?php
session_start();
require_once('./src/Exception.php');
require_once('./src/OAuth.php');
require_once('./src/PHPMailer.php');
require_once('./src/POP3.php');
require_once('./src/SMTP.php');

$errors = [];

if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    
    $data = [
        'name'=> $_POST['name'],
        'email'=> $_POST['email'],
        'message'=>$_post['message']
    ];
    
    foreach ($data as $data => $value) 
    {
          
        if (empty($value))
         {
         $errors[] = 'The  '.$data.' '.'field is required';  
        }
      }

      if (empty($errors)) {
          $mail = new PHPMailer;
          $mail->isSMPT();
          $mail->SMTPAuth = true;

          $mail->HOST = 'smpt.gmail.com';
          $mail->Username = ''
      }

} else {
    $errors[] = 'Something went wrong !';
}

$_SESSION['errors'] =$errors;
$_SESSION['field'] =$field;
header('Location: index.php');

?>