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
        echo "HELLO WORLD";

        $patientId = 123 ."<br>";
        
        echo "<br>";

        $dataType = var_dump(var_dump(3,3.1,true,"Hello",array(10,20,30,40)));

        $checkFloat = var_dump(is_float(16.25));

        $name = "<br> William";
        $str = $name. " is displayed";
        echo ($str);

        echo "\n";
        $str = $name. "is diplayed\n" ."GoodBye";
        echo ($str);
    ?>



    <p>Patient: <?= $patientId?></p>

    <p><?= $str?></p>

    <!-- Var dump display datatype -->


</body>
</html>
