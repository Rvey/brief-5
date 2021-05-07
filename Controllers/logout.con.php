<?php

session_start();
session_destroy();

header('location:../Views/home.php');