<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>INDEXED ARRAY</h3>
    <?php
    $color = ['blue', 'Orange', 'Red', 'Pink'];
    echo "<p>$color[3]</p>";

    print_r($color);

    //Array using Loop
    echo '<ul>';

    for ($i = 0; $i <= 3; $i++) {
        //0//1//2//3

        echo "<li>Color[$i] => $color[$i] </li>";
    }
    echo '</ul>';
    ?>

    <h3>ASSOCIATIVE ARRAY</h3>

    <?php
    $students = ['Name' => 'Abc', 'Age' => 19, 'Education' => 'Inter'];

    echo '<pre>';
    print_r($students);
    echo '</pre>';

    foreach ($students as $Key => $Val) {
        echo "Students[$Key] => $Val <br>";
    }
    ?>

    <h3>MULTIDIMENSIONAL ARRAY</h3>

    <?php
    $Stud = [['Abc', 15, 5000], ['Xyz', 13, 5500], ['Efg', 16, 7500]];

    for ($row = 0; $row <= 2; $row++) {
        echo "<p> <b> Row Number $row </b></p>";
        echo '<ul>';

        for ($col = 0; $col <= 2; $col++) {
            echo "<li> Array[$row][$col] =>" . $Stud[$row][$col] . '</li>';
        }
        echo '</ul>';
    }
    ?>
<h3> MULTIDIMENSIONAL ARRAY IN Table View</h3>

    <?php $Emp = [
        ['fahad', 'Graduate', 21, '25000'],
        ['Sajid', 'Master', 22, '55000'],
        ['Saud', 'Inter', 23, '15000'],
        ['Ahmed', 'Mphill', 24, '35000'],
        ['Zahid', 'Civil Engineering', 25, '28000'],
    ]; ?>
    <table border = 1>
        

         <tr>
            <th>Name</th>
            <th>Education</th>
            <th>Age</th>
            <th>Salary</th>
         </tr>
        <?php
        for ($row = 0; $row < 5; $row++) {
            echo '<tr>';

            for ($col = 0; $col < 4; $col++) {
                echo '<td>' . $Emp[$row][$col] . '</td>';
            }
        }
        echo '</tr>';
        ?>

    </table>

    
</body>
</html>