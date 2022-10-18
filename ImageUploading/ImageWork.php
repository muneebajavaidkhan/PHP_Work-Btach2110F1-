
<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<div class = "container">
    <h1 class = "text-center mt-5 font-weight-bold" style = "text-shadow: 4px 4px rgb(91, 172, 226);">Image Uploading Work</h1>

    <div class = "row justify-content-center align-self-center">

    <form action="ImageWork.php" method = "post" enctype="multipart/form-data">

        <div class = "col-lg-6 container">

                <div class="d-flex flex-column align-items-center text-center  user-profile-image">

                <input class="form-control" type="file" id="Pro_Image" name="uploaded" style="visibility: hidden;" />

                    <img class="mt-5" style="width:350px;" src="images/noImg.jpg" id="UserImage">

                    <div class="upload-photo text-center ">
                        <br />
                        <img src="images/camera.png" alt="cameraImg"  class = "img-responsive" >
                       
                    </div>
                </div>
        </div>

        <input type="submit" value = "submit" class = "btn btn-primary mt-5 ml-5" style = "width:300px;" name = "btn">

    </form>



    </div>
</div>


<script>
        $(document).ready(function () {


            $(".upload-photo").click(function () {
               $("#Pro_Image").trigger('click')
            })

            $("#UserImage").click(function () {
                $("#Pro_Image").trigger('click')
            })


            $("#Pro_Image").change(function () {
                if (this.files && this.files[0]) {
                    var fileReader = new FileReader();
                    fileReader.readAsDataURL(this.files[0]);
                    fileReader.onload = function (x) {
                        $("#UserImage").attr('src', x.target.result);
                    }
                }
            })
        })
    </script>




    <?php if (isset($_POST['btn'])) {
        // $FileProp = $_FILES['uploaded'];
        // echo '<pre>';
        // print_r($FileProp);
        // echo '</pre>';
        $FileName = $_FILES['uploaded']['name'];
        $FileType = $_FILES['uploaded']['type'];
        $FiletempLoc = $_FILES['uploaded']['tmp_name'];
        $FileSize = $_FILES['uploaded']['size'];

        $folder = 'images/';

        if (
            strtolower($FileType) == 'image/png' ||
            strtolower($FileType) == 'image/jpg' ||
            strtolower($FileType) == 'image/jpeg'
        ) {
            if ($FileSize <= 1000000) {
                //1MB

                $folder = $folder . $FileName; //   images/1.png

                $query = "insert into imageupload (Images) values ('$folder')";
                $res = mysqli_query($con, $query);

                if ($res) {
                    echo "<script>alert('Insert Successfully!')</script>";
                    move_uploaded_file($FiletempLoc, $folder);
                } else {
                    echo "<script>alert('Insert Failed!')</script>";
                }
            } else {
                echo "<script>alert('Size Should be less than 1 MB')</script>";
            }
        } else {
            echo "<script>alert('Image Formate should not be supported!!')</script>";
        }
    } ?>



</body>
</html>