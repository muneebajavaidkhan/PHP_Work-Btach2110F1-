<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>


<?php
$ID = $_GET['id'];
$query = "select * from student where StdId = $ID";
$getData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($getData);
$checkEdit = $res['Courses'];
$checkBox = explode(',', $checkEdit);
print_r($checkBox);
?>



<div class="container"> <br>
  <h3>Update Data In DataBase</h3> <br>

  <form action="insert.php" method = "post">


    <input type="hidden"  name="StdID" value = <?= $res['StdId'] ?>  >

    <div class="form-group">
      <label for="name">StudentName:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name" value = <?= $res[
          'StduentName'
      ] ?>  >
    </div>

    <div class="form-group">
      <label for="gen">Gender:</label>
          <div class="form-check-inline ml-3">
            <label class="form-check-label">
              Male: <input type="radio" class="form-check-input" name="gen" value = "Male"
              
                <?php if ($res['Gender'] == 'Male') {
                    echo 'checked';
                } ?>
              >
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              Female: <input type="radio" class="form-check-input" name="gen" value = "Female"
              
              <?php if ($res['Gender'] == 'Female') {
                  echo 'checked';
              } ?> 
              >
            </label>
          </div>
    </div>

  
    <div class="form-group">
      <label for="city">Select City:</label>
      <select class="form-control" id="city" name = "city">
        <option value="">--Select--</option>
        <option value = "Karachi"  <?php if ($res['City'] == 'Karachi') {
            echo 'selected';
        } ?>>Karachi</option>
        <option value = "Lahore"  <?php if ($res['City'] == 'Lahore') {
            echo 'selected';
        } ?> >Lahore</option>
        <option value = "Islamabad" <?php if ($res['City'] == 'Islamabad') {
            echo 'selected';
        } ?>>Islamabad</option>
        <option value = "Peshawar" <?php if ($res['City'] == 'Peshawar') {
            echo 'selected';
        } ?>>Peshawar</option>
      </select>
    </div>



     <div class="form-group">
      <label for="course">Select Courses:</label>
          <div class="form-check-inline ml-4">
            <label class="form-check-label">
              MVC <input type="checkbox" class="form-check-input" value="MVC" name = "Course[]"
                <?php if (in_array('MVC', $checkBox)) {
                    echo 'checked';
                } ?>
              >
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              PHP <input type="checkbox" class="form-check-input" value="PHP" name = "Course[]"
              <?php if (in_array('PHP', $checkBox)) {
                  echo 'checked';
              } ?>>
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              MY SQL <input type="checkbox" class="form-check-input" value="MYSQL" name = "Course[]"
              <?php if (in_array('MYSQL', $checkBox)) {
                  echo 'checked';
              } ?>>
            </label>
          </div>
    </div>

    <div class="form-group">
      <label for="pwd">Education:</label>
      <input type="text" class="form-control" id="edu" placeholder="Enter your Education" name="edu" value = <?= $res[
          'Education'
      ] ?>  >
    </div>

    <div class="form-group">
      <label for="fee">Fees:</label>
      <input type="number" class="form-control" id="fee" placeholder="Enter your Fees" name="fee" value = <?= $res[
          'Fees'
      ] ?> >
    </div>



    

    <button type="submit" class="btn btn-primary" name = "Up">Update</button>
  </form>
</div>

















<?php include 'footer.php'; ?>
