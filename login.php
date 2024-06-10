<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TN-Blood Donors | Else If Creations</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/images/navicon.png">
<link href="assets/images/navicon.png" rel="apple-touch-icon">
<!--Bootstrap CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!--Custome Css-->
<link rel="stylesheet" href="assets/css/style.css">
<!--Font awsome-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
</head>
<body class="vh-100">
<!--Nav BAR-->
<?php
include 'include/navbar.php';
?>
<!--Nav BAR END-->

<!--body content start-->




<!--body content start-->
<div class="container mt-3">
  


  <div class="row justify-content-center align-items-center vh-100">
    <div class="col col-sm-6 col-md-6 col-lg-5 col-xl-5 col-xxl-4 bglight p-5 rounded-sm rounded-3 border shadow-lg" >

    <h4 class="text-center"> Log In</h4>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"  class="form" enctype="multipart/form-data" id="frm1" autocomplete="off">  
        <div class="mb-3">
            <label for="Email" class="form-label">Enter Your Email</label>
            <input class="form-control" type="text"  id="email" name="email" placeholder="Enter Email ">
          </div>
          <div class="mb-3">
            <label for="Password" class="form-label">Enter Your Confirm Password</label>
            <input type="password" class="form-control txtPassword" placeholder="Confirm Password"  name="txtPassword" id="txtPassword">
          </div>
         
          <div class="form-group">
            <label class="showLabel">
            <input type="checkbox" id="show"> 
            Show Password
            </label>
            </div>

            
            <div class="d-grid  text-center mx-auto mt-3 mb-2">
            <a href="about-us.html"><input type="submit" class="btn btn-danger col-12 gloabla_btn float-right" id="submit" name="submit" value="Login Now"></input></a>    
          </div>
        
        </form>

    </div>
    </div>

  

</div>
<!--body content End-->










 <!--Footer Start-->
 <?php
include 'include/footer.php';
?>
 <!--Footer End-->



<!--body content End-->
<!--Bootstrap Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>