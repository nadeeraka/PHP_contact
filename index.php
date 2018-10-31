<?php
session_start();
require_once('./bin/secure.php');

$error = isset($_SESSION['errors']) ? $_SESSION['errors'] :[];
$field = isset($_SESSION['field']) ? $_SESSION['field'] :[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php if(! empty($error)) :?>
        <div class="panal">
            <ul>
                <li><?php echo implode('</li><li>',$error);?></li>
            </ul>
        </div>
        <?php endif; ?>

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
unset($_SESSION['field']);