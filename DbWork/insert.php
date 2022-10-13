<?php include 'header.php'; ?>

<?php include 'connection.php'; ?>


<!-- insert Work -->

<?php if (isset($_POST['ins'])) {
    $Name = $_POST['name'];
    $Gender = $_POST['gen'];
    $City = $_POST['city'];
    $Education = $_POST['edu'];
    $Fee = $_POST['fee'];
    $Cor = $_POST['Course'];
    $courses = implode(',', $Cor);

    $query = "insert into student(StduentName,Education,Fees,Gender,City,Courses) values ('$Name','$Education','$Fee','$Gender','$City','$courses')";

    $res = mysqli_query($con, $query);

    if ($res) {
        echo "<script>alert('Data Inserted');window.location.href = 'ViewData.php'</script>";
    } else {
        echo "<script>alert('Data Insertion Failed')</script>";
    }
} ?>



<!-- update Work -->
<?php if (isset($_POST['Up'])) {
    $stduentId = $_POST['StdID'];
    $Name = $_POST['name'];
    $Gender = $_POST['gen'];
    $City = $_POST['city'];
    $Education = $_POST['edu'];
    $Fee = $_POST['fee'];
    $Cor = $_POST['Course'];
    $courses = implode(',', $Cor);

    $query = "update student set StduentName = '$Name' ,Education = ' $Education ',Fees = '$Fee',
    Gender = ' $Gender' ,City = '$City',Courses = '$courses' where StdId = '$stduentId'";

    $res = mysqli_query($con, $query);

    if ($res) {
        echo "<script>alert('Data Updated');window.location.href = 'ViewData.php'</script>";
    } else {
        echo "<script>alert('Data Updation Failed')</script>";
    }
} ?>

<?php include 'footer.php'; ?>
