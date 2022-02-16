<?php
include 'includes/_dbconnect.php';
session_start();
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Hotel SunRise</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/index.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>

</head>

<body class="d-flex flex-column h-100">

    <?php include "includes/_navbar.php"; ?>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="my-5">
            <h1 class="text-center"> About Us </h1>
        </div>
        <div class="container-fluid">
            <div class="row" id="header">
                <div class="col-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center flex-column">
                            <h1>Easy room booking with <strong class="brand-name"> SunRise </strong></h1>
                            <h4>Typically, these are a bedroom and a living room. There are also suites with separate kitchens. In family hotels deluxe rooms are equipped with a separate nursery.</h4>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 header-img">
                            <img src="images/abt1.svg" class="img-fluid animated" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "includes/_footer.php"; ?>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>