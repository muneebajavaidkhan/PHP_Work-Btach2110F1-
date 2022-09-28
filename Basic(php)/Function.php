<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Simple Function</h3>
    <?php
    function Add()
    {
        $num1 = 90;
        $num2 = 80;
        $res = $num1 + $num2;
        echo "Result is: $res";
    }
    Add();
    echo '<br>';
    Add();
    ?>

    <h3>PARAMTERIZED FUNCTION</h3>

    <?php
    function Avg($n1, $n2, $n3)
    {
        //parameters

        $Sum = $n1 + $n2 + $n3;
        $Average = $Sum / 3;

        echo "Average result is: $Average";

        return $Average;
    }
    $res = Avg(30, 70, 90);
    $Result = $res + 4;
    echo '<br>';
    echo $Result;
    ?>

<h3>Default PARAMTERIZED FUNCTION</h3>
<?php
function WithDefault($name, $Age = 12)
{
    echo "Name is $name And Age is $Age";
}
WithDefault('Abc', 19);
echo '<br>';
WithDefault('Xyz');
?>

<h3>Function Pass By Value And Pass By Reference</h3>
<?php
function Val($num)
{
    $num += 4;
    echo "Pass By Value is: $num <br>";
}
$n = 10;
Val($n);
echo "The original value i still $n <br>";

function Ref(&$num)
{
    $num += 5;
    echo "Ref By Value is: $num <br>";
}
$n = 10;
Ref($n);
echo "The original changed is $n <br>";
?>


</body>
</html>