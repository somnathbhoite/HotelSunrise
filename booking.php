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

        <?php
        //Getting roomid for booking purpose
        $roomid = $_GET['roomid'];
        $sql = "SELECT * FROM `room` WHERE `r_id`=$roomid";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
        {
        }
        ?>

        <div class="my-5">
            <h1 class="text-center">Book Now</h1>
        </div>
        <div class="container-fluid">
            <div class="row" id="header">
                <div class="col-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center flex-column">
                            <form method="POST" action="includes/_handleBooking.php">
                                <?php echo '<input type="hidden" name="userid" value="' . $_SESSION['u_id'] . '">';?>
                                <input type="hidden" name="roomid" value="<?php echo $roomid;?>">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Enter Your Full Name</label>
                                    <input type="text" name="name" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter Your Full Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Enter Your Address</label>
                                    <textarea name="address" class="form-control" id="exampleFormControlTextarea1"
                                        rows="2" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="phoneno" class="form-label">Mobile No.</label>
                                    <input type="tel" name="phno" class="form-control"
                                        placeholder="Enter Your Mobile No." required>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="number" name="age" class="form-control"
                                            placeholder="Enter Your Age" required>
                                    </div>
                                    <div class="col">
                                        <label for="inputGender" class="form-label">Gender</label>
                                        <select name="gender" id="inputGender" class="form-select" required>
                                            <option></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="checkinDate" class="form-label">Checkin Date</label>
                                    <input type="date" name="indate" class="form-control" required>
                                </div>
                                <div class="text-center">
                                    <?php if(isset($_SESSION['u_id'])): ?>
                                    <button type="submit" class="btn btn-outline-primary"
                                        style="width: 10rem;">Submit</button>
                                    <?php else: ?>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#loginModal" style="width: 10rem;">Login First</button>
                                    <?php endif; ?>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 header-img">
                            <img src="images/booking.svg" class="img-fluid animated" alt="">
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