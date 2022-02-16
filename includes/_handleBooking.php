<?php

$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  include '_dbconnect.php';

  $userid = $_POST['userid'];
  $roomid = $_POST['roomid'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phno = $_POST['phno'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $indate = $_POST['indate'];
  $indaten = date("Y-m-d", strtotime($indate));   

  $sql = "INSERT INTO `booking` (`bu_id`, `br_id`, `bu_name`, `bu_address`, `bu_phno`, `bu_age`, `bu_gender`, `check_in_date`, `time_stamp`)VALUES('$userid', '$roomid', '$name', '$address', '$phno', '$age', '$gender', '$indaten', current_timestamp())";
  $sql2 = "UPDATE `room` SET `isAvailable`='0' WHERE `r_id`=$roomid";

  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql2);
  
  if($result && $result2)
  {
      header("Location: /HotelSunrise/mybooking.php?bookingsuccess=true");
    exit();
  }
}

?>