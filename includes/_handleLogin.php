<?php

$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  include '_dbconnect.php';

  $email = $_POST['loginEmail'];
  $pass = $_POST['loginPass'];

  $sql = "SELECT * FROM `user` WHERE u_email='$email'";
  $result = mysqli_query($conn, $sql);
  $numRows =mysqli_num_rows($result);

  if($numRows == 1)
  {
    $row = mysqli_fetch_assoc($result);
    if(password_verify($pass, $row['u_pass']))
    {
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['u_id'] = $row['u_id'];
      $_SESSION['u_email'] = $email;
      $isAdmin = $row['isAdmin'];

      if($isAdmin == 0)
      {
        echo "logged in". $email;
        header("Location: /HotelSunrise/index.php");
      }
      else
      {
       echo "logged in". $email;
       header("Location: /HotelSunrise/admin/index.php");
     }
   }

   else
   {
    $showError = "Incorrect Password!";
    header("Location: /HotelSunrise/index.php?loginsuccess=false&error=$showError");
  }
}
elseif($numRows == 0)
{
  $showError = "You are not registred user, Please signup first!";
  header("Location: /HotelSunrise/index.php?loginsuccess=false&error=$showError");
}
}

?>