<?php
require "Gorib.php";
require "MyStatus.php";

$myStatus=new MyStatus();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-5</title>
</head>
<body>
    <h3>Make a interface class named Gorib. Make another class called MyStatus. Implement Gorib class in MyStatus. Then implement lowMOney,Homeless method in MyStatus Class.</h3>
    <p><?php $myStatus->lowMoney(); ?></p>
    <p><?php $myStatus->homeless(); ?></p>
</body>
</html>