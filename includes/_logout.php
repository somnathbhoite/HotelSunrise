<?php
//Script to logout user
session_start();
session_unset();
session_destroy();
header("Location: ../index.php?logout=success")
?>