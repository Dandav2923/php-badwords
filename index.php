<?php

$hello = 'Hello world is my best place in the universe of Hearth word word word';
$userWord = $_GET['word'];
$sostituzione = '***'

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
    <h1><?php echo $hello ?> </h1>
    <span><?php echo strlen($hello) ?> </span>
    <span><?php echo str_replace($userWord, $sostituzione, $hello) ?></span>
</body>
</html>