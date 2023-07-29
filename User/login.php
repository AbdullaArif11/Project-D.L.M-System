<?php
// login.php

session_start();
include("connection.php");

if (isset($_POST['submit'])) {
  $Email = $_POST['Email'];
  $password = $_POST['pass'];

  $sql = "SELECT * FROM userinfo WHERE Email = '$Email' AND pass = '$password'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    // Store the NID from the userinfo table after successful login in a session variable
    $_SESSION['NID'] = $row['NID'];
    
    // Redirect to welcome.php
    header("Location: welcome.php");
    exit(); // Add this line to terminate further execution of the login page
  } else {
    echo '<script>
      window.location.href = "login-page.php";
      alert("Login failed. Invalid UserID or Password!!!");
      </script>';
  }
}
?>
