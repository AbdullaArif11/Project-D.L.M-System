<?php
// welcome.php

session_start();
include("connection.php");

if (isset($_SESSION['NID'])) {
  $NID = $_SESSION['NID'];

  // Query to retrieve information from the d_l table based on the NID
  $query = "SELECT * FROM d_l WHERE NID = '$NID'";
  $d_l_result = mysqli_query($con, $query);

  if (mysqli_num_rows($d_l_result) == 1) {
    $d_l_row = mysqli_fetch_array($d_l_result, MYSQLI_ASSOC);
    // Now, you can access the information from the d_l table for the logged-in user
    $Name = $d_l_row['Name'];
    $date_of_birth = $d_l_row['date_of_birth'];
    $Blood_group = $d_l_row['Blood_group'];
    $Father_or_husband = $d_l_row['Father_or_husband'];
    $Issue_Renewal = $d_l_row['Issue_Renewal'];
    $Validity = $d_l_row['Validity'];
    $LIcence_no = $d_l_row['LIcence_no'];
    $Issuing_Aurthrority = $d_l_row['Issuing_Aurthrority'];
    $Address = $d_l_row['Address'];
    $Class_of_vehicle = $d_l_row['Class_of_vehicle'];
  } else {
    echo "Data not found in the d_l table for the logged-in user.";
  }
} else {
  // If the user is not logged in, redirect to the login page
  header("Location: login-page.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Your head content goes here -->
</head>
<body>
  <!-- Your welcome page content goes here -->
  <h1>Login Successful!!!</h1>
  <p>Name: <?php echo $Name; ?></p>
  <p>Date of Birth: <?php echo $date_of_birth; ?></p>
  <p>Blood Group: <?php echo $Blood_group; ?></p>
  <p>Father or Husband: <?php echo $Father_or_husband; ?></p>
  <p>Issue/Renewal: <?php echo $Issue_Renewal; ?></p>
  <p>Validity: <?php echo $Validity; ?></p>
  <p>Licence No: <?php echo $LIcence_no; ?></p>
  <p>Issuing Authority: <?php echo $Issuing_Aurthrority; ?></p>
  <p>Address: <?php echo $Address; ?></p>
  <p>Class of Vehicle: <?php echo $Class_of_vehicle; ?></p>
</body>
</html>
