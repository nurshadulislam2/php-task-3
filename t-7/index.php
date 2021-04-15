<?php
require "Assignment.php";
$assignment=new Assignment("ADVANCED WEB APPLICATION DEVELOPMENT");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Make a class named 'Assignment'. Now take a variable and set "ADVANCED WEB APPLICATION DEVELOPMENT" as the value by constructor. Now make 3 methods where you can do, 1. count number of word of the sentence and return the result, 2. Find the lowest number of word from the sentence and print it, 3. Find the "Application" word from the sentence and replace the word with "WEBSITE" and print the full Sentence again with the replaced word.</h3>
    <?php
    $totalWord=$assignment->totalWord();
    echo "Total word {$totalWord} <br>";
    $assignment->lowestWord();
    echo "<br>";
    $assignment->replaceWord();
    ?>
</body>
</html>