<?php

require_once("../db/user.php");


if (isset($_POST["submit"])) {
    add_new_user($_POST["user_name"], md5($_POST["user_password"]), $_POST["first_name"], $_POST["last_name"], $_POST["gender"], $_POST["date_of_birth"], $_POST["address"], $_POST["user_email"], $_POST["contact_number"]);
    
}

function add_new_user($user_name, $user_password, $first_name, $last_name, $gender, $date_of_birth, $address, $user_email, $contact_number) {
    $user = new user($user_name = $user_name, $user_password = $user_password, $first_name = $first_name, $last_name = $last_name, $gender = $gender, $date_of_birth = $date_of_birth, $address = $address, $user_email = $user_email, $contact_number = $contact_number);
    $user->create();
    echo "<script>
    alert('Registration Successful');
    window.location.href='login.php';
    </script>";
}

?>

