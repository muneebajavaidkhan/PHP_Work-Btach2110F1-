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




     $timeofday = date("H"); //17

     if($timeofday < "12"){ //17 < 12

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
        $d = date("D");//Saturday
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

    <h3>NESTED IF STATEMENT</h3>

    <?php
        $Age = 20;
        $Education = "Matric";
        $Cnic = "Yes";

        if($Age >= 18){ //20 >= 18

            if($Education == "Inter"){ //Matric == "Matric"
                
                if($Cnic == "Yes"){

                    echo "<p>Eligible for Vote Casting</p>";
                }
            
                else {
                    echo "Sorry you will not cast Vote";
                }
            }
            else{
                echo "<p>You don't have Education to vote</p>";
            }

        }
        else{
            echo "<p>You don't have age to vote</p>";
        }
    ?>
    <h3>SWITCH CASE</h3>

    <?php
            $per = 10;

            switch($per){

                case 90:
                    $course = "PHP 8";
                    $status = "Passed";
                    $StudentName = "Fahad";
                break;

                case 80:
                    $course = "C++";
                    $status = "Passed";
                    $StudentName = "Sajid";
                break;

                case 70:
                    $course = "MVC";
                    $status = "Passed";
                    $StudentName = "Saima";
                break;
                default:
                    $course = "C Sharp";
                    $status = "Fail";
                    $StudentName = "ABC";

            }    
    ?>

<table border = 1>
            <tr>
                <th>Student name</th>
                <td>  <input type="text" value =   " <?= $StudentName ?> "> </td>
            </tr>
            <tr>
                <th>Course</th>
                <td>  <input type="text" value =   " <?= $course ?> "> </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>  <input type="text" value =   " <?= $status ?> "> </td>
            </tr>

</table>


    <h3> PHP LOOP </h3>
    <?php

        echo "<h3>WHILE LOOP</h3>";

        $n = 1;
        while($n <= 10){

            echo "The number is: $n <br>" ;

            $n++;
        }
        
        echo "<h3>Do WHILE LOOP</h3>";
        $x = 15;
        do{
            echo "The number is: $x <br>";
            $x++;
        }
        while($x <= 20);


        echo "<h3>For LOOP</h3>";

        for($y = 1;$y <=20; $y++){

            echo "The number is: $y <br>";

        }

        echo "<h3>For EACH LOOP</h3>";

        $vehicles = array("Car","Bike","Bus","Bicycle");
        foreach($vehicles as $value){
            echo "$value <br>";
        }

    
    ?>






</body>
</html>
