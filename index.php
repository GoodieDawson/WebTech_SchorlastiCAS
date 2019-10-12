<!DOCTYPE html>
<html>
<head> 
    <title>FlickTick</title>
    <link rel = "stylesheet" type = "text/css" href = "css/index.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
</head>

<body>
    <header>
          <!--Navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
              <a class="navbar-brand" href="#"><strong>FlickTick</strong></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="common/movie_view.html">Movies</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                  </li>
                </ul>
                <form class="form-inline">
                  <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  </div>
                </form>
              </div>
            </div>
          </nav>
    </header>

<div id="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel" style="z-index: 1; position: absolute;">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100 center-fit" src="img/bambi.jpg">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 center-fit" src="img/3_idiots.jpg">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 center-fit" src="img/hauru_no_ugoku_shiro_studio_ghibli.jpg">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 center-fit" src="img/kung_fu_panda_3_panda.jpg">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 center-fit" src="img/maze_runner_the_scorch_trials.jpg">
        </div>
    </div>
    </div>

    <div id="middleman" style="z-index: 3; position: absolute;">
    </div>

    <div id="enterForm" style="z-index: 3; position: absolute;">
    <h1 id="welcomeMess"> Welcome to FlickTick </h1>
    <hr id="dash" class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
    <p id="slogan">Your quick trick to seeing that new sick pic</p>
    <form method="POST" action="index.php">
        <input type="button" class="buttons" onClick="location.href='common/login.php'" value="Login">
        <input type="button" class="buttons" onClick="location.href='common/register.php'" value="Register">
    </form>
    </div>
</div>

</body>
</html>