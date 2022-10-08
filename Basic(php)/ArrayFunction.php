<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>SORT FUNCTION APPLY INDEXED ARRAY</h3>

    <?php
    $color = ['Blue', 'Orange', 'Red', 'Pink'];

    array_push($color, 'LightBlue');

    array_pop($color);

    $n = count($color);

    echo $n;

    // sort($color); //asending
    // rsort($color);

    //Array using Loop
    echo '<ul>';

    for ($i = 0; $i < $n; $i++) {
        echo "<li>Color[$i] => $color[$i] </li>";
    }
    echo '</ul>';
    ?>


     <h3>ASSOCIATIVE ARRAY ASSENDING ORDER</h3>

    <?php
    $students = ['Name' => 'Abc', 'Age' => 19, 'Education' => 'Inter'];

    // asort($students);
    ksort($students);
    foreach ($students as $Key => $Val) {
        echo "Students[$Key] => $Val <br>";
    }
    ?>


     <h3>ASSOCIATIVE ARRAY DESSENDING ORDER</h3>

    <?php
    $students = ['Name' => 'Abc', 'Age' => 19, 'Education' => 'Inter'];

    // arsort($students); //value
    krsort($students); //key
    foreach ($students as $Key => $Val) {
        echo "Students[$Key] => $Val <br>";
    }
    ?>
    
</body>
</html>