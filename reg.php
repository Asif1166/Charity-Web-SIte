

<?php

include 'config.php';
error_reporting(0);

session_start();

if (isset($_SESSION['name'])) {
  header("Location: login.php");
}

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   if ($pass == $cpass) {
   $sql = "SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($con, $sql);

   if(!$result->num_rows > 0){
    $sql = "INSERT INTO user(name,email,password) VALUES('$name','$email','$pass')";
    $result = mysqli_query($con, $sql);
    
    if ($result){
      echo "<script>alert('Wow! User Registration Completed.')</script>";
      $name = "";
      $email = "";
      $_POST['password'] = "";
      $_POST['cpassword'] = "";
    } else{

      echo "<script>alert('Woops! Something Wrong Went.')</script>";
      } 
    } else{
      echo "<script>alert('Woops! Email Already Exists.')</script>";
      }
   } else {
    echo "<script>alert('Password Not Matched.')</script>";
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
  <title>Registration</title>
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
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
  
                  <form action="" method="POST" class="mx-1 mx-md-4">

         
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" name="name" class="form-control" value="<?php echo $name; ?>" required/>
                        <label class="form-label" for="form3Example1c" >Your Name</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example3c" name="email" class="form-control" value="<?php echo $email; ?>" required/>
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4c" name="password" class="form-control" value="<?php echo $_POST['password']; ?>" required/>
                        <label class="form-label" for="form3Example4c">Password</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4cd" name="cpassword" class="form-control" value="<?php echo $_POST['cpassword']; ?>" required/>
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      </div>
                    </div>

  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
                    </div>

                    <p>already a user?<a href="login.php"><b> Log in</b></a></p>
  
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
</html>