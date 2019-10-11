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

<div id="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" style="z-index: 1; position: absolute;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 center-fit" src="img/slide1.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 center-fit" src="img/slide2.jpg">
            </div>
            <div classs="carousel-item">
                <img class="d-block w-100 center-fit" src="img/slide3.jpg">
            </div>
        </div>
    </div>

    <div id="enterForm" style="z-index: 2; position: absolute;">
    <span> Welcome to FlickTick
    <form>
        <button type="submit" class="buttons">Click me to Login</button>
        <button type="submit" class="buttons">Click me to Register</button>
    </form>
    </div>
</div>

</body>
</html>