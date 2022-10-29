<?php session_start();

session_destroy();

echo "<script>window.location.href = '../MainLayout/login.php'</script>";

?>
