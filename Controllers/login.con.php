<?php
include '../includes/autoload.inc.php';
if (isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = new User();
    $row = $login->login($email,$password);
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['fullName'];
    header("location: ../Views/reservation_page.php");


}