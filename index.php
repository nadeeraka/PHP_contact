<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] :[];
$field = isset($_SESSION['field']) ? $_SESSION['field'] :[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="POST">
     <input type="text" name="name">
     <label for="">name</label>
     <input type="text" name="email">
     <label for="">email</label>
     <input type="text" name="message">
     <label for="">massage</label>
     <button type="submit">Submit</button>
    </form>
    
</body>
</html>
<?php
unset($_SESSION['error']);