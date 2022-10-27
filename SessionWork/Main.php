<?php include 'header.php'; ?>
<?php session_start(); ?>


<?php if (!isset($_SESSION['db_name'])) {
    header('location:login.php');
} ?>
<h1>   <?= $_SESSION['db_name'] ?> </h1>


<a href="logout.php" class = "btn btn-primary">Logout</a>