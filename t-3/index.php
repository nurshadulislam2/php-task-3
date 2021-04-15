<?php
    require "SuperPower.php";
    require "IronMan.php";
    require "CaptainAmeria.php";
    require "Thor.php";

    $ironMan= new IronMan("Iron Man");
    $thor= new Thor("Thor");
    $captainAmerica=new CaptainAmerica("Captain America");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-3</title>
</head>
<body>
    <h3>Make a Class SuperPower. There will be many kind of super power methods in the class. Like Flying , LaserEye , etc. Now Make the classes like IronMan, CaptainAmerica, Thor . Inherit the SuperPower Class by the following classes. Now print the proper power method from the Superhero class.</h3>
    <?php
        $ironMan->flying();
        echo "<br>";
        $ironMan->laserEye();
        echo "<br>";
        echo "<br>";
        $thor->flying();
        echo "<br>";
        $thor->hammer();
        echo "<br>";
        echo "<br>";
        $captainAmerica->suprHero();
    ?>
</body>
</html>