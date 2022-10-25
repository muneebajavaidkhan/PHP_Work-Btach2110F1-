<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>



<div class = 'container mt-5'>

        
                <H1 class =  "text-center">LOGIN FORM</H1>

                <form action="login.php" method = "post">
                    <div class="row mt-5">

                        

                        <div class="col-sm-12 col-lg-6 mt-5">

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="Pass">Password:</label>
                                <input type="password" class="form-control" id="Pass" placeholder="Enter Your Password" name="Pass" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" value = "Login Account" class = "btn btn-primary" name = "btn">
                            </div>
                            <p class = "text-center">Don't Have an Account <a href="register.php">Signup</a></p>
                        </div>



                        <div class="col-sm-12 col-lg-6 ">
                            <img src="images/img2.jpg" alt="dummyImage" style = "width:350px;height:280px;margin-left:95px">
                        </div>

                    </div>
                  
                </form>


         

</div>




