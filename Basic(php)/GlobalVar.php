<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
  <h2>POST form Example</h2>
  <form action = "GlobalVar.php" method = "post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="pswd">
    </div>
   
    <input type="submit" value = "submit" name = "btn" class = "btn btn-primary">
  </form>
</div>


<?php

if(isset($_POST['btn'])){

    $result1 = $_POST['email'];
    $result2 = $_POST['pswd'];
}
?>
<p>Email:   <?=  @$result1 ?></p>
<p>Password:   <?=  @$result2 ?></p>

<h3>GLOBAL VARIABLE</h3>
<?php
  $x = 5;
  $y = 10;
  
  function addition(){
  
    
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

  }
addition();
echo $z;
?>


<h3>$_SERVER VARIABLE</h3>



<?php

  echo $_SERVER['HTTP_HOST'];

  echo "<br>";

  echo $_SERVER['SERVER_NAME'];

  echo "<br>";
  echo $_SERVER['SCRIPT_NAME'];


?>

<h3>GET WORK</h3>

<div class="container">
  <h2>GET form Example</h2>
  <form action = "ex.php" method = "get">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="pswd">
    </div>
   
    <input type="submit" value = "submit" name = "btn" class = "btn btn-primary">
  </form>
</div>

</body>
</html>




