<?php

require_once("../db/user.php");


if (isset($_POST["submit"])) {
    add_new_user($_POST["user_name"], md5($_POST["user_password"]), $_POST["user_email"]);
    
}

function add_new_user($user_name, $user_password, $user_email) {
    $user = new user($user_name = $user_name, $user_password = $user_password, $user_email = $user_email);
    echo $user->create();
    
}

header('Location: register.php');
exit();
?>