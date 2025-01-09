<?php
//var_dump($_POST);
$name = $_POST['name'];
$password = $_POST['password'];
$box = $_POST['box'];
$comment = $_POST['comment'];
$gender = $_POST['gender'];
?>
<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Your data</h1>
 <p>name: <?php echo $name?></p>
 <p>password: <?php echo $password?></p>
 <p>comment: <?php echo $comment?></p>
 <p>gender: <?php echo $gender?></p>
 <?php
 foreach ($box as $item)
 {
     echo "<p>toppings:".$item."</p>";
 }
 ?>

</body>
</html>
