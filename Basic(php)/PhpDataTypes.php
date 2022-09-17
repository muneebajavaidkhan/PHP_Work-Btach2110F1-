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

        class Colors{
            
            function Color(){
                $color_Name = "Green";
                echo "Color is: ".$color_Name;
            }
        }

        $objColor = new Colors();

        $objColor -> Color();
    
    ?>

    <h3>PHP STRING FUNCTION</h3>
     <?php
            $stringChar = "Hello Steve";
            $stringLen =   strlen($stringChar); //string length;
            $stringWordCount = str_word_count($stringChar); //Word Count
            $stringReverse = strrev($stringChar); //Reverse String

            $stringFind =  strpos($stringChar,"Steve"); //find String
            $stringReplace = str_replace("Steve","Diana",$stringChar); //Replace String

            echo "Length of string: <b> ".$stringChar. "</b> is ".$stringLen. "<br>";

            echo "Count the number of word: <b> ".$stringChar. "</b> is ".$stringWordCount. "<br>";

            echo "Reverse the string: <b> ".$stringChar. "</b> is ".$stringReverse. "<br>";

            echo "Find the string: <b> ".$stringChar. "</b> is ".$stringFind. "<br>";

            echo "Replace the string: <b> ".$stringChar. "</b> is ".$stringReplace. "<br>";
     ?>
     <h3>PHP MATH FUNCTIONS</h3>
     <?php
             echo "<h5>Area of Surface</h5>";
             $radius = 6;
             $surfaceArea = 4 * pi() * $radius * $radius;
             echo "Surface Area is: ".$surfaceArea. "<br>";
             echo (min(0,20,70,-90,-800));

     ?>
     <h3>PHP CONSTANT</h3>
     <?php
         echo  "<h5>CONSTANT VARIABLE</h5>";

         define("Hello","What new in PHP?",true);

        //  define("Hello","What something new in PHP?");

         echo hello;



         echo "<h5>GLobal Constant </h5>";

         define("HelloVar","Whats something new in PHP8?");

         function myTest(){
             echo HelloVar;
         }
         myTest();
     ?>

    <h3>LOCAL VARIABLES</h3>

    <?php

        function Test(){

            $x = 5;
            echo "<p>Variable x inside function is: " .$x. "</p>";

        }

        Test();
        echo "<p>Variable x outside function is: " .$x. "</p>";
    ?>

    <h3>GLOBAL VARIABLES</h3>
        <?php
             $y = 10;
             
             function Test1(){

                global $y;
                echo "<p>Variable y inside function is: " .$y. "</p>";
             }

            
             Test1();
             echo "<p>Variable y outside function is: " .$y. "</p>";
        ?>


<h3>Static Variable</h3>

<?php
    
    function static_variable(){
        static $b = 20;
        $a = 10;
        $b++;
        $a++;
        echo "static: ".$b. "<br>";
        echo "Non static: ".$a. "<br>";

    }
    static_variable(); //static: 21 //Non static : 11
    static_variable(); //static 22// Non static :11  
?>
<h3>PHP FUNCTION PARAMETER</h3>

<?php
    function multiply($value){ //10
        $value = $value * 20; 
        return $value;
    }
    $retrive =  multiply(10); //200
    $sum = $retrive + 4;
    echo "Return Value is: ".$sum;
?>
    



</body>
</html>