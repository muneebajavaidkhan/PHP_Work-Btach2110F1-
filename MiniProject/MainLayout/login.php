<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>
<div class="container-fluid full-bg h-100">
    <div class="container h-100 mt-5">
        <form action="login.php" method="post" enctype="multipart/form-data" class="mt-5">

            <div class="row no-margin h-100">
                <div class="bg-layer d-flex col-md-4">
                    <div class="login-box row">
                        <h3>User login</h3>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email Address" aria-label="Username"
                                aria-describedby="basic-addon1" name="email" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Username"
                                aria-describedby="basic-addon1" name="Pass" required>
                        </div>


                        <p>
                            <label class="container">
                                <input type="checkbox">
                                <span class="checkmark"></span>Remember me
                            </label>
                            forget password ?
                        </p>
                        <button class="btn btn-success" type = submit name = "btn">Click to Login</button>

                        <p class="no-c">Not a member yet? <a href="signup.php">Create your Account</a></p>
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
    $Email = $_POST['email'];
    $Password = $_POST['Pass'];
    $EmailSearch = "select * from register where Email = '$Email'";
    $query = mysqli_query($con, $EmailSearch); //abc@gmail.com
    $EmailCount = mysqli_num_rows($query);
    //1
    if ($EmailCount) {
        $res = mysqli_fetch_assoc($query);
        $db_Pass = $res['Password'];
        $_SESSION['db_name'] = $res['Name'];
        $pass_decode = password_verify($Password, $db_Pass);
        if ($pass_decode) {
            if ($_SESSION['db_name'] == 'Admin') {
                echo "<script>window.location.href = '../AdminLayout/main.php'</script>";
            } else {
                echo "<script>alert('Login Successful');window.location.href = 'index.php'</script>"; // header('location:index.php');
            }
        } else {
            echo "<script>alert('Login Failed')</script>";
        }
    } else {
        echo "<script>alert('Invalid Email')</script>";
    }
} ?>
