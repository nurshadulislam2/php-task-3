<?php
require "MyName.php";
$myName=new MyName();
$myName->setName("Nurshadul Islam");
$name=$myName->getName();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-1</title>
</head>
<body>
    <h3>Make a Class Named "MyName", print out your name by calling method and pass by method parameters.</h3>
    <?php
    echo "<h4>My name is {$name}</h4>";
    ?>
</body>
</html>