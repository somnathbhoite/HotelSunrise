<?php

$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  include '_dbconnect.php';

  $roomId = $_POST['roomId'];
  $bookingUser = $_POST['bookingUser'];
  $bookingId = $_POST['bookingId'];
  $payAmount = $_POST['payAmount'];
  $payMode = $_POST['payMode'];
  $checkoutDate = $_POST['checkoutDate'];
  $outdaten = date("Y-m-d", strtotime($checkoutDate));   

  $sql = "INSERT INTO `payment`(`pu_id`, `pb_id`, `p_amt`, `p_mode`, `check_out_date`) VALUES ('$bookingUser', '$bookingId', '$payAmount', '$payMode', '$outdaten')";
  $sql2 = "UPDATE `room` SET `isAvailable`='1' WHERE `r_id`=$roomId";
  $sql3 = "UPDATE `booking` SET `isPaid`='1' WHERE `b_id`=$bookingId";

  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql2);
  $result3 = mysqli_query($conn, $sql3);
  
  if($result && $result2 && $result3)
  {
    header("Location: /HotelSunrise/mybooking.php?checkoutsuccess=true");
    exit();
  }
}

?>