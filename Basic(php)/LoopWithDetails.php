<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="LoopWithDetails.php" method = "post">

        <input type="number" name = "num" placeholder = "Enter your num">

        <input type="submit" value = "submit" name = "PrintTable">

    </form>

    <?php

        if(isset($_POST["PrintTable"])){

            $nuumber1 = $_POST["num"];

            $i = 1;
            while($i < 10){
                $res =  $nuumber1 * $i ;
                echo "$nuumber1 * $i = $res <br>";
                $i++;
            }
        }
    ?>


<form action="LoopWithDetails.php" method = "post">

<input type="number" name = "num1" placeholder = "Enter your num1">
<input type="number" name = "num2" placeholder = "Enter your num2">

<input type="number" name = "iterate" placeholder = "Enter your Iteration">

<input type="submit" value = "submit" name = "FibNum">



<?php
    if(isset($_POST["FibNum"])){

        $number1 = $_POST["num1"];
       $number2 =  $_POST["num2"];
       $iterations = $_POST["iterate"];

        echo "<br>";
       echo "$number1";
       echo "<br>";
       echo "$number2"; 
       echo "<br>";

       for($i = 0;$i < $iterations;$i++){

           $number3 = $number1 + $number2; //3 = 1 + 2 // 5 = 2 + 3
           $number1 = $number2; //2
           $number2 = $number3; //3
        
           echo "$number3 <br>";

       }
    }
?>

</form>
</body>
</html>