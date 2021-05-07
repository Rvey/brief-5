<?php
    @session_start();
    if (!isset($_SESSION['id'])){
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/reserve.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <title>Reservation</title>
</head>
<?php
include 'header.php';
?>
<body>
<div class="container">
    <main>
        <div class="py-5 text-center mt-5">

            <h2>Reservation</h2>

        </div>

        <div class="row g-5">

            <div class="col-md-5 col-lg-4 order-md-last mb-5">
                <div class="card-group">
                    <div class="card">
                        <img id="img_room" src="assets/img/about.jpg" class="card-img-top" alt="..." width="150px"
                             height="400px">
                        <div class="card-body">

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Choisissez votre chambre pour réserver</h4>
                <form method="post" action="../Controllers/setData.php" class="needs-validation" id="form_res"
                      novalidate="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="room" class="form-label">Bien</label>
                            <select class="form-select" name="room_0" id="room" required="">
                                <option value="null">Choose...</option>
                                <option value="double">chambre double</option>
                                <option value="simple">chambre simple</option>
                                <option value="appartement">Appartement</option>
                                <option value="bungalow">bungalow</option>
                            </select>

                        </div>

                        <div class="col-sm-4" id="room_type_container" style="display: none">
                            <label for="room_type" class="form-label">Bien Type</label>
                            <select class="form-select" name="room_type_0" id="room_type" required="">
                            </select>

                        </div>

                        <div class="col-sm-4" style="display: none" id="room_view_container">
                            <label for="room_view" class="form-label">Bien View</label>
                            <select class="form-select" name="room_view_0" id="room_view" required="">

                            </select>

                        </div>

                        <div id="Div_Lit" class="col-sm-6">
                        </div>
                        <div id="Div_Vue" class="col-12">
                        </div>
                        <div class="col-8">
                            <label for="pension" class="form-label">Pension</label>
                            <select class="form-select" name="pension_0" id="pension" required="">
                                <option value="null">Choose...</option>
                                <option value="complete">complete</option>
                                <option value="sans">sans</option>
                                <option value="demi">demi</option>
                            </select>
                        </div>

                        <div class="col-4" style="display: none" id="pension_type_container">
                            <label for="pension_type" class="form-label">Pension Type</label>
                            <select class="form-select" name="pension_type_0" id="pension_type" required="">

                            </select>
                        </div>
                        <div id="add_new"></div>
                        <hr class="my-4">
                        <div class="my-3 ">
                            <div class="form-check">
                                <input id="without_en" name="enfant" type="radio" class="form-check-input" checked=""
                                       required="">
                                <label class="form-check-label" for="credit">Sans Enfant</label>

                            </div>
                            <div class="form-check">
                                <input id="with_en" name="enfant" type="radio" class="form-check-input" required="">
                                <label class="form-check-label" for="debit">Avec Enfant</label>
                            </div>
                        </div>

                        <div id="en_container" style="display: none">
                            <div class="col-12" id="adult">
                                <h5>Adults</h5>
                                <input class="form-control" name="adult_nbr" type="number" id="adult_nbr">
                                <select style="display: none" class="form-select" name="adult_choice" id="adult_choice"
                                        required="">

                                </select>
                            </div>
                            <div class="col-12" id="kids">
                                <h5>kids</h5>
                                <input class="form-control" name="kids_nbr" type="number" id="kids_nbr">

                            </div>

                            <div class="col-12" id="baby's">
                                <h5>baby's</h5>
                                <input class="form-control" name="babys_nbr" type="number" id="baby_nbr">
                                <select style="display: none" class="form-select" name="babys_choice" id="baby_choice"
                                        required="">

                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" name="add" id="add" class="btn btn-success btn-xs add"
                                    style="float: right;"><span class="glyphicon glyphicon-plus"></span>add
                            </button>
                        </div>
                        <hr class="my-4">
                        <input type="number" id="counter" name="counter" hidden value="0">

                        <div class="datecontainer mb-lg-5">


                            <label for="">Check-in Date</label>

                            <input class="date" type="date" value="" id="checkin-date" name="check_in" required>


                            <label for="">Check-out Date</label>

                            <input class="date" type="date" value="" id="checkout-date" name="check_out" required>
                            <input value="" type="number"  name="days" id="days_nbr" hidden>

                        </div>
                        <hr class="my-4">
<!--                    </div>-->
                        <div class="col-4">
                            <button type="submit" class="w-100 btn btn-primary btn-md shadow rounded" name="submit"
                                    value="submit">submit
                            </button>
                        </div>

                        <div id="plus_form">

                        </div>


                    </div>
                </form>
            </div>


            <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="js/reserve.js"></script>
            <script src="js/add_reserve.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


        </div>
    </main>
</div>
<?php
include 'footer.php';
?>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="js/date.js" ></script>
</body>

</html>