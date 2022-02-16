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
        //Getting bookingid for payment purpose
        $bookingid = $_GET['bookingid'];
        $sql = "SELECT `bu_name`, `bu_phno`, `check_in_date`, `r_id`, `r_price` FROM `booking`, `room` WHERE `b_id`=$bookingid AND `r_id`=`br_id`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
        {
        $r_id = $row['r_id'];
        $bu_name = $row['bu_name'];
        $bu_phno = $row['bu_phno'];
        $check_in_date = $row['check_in_date'];
        $r_price = $row['r_price'];
        $check_out_date = date("Y-m-d");
        $idate=date_create("$check_in_date");
        $odate=date_create("$check_out_date");
        }
        ?>

        <div class="my-5">
            <h1 class="text-center">Payment</h1>
        </div>
        <div class="container-fluid">
            <div class="row" id="header">
                <div class="col-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center flex-column">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5>Customer Name:</h5>
                                    <h6 class="text-info"><?php echo $bu_name;?></h6>
                                </li>
                                <li class="list-group-item">
                                    <h5> Mobile No:</h5>
                                    <h6 class="text-info"><?php echo $bu_phno;?></h6>
                                </li>
                                <li class="list-group-item">
                                    <h5> Checkin Date:</h5>
                                    <h6 class="text-info"><?php echo $check_in_date;?></h6>
                                </li>
                                <li class="list-group-item">
                                    <h5> Checkout Date:</h5>
                                    <h6 class="text-info"><?php echo $check_out_date;?></h6>
                                </li>
                                <li class="list-group-item">
                                    <h5> Amount:</h5>
                                    <h6 class="text-info">&#8377;
                                        <?php
                                    $diff=date_diff($idate,$odate);
                                    $difference=$diff->format("%a");
                                    if($difference == 0)
                                    {
                                    echo $r_price;
                                    }
                                    else
                                    {
                                    $r_price = ($difference * $r_price) + $r_price;
                                    echo $r_price;
                                    }
                                    ?>
                                    </h6>
                                </li>
                                <li class="list-group-item">
                                    <h5> Payment Mode: </h5>
                                    <form method="POST" action="includes/_handlePayment.php">
                                        <input type="hidden" name="roomId" value="<?php echo $r_id;?>">
                                        <input type="hidden" name="bookingId" value="<?php echo $bookingid;?>">
                                        <?php echo '<input type="hidden" name="bookingUser" value="' . $_SESSION['u_id'] . '">';?>
                                        <input type="hidden" name="payAmount" value="<?php echo $r_price;?>">
                                        <div>
                                            <h6 class="text-info">
                                                <input type="radio" name="payMode" value="cash" required>
                                                <label for="cash">Cash</label>
                                            </h6>
                                        </div>
                                        <div>
                                            <h6 class="text-info">
                                                <input type="radio" name="payMode" value="card" required>
                                                <label for="card">Card</label>
                                            </h6>
                                        </div>
                                        <input type="hidden" name="checkoutDate" value="<?php echo $check_out_date;?>">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-outline-danger">Confirm
                                                Payment</button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 header-img">
                            <img src="images/payment1.jpg" class="img-fluid animated" alt="">
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