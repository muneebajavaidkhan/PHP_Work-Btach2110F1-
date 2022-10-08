
<?php include 'header.php'; ?>

  

<div class="container"> <br>
  <h3>Insert Data In DataBase</h3> <br>

  <form action="insert.php" method = "post">

    <div class="form-group">
      <label for="name">StudentName:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name">
    </div>

    <div class="form-group">
      <label for="gen">Gender:</label>
          <div class="form-check-inline ml-3">
            <label class="form-check-label">
              Male: <input type="radio" class="form-check-input" name="gen" value = "Male">
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              Female: <input type="radio" class="form-check-input" name="gen" value = "Female">
            </label>
          </div>
    </div>

  
    <div class="form-group">
      <label for="city">Select City:</label>
      <select class="form-control" id="city" name = "city">
        <option value="">--Select--</option>
        <option value = "Karachi">Karachi</option>
        <option value = "Lahore">Lahore</option>
        <option value = "Islamabad">Islamabad</option>
        <option value = "Peshawar">Peshawar</option>
      </select>
    </div>



     <div class="form-group">
      <label for="course">Select Courses:</label>
          <div class="form-check-inline ml-4">
            <label class="form-check-label">
              MVC <input type="checkbox" class="form-check-input" value="MVC" name = "Course[]">
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              PHP <input type="checkbox" class="form-check-input" value="PHP" name = "Course[]">
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              MY SQL <input type="checkbox" class="form-check-input" value="MYSQL" name = "Course[]">
            </label>
          </div>
    </div>

    <div class="form-group">
      <label for="pwd">Education:</label>
      <input type="text" class="form-control" id="edu" placeholder="Enter your Education" name="edu">
    </div>

    <div class="form-group">
      <label for="fee">Fees:</label>
      <input type="number" class="form-control" id="fee" placeholder="Enter your Fees" name="fee">
    </div>



    

    <button type="submit" class="btn btn-primary" name = "ins">Submit</button>
  </form>
</div>


<?php include 'footer.php'; ?>
