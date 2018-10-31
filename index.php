<?php
session_start();
print_r($_SESSION['error']);
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