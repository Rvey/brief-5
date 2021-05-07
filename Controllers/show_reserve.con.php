<?php
include '../includes/autoload.inc.php';
session_start();
if (!isset($_SESSION['id'])){
    header('location: ../Views/login.php');
}
function show_reservations()
{
    $sh = new User();
    $show = $sh->get_reservation($_SESSION['id']);
    foreach ($show as $row){
        echo '<div class="card" style="width: 18rem;">
    <div class="card-body">

        <h3 class="card-title">Reservation </h3>
        <h6 class="card-subtitle mb-2 text-muted">PRICE :</h6>
        <p class="card-text">'.$row['total'].' DH</p>

        <h6 class="card-subtitle mb-2 text-muted">CHECK IN  :</h6>
        <p class="card-text">'.$row['check_in'].'</p>
        <h6 class="card-subtitle mb-2 text-muted">CHECK OUT  :</h6>
        <p class="card-text">'.$row['check_out'].'</p>
    </div>


</div>';
    }
}