<!DOCTYPE html>
<html>

<head>
    <title>test</title>
    <link rel="stylesheet" type="text/css" href="../css/register.css" />
    <script type="text/javascript" src="../js/register.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">
    </script>
</head>

<body
    style="background-image: url(../img/road_marking_bridge_123398_1280x720.jpg); background-repeat: no-repeat; background-size: cover">
    <header>
        <!-- Navbar -->
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><strong>FlickTick</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
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
        <div class="align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row mt-5">
                    <!--Grid column-->
                    <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                        <br> <br>
                        <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">SIGN UP RIGHT
                            NOW! </h1>
                        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                        <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Please sign up right now to experience
                            FlickTick at it's best.</h6>
                        <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                    </div>
                    <div class="col-md-6 col-xl-5 mb-4">
                        <br><br>
                        <div class="card wow fadeInRight" data-wow-delay="0.3s">
                            <div class="card-body">
                                <!--Header-->
                                <div class="text-center">
                                    <h3 class="black-text"> Register </h3>
                                    <hr class="hr-light">
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-user prefix black-text active"></i>
                                    <input type="text" id="form3" class="black-text form-control">
                                    <label for="form3" class="active">Your name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-envelope prefix black-text active"></i>
                                    <input type="email" id="form2" class="black-text form-control">
                                    <label for="form2" class="active">Your email</label>
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-lock prefix black-text active"></i>
                                    <input type="password" id="form4" class="black-text form-control">
                                    <label for="form4">Your password</label>
                                </div>
                                <div id="message">
                                    <div id="weak" style="display: inline-block; width: 15%; height: 5%;background-color: #ff6961;"></div>
                                    <div id="medium" style="display: inline-block; width: 15%; height: 5%;background-color: grey;"></div>
                                    <div id="strong" style="display: inline-block; width: 15%; height: 5%;background-color: grey;"></div>
                                </div>
                                <div class="text-center mt-4">
                                    <button class="btn btn-indigo">Sign up</button>
                                    <hr class="hr-light mb-3 mt-4">
                                    <div class="inline-ul text-center">
                                        <a class="p-2 m-2 tw-ic">
                                            <i class="fab fa-twitter black-text"></i>
                                        </a>
                                        &nbsp;
                                        <a class="p-2 m-2 li-ic">
                                            <i class="fab fa-linkedin-in black-text"> </i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Form-->
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>

    <script type="text/javascript">
    var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    var mediumRegex = new RegExp(
        "^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

    var div1 = document.getElementById("weak");
    var div2 = document.getElementById("medium");
    var div3 = document.getElementById("strong");

    var myInput = document.getElementById("form4");

    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    myInput.onkeyup = function() {
        if (mediumRegex.test(myInput.value) && !strongRegex.test(myInput.value)) {
            div1.style.backgroundColor = '#ffd500';
            div2.style.backgroundColor = '#ffd500';
            div3.style.backgroundColor = 'grey';
        }

        if (mediumRegex.test(myInput.value) && strongRegex.test(myInput.value)) {
            div1.style.backgroundColor = '#00b300';
            div2.style.backgroundColor = '#00b300';
            div3.style.backgroundColor = '#00b300';
        }

        if (!mediumRegex.test(myInput.value) && !strongRegex.test(myInput.value)) {
            div1.style.backgroundColor = '#ff6961';
            div2.style.backgroundColor = 'grey';
            div3.style.backgroundColor = 'grey';
        }

    }
    </script>
</body>

</html>