<?php

require 'inc/function.php';

$performers = query("SELECT * FROM performers");

$schedule = query("SELECT * FROM schedule");

$shop = query("SELECT * FROM shop");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css?<?= time() ?>">
    <title>Harmoni Fest</title>
</head>

<body>

    <!-- Navbar -->

    <?php include('assets/partikels/navbar.php') ?>

    <!-- Homepage -->

    <?php include('assets/partikels/mainpage.php') ?>

    <!-- About Page -->

    <?php include('assets/partikels/about.php') ?>

    <!-- Event Performers -->

    <?php include('assets/partikels/event.php') ?>

    <!-- Gallery -->

    <?php include('assets/partikels/gallery.php') ?>

    <!-- Support -->

    <div class="support text-center p-2 d-flex justify-content-center align-items-center flex-column">
        <h1 class="sub-title">SUPPORT US</h1>
        <h2 class="title-page">FESTIVAL SPONSORS</h2>
        <button class="btn btn-danger contact-btn mx-auto">Contact Us</button>
    </div>

    <!-- Shop -->

    <?php include('assets/partikels/shop.php') ?>

    <!-- Follow -->

    <div class="support text-center p-2 d-flex justify-content-center align-items-center flex-column">
        <h1 class="sub-title">FOLLOW US</h1>
        <h2 class="title-page">TWITTER FEED</h2>
        <button class="btn btn-danger contact-btn mx-auto">FOLLOW US</button>
    </div>

    <!-- End Content -->

    <?php include('assets/partikels/content.php') ?>

    <!-- Footer -->

    <?php include('assets/partikels/footer.php') ?>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>