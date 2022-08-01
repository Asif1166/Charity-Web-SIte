<?php

include 'config.php';
 session_start();

 error_reporting(0);

 if (isset($_SESSION['name'])) {
  header("Location: home.php");
}

 if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = md5($_POST['password']);

  $sql = " SELECT * FROM `admin` WHERE email = '$email' && password = '$pass' ";
  $result = mysqli_query($con, $sql);

  if($result -> num_rows > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['name'] = $row['name'];
    header('location: admin/index.php');
    
  }else{
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
  <link rel="stylesheet" href="style.css">
  
  <title>login</title>
</head>
<body>
<div class="container ">
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
      <div class="container-fluid">
        <div class="col-8  fw-bold" style="padding-left: 100px;" >
          <a class="navbar-brand text-danger" href="index.html">SPIRIT OF GIVING</a>
        </div>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-4 " id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="dc nav-link active text-light fw-bold" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="dc nav-link text-light fw-bold" href="gallery.php">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="dc nav-link text-light fw-bold" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="dc nav-link text-light fw-bold" href="login.php">DONATION</a>
            </li>
            <li class="nav-item">
              <a class="dc nav-link text-primary fw-bold" href="reg.php">SIGN UP</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

<section class="text-center text-lg-start">
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 25%, 36%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5" style="color: rgb(46, 43, 43);">Sign In </h2>

            <form action="" method="POST">
       


              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" required placeholder="Type your E-mail" name="email" value="<?php echo $email; ?>" required/>
                <label class="form-label" for="form3Example3"></label>
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control"required placeholder="Type your Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <a href="#!" class="text-body d-flex justify-content-end">Forgot password?</a>              
                <button type="submit" class="btn btn-primary btn-block mb-4" name="submit" value="login now">
                  <a class="text-light" >Log in</a>
                </button>
              </div>
              <div class="text-center fw-bold">
                <p> <u> A Little Help Can Make Their Hearts Happier.</u></p>
              </div>
              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Or</p>
              </div>
              <div class="d-flex align-items-center justify-content-center ">
                <p class="lead fw-normal mb-0 me-3">Sign in with :</p>
                <button type="button" class="btn btn-primary btn-floating mx-2 " >
                  <i class="bi bi-facebook"></i>
                </button>
    
                <button type="button" class="btn btn-primary btn-floating mx-2 ">
                  <i class="bi bi-twitter"></i>
                </button>
    
                <button type="button" class="btn btn-primary btn-floating mx-2">
                  <i class="bi bi-linkedin"></i>
                </button>
              </div>
              
              <br>

              <div>
                <p class="mb-0">Don't have an account? <a href="reg.php" class="text-blue-50 fw-bold">Register</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="image/poor.jpg" class="w-100 rounded-4 shadow-4"
          alt="A picture" />
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> 
</body>
</html>