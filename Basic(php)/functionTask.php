<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="functionTask.php" method = "post">


        <input type="number" name = "num1" placeholder = "Enter Your Weekly Sales">
        <input type="number" name = "num2" placeholder = "Enter Your Commision Rate">
        <input type="Submit" value = "Calculate" name = "ChckNum">
 
    </form>

    <?php
        if(isset($_POST["ChckNum"]))
        {
          $number1 = (float)htmlspecialchars($_POST['num1']);
          $number2 = (float)htmlspecialchars($_POST['num2']);
        
        function Commision($WkSal,$ComRate){

            return $WkSal * $ComRate / 100;

        }
        $result = Commision($number1,$number2);
        }
    ?>

<br>
<table border = 1>
    <tr>
      <td>Weekly Sale</td>
      <td> <?= @$number1 ?></td>
    </tr>
    <tr>
      <td>Commision Rate</td>
      <td> <?= @$number2 ?> </td>
    </tr>
    <tr>
      <td>Commisin Amount</td>
      <td> <?=  @$result ?> </td>
    </tr>
</table>
</body>
</html>