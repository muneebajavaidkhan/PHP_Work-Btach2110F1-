<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h3>PHP CONDITIONAL STATEMENT</h3>

    <?php
     $num = -764;
     if($num < 0){
         echo "The number is negative";
     }

     $timeofday = date("H");

     if($timeofday < "12"){

        echo "Happy Morning! <br>";
     }
     else{
         echo "Not less than";
     }
     //Num is pos and negative
     // Num is even or odd
    ?>

    <h3>Date Methods</h3>
    <?php
    
        echo "Current date in dd/mm/yy format: <b>" .date("d/m/y"). "</b>";
        echo "<br>";

        echo "Current date in dd MON yyyy format: <b>" .date("d/M/y"). "</b>";
        echo "<br>";

        echo "Current date in Day  Day, dd MON yyyy format: <b>" .date("D, d M Y"). "</b>";
        echo "<br>";
    
        echo "Current date in  Day, dd MONTH yyyy format: <b>" .date("D, d F Y "). "</b>";
        echo "<br>";

    ?>

    <h3>IF ELSE IF</h3>
    <?php
        $d = date("D");
        if($d == "Fri"){
            echo "Have a nice Weekend";
        }
        else if($d == "Sun"){
            echo "Have a nice Sunday";
        }
        else{
            echo "Have a Nice Day! ";
        }
    ?>
</body>
</html>
