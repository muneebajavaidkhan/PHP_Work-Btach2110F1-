
<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>



<div class="container-fluid full-bg h-100">
    <div class="container h-100">
        <form action="signup.php" method="post" enctype="multipart/form-data" class = "mt-5">
            <div class="row no-margin h-100">
                <div class="bg-layer d-flex col-md-4">
                    <div class="login-box row">
                        <h3>User Registeration</h3>


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Full Name" aria-label="Username"
                                aria-describedby="basic-addon1" name="name" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email Address" aria-label="Username"
                                aria-describedby="basic-addon1" name="email" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Phone Number" aria-label="PhoneNum"
                                aria-describedby="basic-addon1" name="phone" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Username"
                                aria-describedby="basic-addon1" name="Pass" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Repeat Password" aria-label="Username"
                                aria-describedby="basic-addon1" name="repPass" required>
                        </div>




                        <button type="submit" class="btn btn-success" name="btn">Click to Login</button>

                        <p class="no-c">Already have Account? <a href="login.php">Sign In</a></p>

                    </div>
                </div>
            </div>
        </form>
        <div class="foter-credit">
            <a href="https://smarteyeapps.com/">Designed by : Smarteyeapps.com</a>
        </div>
    </div>

</div>


<?php if (isset($_POST['btn'])) {
    $Name = $_POST['name'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Password = $_POST['Pass'];
    $ConfPass = $_POST['repPass'];
    $Pass = password_hash($Password, PASSWORD_BCRYPT);
    $CPass = password_hash($ConfPass, PASSWORD_BCRYPT);
    $Emailquery = "select * from register where Email = '$Email'"; //xyz@gmail.com
    $rs = mysqli_query($con, $Emailquery);
    if (mysqli_num_rows($rs) > 0) {
        //1 > 0
        echo "<script>alert('Email Already Exist')</script>";
    } else {
        if ($Password === $ConfPass) {
            $Insquery = "insert into register (Name,PhoneNum,Email,Password,CPassword) values ('$Name','$Phone','$Email','$Pass','$CPass')";
            $res = mysqli_query($con, $Insquery);
            if ($res) {
                echo "<script>alert('Data Inserted')</script>";
            } else {
                echo "<script>alert('Data not Inserted')</script>";
            }
        } else {
            echo "<script>alert('Password not matching')</script>";
        }
    }
} ?>


