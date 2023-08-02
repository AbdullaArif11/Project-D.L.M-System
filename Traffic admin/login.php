<?php

session_start();
include("connection.php");

if (isset($_POST['submit'])) {
  $Email = $_POST['Email'];
  $password = $_POST['pass'];
  $ID = $_POST['ID'];

  $sql = "SELECT * FROM police_admin WHERE Email = '$Email' AND pass = '$password' AND ID = '$ID'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    $_SESSION['ID'] = $row['ID'];
    
    header("Location: welcome.php");
    exit();
  } else {
    echo '<script>
      window.location.href = "login-page.php";
      alert("Login failed. Invalid UserID or Password!!!");
      </script>';
  }
}
?>
