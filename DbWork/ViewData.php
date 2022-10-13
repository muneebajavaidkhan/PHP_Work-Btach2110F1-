<?php include 'header.php'; ?>

<?php include 'connection.php'; ?>



<?php
$querys = 'select * from student';
($res = mysqli_query($con, $querys)) or die('Incorrect Querry');
// $data = mysqli_fetch_assoc($res);
// echo '<pre>';
// print_r($data);
// echo '</pre>';

$rowCount = mysqli_num_rows($res);

if ($rowCount > 0) { ?>

    <table class = "container table table-bordered mt-5">

        <tr>
            <th>StudentId</th>
            <th>Name</th>
            <th>Fees</th>
            <th>Education</th>
            <th>Gender</th>
            <th>Courses</th>
            <th>City</th>
            <th></th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($res)) {
            echo '<tr>'; ?>

                        <td><?= $data['StdId'] ?></td>
                        <td> <?= $data['StduentName'] ?></td>
                        <td><?= $data['Fees'] ?></td>
                        <td><?= $data['Education'] ?></td>
                        <td><?= $data['Gender'] ?></td>
                        <td><?= $data['Courses'] ?></td>
                        <td><?= $data['City'] ?></td>
                        <td> <a href="Edit.php?id=<?= $data[
                            'StdId'
                        ] ?>" class = "btn btn-primary">Edit</a> </td>
                        <td> <a href="ViewData.php?Delid=<?= $data[
                            'StdId'
                        ] ?>" class = "btn btn-danger" onclick = 
                        "return confirm('Are you sure you want to delete');return false;">Delete</a> </td>



        <?php echo '</tr>';
        } ?>
    
    
    </table>




<?php } else {echo '<p>No Records Found</p>';}

error_reporting(0);

$DelID = $_GET['Delid'];

$query = "delete from student where StdId = $DelID";

$res = mysqli_query($con, $query);

if ($res) {
    echo "<script>alert('Data Deleted!!');window.location.href = 'ViewData.php';</script>";
}
?>


<?php include 'footer.php'; ?>
