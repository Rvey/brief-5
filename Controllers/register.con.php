<?php
include '../includes/autoload.inc.php';
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $passwd = $_POST['password'];

    $reg = new User();
    $reg->register($fname,$email,$passwd);
    header('location: ../Views/login.php');
}