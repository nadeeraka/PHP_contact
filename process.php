<?
session_start();
require_once('./src/Exception.php');
require_once('./src/OAuth.php');
require_once('./src/PHPMailer.php');
require_once('./src/POP3.php');
require_once('./src/SMTP.php');

$errors =[];

if (isset($_POST['name'],$_POST['email'],$_POST['massage']) 
{
    echo 'all right'
}
else
{
    $errors[] = 'Something went wrong !';
}