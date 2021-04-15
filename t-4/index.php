<?php
require "Car.php";
require "audi.php";
$audi=new Audi();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
</head>
<body>
    <h3>Make a Car class. Take EngineStatus,BodyPart property for Car class. Take another class named Audi. Take property color, Seats . then Print all of them EngineStatus,BodyPart,property color by inherit Car Class. You can use Getter Setter if you want.</h3>
    <?php
    $audi->setter("best", "good", "red", 5);
    $audi->getter();
    ?>
</body>
</html>