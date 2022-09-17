<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    $fruits = array("Orange","Apple","Mango");
    $res = var_dump($fruits);


    while(list($key,$value)=each($fruits)){

        echo "$key -> $value <br>"
    }
?>
    <h1> <?= $res ?> </h1>
</body>
</html>