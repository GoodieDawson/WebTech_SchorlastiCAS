<?php

require_once("../db/cinema.php");
require_once("../db/theatre.php");

if (isset($_POST["c_name"])) {
    add_new_cinema($_POST["c_name"], $_POST["c_address"], $_POST["c_telephone"], $_POST["c_email"]);
}

elseif (isset($_POST["t_name"])) {
    add_new_theatre($_POST["t_name"], $_POST["t_cinema"]);
}

function add_new_cinema($cinema_name, $cinema_address, $cinema_telephone, $cinema_email) {
    $cinema = new Cinema($cinema_name = $cinema_name, $cinema_address = $cinema_address, $cinema_telephone = $cinema_telephone, $cinema_email = $cinema_email);
    echo $cinema->create();
}

function add_new_theatre($theatre_name, $theatre_cinema) {
    $theatre = new Theatre($theatre_name = $theatre_name, $cinema_id = $theatre_cinema);
    echo $theatre->create();
}

?>