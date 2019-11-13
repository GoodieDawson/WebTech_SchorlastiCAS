
<?php

require_once("../db/movie.php");

$target_dir = "../img/MovieCovers/".processText($_POST["movie_genre"])."/";
$target_file = $target_dir . basename($_FILES["movie_cover"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$movie_title = processText($_POST["movie_title"]);
$movie_genre = processText($_POST["movie_genre"]);
$movie_about = processText($_POST["movie_about"]);
$movie_theatre = processText($_POST["movie_theatre"]);

$movie = new Movie($movie_title = $movie_title, $theatre_id = $movie_theatre, $movie_about = $movie_about, $movie_genre = $movie_genre, $movie_cover = $target_file);
$movie_insertion_result = $movie->create();

if ($movie_insertion_result == 1) {
    alert("Movie added successfully.");
}
else {
    alert("Failed to add movie.");
}



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["movie_cover"]["tmp_name"]);
    if($check !== false) {
        alert("File is an image - " . $check["mime"] . ".");
        $uploadOk = 1;
    } else {
        alert("File is not an image.");
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    alert("Sorry, file already exists.");
    $uploadOk = 0;
}
// Check file size
if ($_FILES["movie_cover"]["size"] > 5000000) {
    alert("Sorry, your file is too large.");
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    alert("Sorry, your file was not uploaded.");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["movie_cover"]["tmp_name"], $target_file)) {
        alert("The file ". basename( $_FILES["movie_cover"]["name"]). " has been uploaded.");
    } else {
        alert("Sorry, there was an error uploading your file.");
    }
}


function processText($text) {
    $text = strip_tags($text);
    $text = trim($text);
    $text = htmlspecialchars($text);
    return $text;
}

function alert($message){
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>
