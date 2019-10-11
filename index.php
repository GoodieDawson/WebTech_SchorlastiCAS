<!DOCTYPE html>
<html>
<head> 
    <title>FlickTick</title>
    <link rel="stylesheet" href="index.css">
    <script type="text/javascript" src="index.js"></script>
</head>
<body>
    

    <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="C:\xampp\htdocs\Group_Project\slide1.jpg" style="width:100%">
    <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="C:\xampp\htdocs\Group_Project\slide2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="C:\xampp\htdocs\Group_Project\slide3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    </div>

    <div id="enterForm">
    <form action="login.php">
        <button type="submit">Click me to Login</button>
        <button type="submit">Click me to Register</button>
    </form>
    </div>
</body>
</html>