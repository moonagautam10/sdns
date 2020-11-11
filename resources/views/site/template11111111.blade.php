<!DOCTYPE html>
<html>
<head>
	<title>Shree Deupur Namuna School</title>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
<body>
	<section id="topheader">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h6>Shree Daupur Namuna School</h6>
				</div>
			</div>
		</div>
	</section>
	<section id="header">
		<div class="container">
			<div class="row">
          <div class="col-md-3">
              <img src="{{asset('img/logo.png')}}" style="height: 150px; width:150px;">
          </div>
				
				<div class="col-md-9">
					<div class="menu">
       <nav class="navbar navbar-expand-lg ">
        <div class="collapse navbar-collapse" >
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">photo</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Contact Us</a>
                  </li>
              </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>     
          </div>
				</div>
			</div>
		<div>
	</section>
      <section id="carousel">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/slider1.jpg" class="d-block w-100" alt="..." style="height: 700px;">
            </div>
            <div class="carousel-item">
              <img src="img/slider2.jpg" class="d-block w-100" alt="..." style="height: 700px;">
            </div>
            <div class="carousel-item">
              <img src="img/slider2.jpg" class="d-block w-100" alt="..." style="height: 700px;">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </section>
    <section id="about">
        <div class="col-md-6">
            <img src="{{asset('img/aboutimg.jpg')}}">
        </div>   
        <div class="col-md-6">
          <span><h3>About Us</h3></span>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p> </div>      
    </section>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>