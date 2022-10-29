
<?php include 'header.php'; ?>
<?php session_start(); ?>


<?php if (isset($_SESSION['db_name'])) {
    if ($_SESSION['db_name'] != 'Admin') {
        echo "<script>window.location.href = '../MainLayout/login.php'</script>";
    }
} ?>

    <h1>ADMIN DASHBOARD</h1>
