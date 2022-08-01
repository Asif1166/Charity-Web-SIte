<?php
include 'config.php';

if(isset($_POST['submit'])){


  $name=$_POST['name'];
  $email=$_POST['email'];
  $clothes=$_POST['clothes'];
  $quantity=$_POST['quantity'];
  $city=$_POST['city'];
  $area=$_POST['area'];
  $mobile=$_POST['mobile'];

  $sql="insert into `clothes` (name,email,clothes,quantity,city,area,mobile)
  values('$name','$email','$clothes','$quantity','$city','$area','$mobile')";

  $result=mysqli_query($con, $sql);

  if($result){
    echo "<script>alert('Thanks for your Donation')</script>";

  }else{
    echo "<script>alert('Woops! Something Wrong Went.')</script>";
  }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <title>Clothes</title>
</head>
<body>
  <section class="vh-100" style="background-image: url(image/back1.jpg);">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Be a part of us!</p>
  
                  <form action="" method="POST" class="mx-1 mx-md-4">
  
                    <div class="d-flex flex-row align-items-center mb-4">
                    
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" name="name" id="form3Example1c" class="form-control"  placeholder="Your full name" required/>
                        <label class="form-label" for="form3Example1c">Your Name</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                    
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" name="email" id="form3Example3c" class="form-control" placeholder="example@gmail.com" />
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      </div>
                    </div>
                    
                      <div class="form-group mb-4">
                        
                        <input type="text" name="clothes" class="form-control" id="inputAddress2" placeholder="shirt,pant,jersey etc" required>
                        <label for="inputAddress2">Clothes</label>
                      </div>
                      <div class="form-inline mb-4">   
                      <select class="custom-select" id="inlineFormCustomSelectPref" name="quantity">
                            <option selected>Choose...</option>
                            <option value="1">1pcs</option>
                            <option value="2">2pcs</option>
                            <option value="3">more</option>
                        </select>
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">How many would you like to donate?</label>
                      </div>
                      <div class="form-row mb-4">
                        <div class="form-group col-6">
                          <label for="inputCity">City</label>
                          <input type="text" name="city" class="form-control" id="inputCity" placeholder="Dhaka">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputCity">Area</label>
                            <input type="text" name="area" class="form-control" id="inputCity" placeholder="Mirpur">
                          </div>
                        <div class="form-group col-6">
                          <label for="mobile">Phone</label>
                          <input type="text" name="mobile" class="form-control" id="mobile" placeholder="phone No." required>
                        </div>
                      </div>

  
                    
                    <div class="text-center fw-bold">
                        <p> <u> A Little Help Can Make Their Hearts Happier.</u></p>
                      </div>
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" name="submit" class="btn btn-primary btn-lg">Donate</button>
                    </div>
  
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="image/reg.jpg"
                    class="img-fluid" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> 
</body>
</html>>