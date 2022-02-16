<?php
include '../includes/_dbconnect.php';
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
    <title>Hotel SunRise-Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="index.css" rel="stylesheet">


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

        <?php include "includes/_nav.php"; ?>

    </main>

 <?php include "includes/_footer.php"; ?>

    <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>