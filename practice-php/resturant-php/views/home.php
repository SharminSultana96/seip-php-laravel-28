<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
<!--nav section start-->
    <nav class="navbar navbar-expand-md bg-secondary-subtle">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">About</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Menu one</a></li>
                        <li><a href="" class="dropdown-item">Menu two</a></li>
                        <li><a href="" class="dropdown-item">Menu three</a></li>
                    </ul>
                </li>
                <li><a href="" class="nav-link">Gallery</a></li>
                <li><a href="" class="nav-link">contact</a></li>
            </ul>
        </div>
    </nav>
<!--nav section end-->

<!--banner section start-->
<div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/banner1.jpg" alt="" height="600" class="w-100"/>
        </div>

        <div class="carousel-item">
            <img src="assets/img/banner2.jpg" alt="" height="600" class="w-100"/>
        </div>

        <div class="carousel-item">
            <img src="assets/img/banner3.jpg" alt="" height="600" class="w-100"/>
        </div>
    </div>
    <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a href="#slider" class="carousel-control-next" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<!--banner section end-->

<!--menu section start-->
<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body">
                    <h3 class="text-center">Popular Menu Item</h3>
                    <hr/>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4>This is a menu</h4>
                        <p>Tk. 225</p>
                        <hr/>
                        <a href="" class="btn btn-outline-info">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--menu section end-->

<!--footer section start-->
<footer class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center mb-0">Design @ Develop By - Sharmin Sultana</p>
            </div>
        </div>
    </div>
</footer>
<!--footer section end-->
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
