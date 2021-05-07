<?php
@session_start();

?>
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.php"><span>H</span>Paradice<span>.</span></a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link " href="home.php">Home</a></li>
                <li><a class="nav-link " href="reservation_page.php">reservation</a></li>
                <?php
                if (!empty($_SESSION['id'])){


                ?>
                <li><a class="nav-link " href="../Controllers/logout.con.php">log out</a></li>
                    <li><a class="nav-link " href="log.php">log</a></li>
                <?php
                }else{
                ?>
                <li><a class="nav-link " href="login.php">Login</a></li>
                <?php
                }
                ?>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header><!-- End Header -->
