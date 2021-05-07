<?php
include "../includes/autoload.inc.php";
session_start();
function test_id()
{
    $idd = 'Re' . rand(min: 999, max: 999999);
    return $idd;
}

$unic_id = test_id();
if (isset($_POST['submit'])) {

    $count = $_POST['counter'];
    for ($i = 0; $i <= $count; $i++) {

        if (isset($_POST['pension_' . $i])) {
            $pension = $_POST['pension_' . $i];
            $pppp = new Pension();
            $pension_price = $pppp->get_pension_price($pension);
        } else {
            $pension = '';
            $pension_price = 0;
        }

        if (isset($_POST['room_' . $i])) {
            $room = $_POST['room_' . $i];
            echo $i;
            $roomm = new Room();
            $room_price = $roomm->get_room_price($room);
        } else {
            $room = '';
            $room_price = 0;
        }
        if (isset($_POST['room_type_' . $i])) {
            $room_type = $_POST['room_type_' . $i];

        } else {
            $room_type = '';
        }

        if (isset($_POST['room_view_' . $i])) {
            $room_view = $_POST['room_view_' . $i];
            $vieww = new Room();
            $room_view_price = $vieww->get_room_view_price($room_view);
        } else {
            $room_view = '';
            $room_view_price = 0;
        }

        if (!isset($_POST['pension_type_' . $i])) {
            $pension_type = '';
        } else {
            $pension_type = $_POST['pension_type_' . $i];
        }


        if (isset($_POST['adult_nbr'])) {
            $adult_nbr = $_POST['adult_nbr'];
        } else {
            $adult_nbr = 0;
        }
        if (isset($_POST['adult_choice'])) {
            $adult_choice = $_POST['adult_choice'];
        } else {
            $adult_choice = '';
        }
        if (isset($_POST['kids_nbr'])) {
            $kids_nbr = $_POST['kids_nbr'];
        } else {
            $kids_nbr = 0;
        }
        if (isset($_POST['babys_nbr'])) {
            $babys_nbr = $_POST['babys_nbr'];
        } else {
            $babys_nbr = 0;
        }
        $days = $_POST['days'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        $user_id = $_SESSION['id'];

//        print_r($room_price);
//        print_r($room_view);
//        print_r($pension_type);
//        print_r($pension_type);
//        print_r($adult_nbr);

        @$total = (($room_view_price * $room_view_price) + $room_price + $pension_price) * $days;

        $final = array(
            ':room_name' => $room,
            ':room_type' => $room_type,
            ':room_view' => $room_view,
            ':pension_name' => $pension,
            ':pension_type' => $pension_type,
            ':total' => $total,
            ':unique_id' => $unic_id,
            ':adult_nbr' => $adult_nbr,
            ':adult_choice' => $adult_choice,
            ':kids_nbr' => $kids_nbr,
            ':babys_nbr' => $babys_nbr,
            ':user_id' => $user_id,
            ':check_in' => $check_in,
            ':check_out' => $check_out
        );
        $test = new Insert($final);
    }
    header('location: ../Views/log.php');
}