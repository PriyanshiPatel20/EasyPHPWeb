<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  
        <title>Website</title>
</head>
<body>
    
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img3.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image1.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-3">
        <h2 class="text-center">About Us</h2>
    </div> 
    <div class="container-fluid">  
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 ">  
                    <img src="images/bird1.jpeg" class="img-fluid aboutimg" alt=""> 
                </div>
                <div class="col-lg-6 col-md-6 col-12 ">  
                 <h2>I am Priyanshi Patel</h2> 
                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores reprehenderit consectetur quae laboriosam, provident esse, accusamus voluptates aspernatur earum incidunt voluptatibus fugiat eius! Saepe, non. Minus tempora deserunt amet mollitia?</p>
                <a href="about.php" class="btn btn-outline-success">Check More</a>
                </div>
            </div>
    </div>  
</section>

<section class="my-5">
    <div class="py-3">
        <h2 class="text-center">Our Services</h2>
    </div> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" >
                        <img class="card-img-top" src="images/nature1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                        
                        </div>
                        
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" >
                        <img class="card-img-top" src="images/nature2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                        
                        </div>
                        
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" >
                        <img class="card-img-top" src="images/nature3.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                        
                        </div>
                        
            </div>
        </div>

    </div>


    <section class="my-5">
    <div class="py-3">
        <h2 class="text-center">Our Gallery</h2>
    </div> 
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/bird2.jpg" class="img-fluid pb-3" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pic3.jpeg" class="img-fluid pb-3" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/animal1.jpg" class="img-fluid pb-3" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/animal2.jpeg" class="img-fluid pb-3" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pic2.jpeg" class="img-fluid pb-4" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/fish1.jpg" class="img-fluid pb-4" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/animal3.jpg" class="img-fluid pb-4" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/fish3.jpg" class="img-fluid pb-4" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pic2.jpeg" class="img-fluid pb-4" alt="">
        </div>

    </div>
    </div>
    </section>

    <section class="my-5">
    <div class="py-3">
        <h2 class="text-center">Registration Form</h2>
    </div> 
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" class="form-control">
                </div>
               
                <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    </section>
<fotter>
    <p class="p-3 bg-dark text-white text-center" >@priyanshipatelProduction</p>
</fotter>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>