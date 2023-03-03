<?php
@include 'config.php';

session_start();
session_unset();
session_destroy();

/*$sql = "DELETE FROM user_form WHERE id=1";

if (mysqli_query($conn, $sql)) {
    header('location:login.php');
}
else {
  echo "Account has not been deleted";
}*/
?>