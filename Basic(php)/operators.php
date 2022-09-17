<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <h3>COMPARISION OPERATORS</h3>
    <?php
        $a = 12;
        $b = 20;

        echo "<h5>Equality Operator</h5>";

        if($a == $b){

            echo "a is equal to b <br>";
        }
        else{
            echo "a is not equal to b <br>";
        }

        echo "<h5>Greather Than Operator</h5>";

        if($a > $b){ //12 > 20
            echo "a is greather than b <br>";
        }
        else{
            echo "a is not greather than b <br>";
        }
        echo "<h5>Less Than Operator</h5>";
        if($a < $b){ //12 < 20
            echo "a is less than b <br>"; 
        }
        else{
            echo "a is not less than b <br>"; 
        }
    ?>
    <h5>LOGICAL OPERATORS</h5>
    <?php
        $a = 0;
        $b = 10;
        $c = 30;

        echo "<h5>AND OPERATOR</h5>";

        if($a < $c && $c < $b){ //true && false = false

            echo "And Condition Operator is true";
        }
        else{
            echo "And Condition Operator is false";
        }

        echo "<h5>OR OPERATOR</h5>";

        if($c == $a || $c > $a){ //false || true = true

            echo "OR Condition Operator is true";
        }
        else{
            echo "OR Condition Operator is false";
        }
    ?>

    <h5>ASSIGNMENT OPERATORS</h5>

    <?php
        $a = 30;
        $c = 20;

       $c += $a;  //$c = $c + $a 
       echo "Add and Assignment op Result is $c <br>";

       $a -= $c; //30 - 50
       echo "Sub Assignment op Result is $a <br>";

       $c *= $a; //50 * (-20)
       echo "Mult Assignment op Result is $c <br>";



    ?>
    <h5>Conditional OPERATORS</h5>
    <?php
        $a = 10;
        $b = 20;

        $result = ($a > $b) ?$a:$b;

        echo "Test1: Value of result is $result";

    ?>



    
</body>
</html>