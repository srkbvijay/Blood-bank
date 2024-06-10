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
<body>
<!--Nav BAR-->
<?php
include 'include/navbar.php';
?>
<!--Nav BAR END-->

<!--body content start-->



<div class="container">

<h1 class="display-5 heading1 fw-bold lh-1 mt-5">Register Your Hospital</h1>
        <div class="underline mb-1"></div>
       

<form class="row g-3">
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Hospital Name</label>
    <input type="text" class="form-control" name="hospital_name"  id="hospital_name" placeholder="Hospital Name">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Hospital Registration Number</label>
    <input type="text" class="form-control" name="hospital_reg"  id="hospital_reg" placeholder="Hospital Registration Number">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Health Care Provider Type:</label>
    <select id="inputState" class="form-select">
      <option  value="" hidden selected>Choose...</option>
      <option value="Hospital">Hospital</option>
      <option value="Dispensary">Dispensary</option>
      <option value="Community Health Centre">Community Health Centre</option>
      <option value="Nursing Home">Nursing Home</option>
      <option value="Medical College / Institute">Medical College / Institute</option>
      <option value="Sub Centre">Sub Centre</option>
      <option value="Poly Clinic">Poly Clinic</option>
      <option value="Primary Health Centre">Primary Health Centre/option>
      <option value="Clinic">Clinic</option>
      <option value="Others">Others</option>
    </select>
  </div>


  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">  Telephone / Landline (STD + NUMBER)</label>
     <input type="text" class="form-control" id="telephone_number" name="telephone_number" placeholder="Telephone Number">   
  </div>

  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">  Mobile Number</label>
     <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Mobile Number">
   
  </div>


  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Hospital Primary Email Id</label>
    <input type="email" class="form-control" id="email" name="emali" placeholder="Hospital Primary Email Id">
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Hospital Website</label>
    <input type="email" class="form-control" id="website" name="website" placeholder="Hospital Website">
  </div> 

  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>

  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">User Name</label>
    <input type="password" class="form-control" name="user_name" id="user_name">
  </div>

  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>

  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password">
  </div>


  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       I authorise this website to display my name and telephone number, so that the needy could contact me, as and when there is an emergency.
      </label>
    </div>
  </div>
  <div class="col-12">
  <div class="d-grid  text-center mx-auto mt-2 mb-2">
            <a href="about-us.html"><input type="submit" class="btn btn-danger gloabla_btn float-right" id="submit" name="submit" value="Register Now"></input></a>    
          </div>
  </div>
</form>
</div>















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