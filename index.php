<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Spirit of Giving</title>
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
              <a class="dc nav-link text-primary fw-bold" href="login.php">SIGN IN</a>
            </li>
            <li class="nav-item">
              <a class="dc nav-link text-primary fw-bold" href="admin-login.php">ADMIN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="contain" style="margin-bottom: 80px;" id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
        <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></li>
        <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></li>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row d-flex align-items-center">
            <div class="col-6">
              <h1>Project Food</h1>
              <a>Every child has a right to a healthy meal. From lack of a school lunch program in the BD. To scarcity of resources overseas, WE Cause helping to stand in the gap. Give Today!</a>
              <br>
              <br>
              <button class="btn-clr" role="button"><span class="text"><a class="text-light " href="login.php" style="text-decoration: none;">Donate</a></span></button>
            </div>
            <div class="col-6">
              <img src="image/bg/bg (1).jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex align-items-center">
            <div class="col-6">
              <h1>Project Education</h1>
              <a>Education is the backbone of a nation. But many students drop out of school every year due to poverty. But our little cooperation can bring them back and ensure a beautiful future.  Let's provide educational help to underprivileged students for being better resource for breaking the poverty cycle of their life and ensure equal opportunities for students to be ready for career. Every year, we are providing education aid among thousands of students to equipped their lives with human values.  </a>
              <br>
              <button class="btn-clr" role="button"><span class="text"><a class="text-light " href="login.php" style="text-decoration: none;">Donate</a></span></button>
            </div>
            <div class="col-6">
              <img src="image/bg/bg (2).jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex align-items-center">
            <div class="col-6">
              <h1>Project Flood</h1>
              <a>Around 13 lakh people were affected in Sylhet city, including five Upazilas. 
                Surma and the Kushiyara rivers started flowing above the danger level.
                The heavy torrential rainfall in the north-eastern region and India's Meghalaya and Assam has left parts of the district paralysed since May 12. The cyclonic storm Asani worsened the situation.</a>
              <br>
              <br>
              <button class="btn-clr" role="button" ><span class="text"><a class="text-light " href="login.php" style="text-decoration: none;">Donate</a></span></button>
            </div>
            <div class="col-6">
              <img src="image/bg/bg (3).jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="divider1 d-flex align-items-center my-4">
    <p class="text-center fw-bold mx-3 mb-0 text-secondary">WAY TO HELP</p>
  </div>
  <div class="contain" style="margin-bottom: 80px;" id="phone">
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <a href="login.php"><img src="image/help/bg-1.jpg" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">Donate Money <a href="index.php"></a></h5>
            <p class="card-text">Cash transfers are not merely a way to help poor families climb out of poverty; rather, they are a tool for fostering longer-term social mobility.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <a href="login.php"><img src="image/help/bg-2.jpg" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">volunteer</h5>
            <p class="card-text">Volunteering is a voluntary act of an individual or group freely giving time and labour for community service</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <a href="login.php"><img src="image/help/bg-3.jpg" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">Medicine</h5>
            <p class="card-text"> Billions of poor people would benefit if pharmaceutical innovators could serve their urgent medical needs and be suitably rewarded.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contain" style="margin-bottom: 80px;" id="laptop">
    <div class="text d-flex justify-content-between">
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <a href="login.php"><img src="image/help/bg-4.png" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">Food</h5>
            <p class="card-text">Every child has a right to a healthy meal. From lack of a school lunch program in the US. To scarcity of resources overseas, WE Cause helping to stand in the gap. Give Today!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <a href="login.php"><img src="image/help/bg-5.jpg" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">Clothes</h5>
            <p class="card-text">Donate your clothes to the poor. No more waste.
              Social cohesion greatly facilitated by technology. Our mobile application will connect retailers with charities with the aim to help people from undeveloped areas to get the clothes they need.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <a href="login.php"><img src="image/help/bg-6.jpg" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">Sponser</h5>
            <p class="card-text">Children need your support, urgently. Kindly donate with an open arm and let us help the most vulnerable. By donating to Ak Taka Ahar you will be supporting children in Bangladesh</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="divider1 d-flex align-items-center my-4">
      <p class="text-center fw-bold mx-3 mb-0 text-secondary" >About US</p>
    </div>
    <div class=" bg-dark ">
        <div class="row">
          <div class="col-6">
            <h1 class="text-danger" style="margin-left: 90px; padding-top: 30px;">SPIRIT OF GIVING</h1>
            
            <br>
            <br>
            <p class="text-info" style="margin-left: 60px ;">A passionate group of people who wishes to inspire a nation and beyond. "Spirit of Giving" is an educational voluntary organization that originated from Bangladesh. "Spirit of Giving" has been operated by 40 professionals and with help of thousands of volunteers. Our mission is to globally foster philanthropic works. By designing innovative and inspiring programs, our goal is to engage students and professionals to work together to educate, empower and lift the underprivileged. One of our endeavors is to provide free education, educational materials and support. We have established libraries and a printing press for original publications. Our motto is to teach with compassion where a good human being is developed rather than a typical human who is only professionally equipped. Starting from volunteers, their children, refugees, street children and orphans, anyone with an underprivileged background is welcome at our door.</p>
          </div>
          <div class="col-6">
            <h1 class="text-danger"style="margin-left: 100px; margin-top:30px">MISSION & VISION</h1>
            <br>
            <br>
            <p class="text-info" style="margin-right: 40px;"><span class="text-danger"> Mission </span>: Our mission is to provide education, nourishment, mental and physical support to the distressed and to make people self sufficient by permanently rehabilitating them.</p>
            <p class="text-info"><span class="text-danger"> Vision </span> : Our vision is to spread humanity, kindness and bring social justice. We believe that good brings only more good and everyone deserves to live in a peaceful environment.</p>
          </div>
        </div>
        <footer class="d-flex justify-content-center text-light">
          ©2022. Spirit of giving. All rights reserved.  <span class="text-danger fw-bold">  Team PAN </span> , Bangladesh.
        </footer>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> 
</body>
</html>