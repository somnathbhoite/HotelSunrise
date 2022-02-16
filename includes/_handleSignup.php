<?php

$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  include '_dbconnect.php';

  $email = $_POST['signupEmail'];
  $pass = $_POST['signupPass'];
  $cpass = $_POST['signupcPass'];

  $existSql= "SELECT * FROM `user` WHERE `u_email`='$email'";
  $result = mysqli_query($conn, $existSql);
  $numRows = mysqli_num_rows($result);

  if($numRows > 0)
  {
    $showError = "Email is already in use!";
  }
  else
  {
    if($pass == $cpass)
    {
      $hash = password_hash($pass, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `user` (`u_email`, `u_pass`, `time_stamp`)VALUES('$email', '$hash', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if($result)
      {
        $showAlert = true;
        header("Location: /HotelSunrise/index.php?signupsuccess=true");
        exit();
      }
    }
    else
    {
      $showError = "Password does not match! Try again!";
    }
  }
  header("Location: /HotelSunrise/index.php?signupsuccess=false&error=$showError");
}

?>