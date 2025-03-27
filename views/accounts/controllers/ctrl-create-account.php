<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $user_password = $_POST["user_password"];
}
else {
    header ("Location: ../create-account.php");
}