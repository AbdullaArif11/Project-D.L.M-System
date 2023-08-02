<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'temp');

$case_name = $_POST['case_name'];
$detail = $_POST['detail'];
$fine = $_POST['fine'];
$last_date = $_POST['last_date'];
$NID = $_POST['NID'];

// Insert the data into the database
$query = "INSERT INTO actions(case_name, detail, fine, last_date, NID)
          VALUES ('$case_name', '$detail', '$fine', '$last_date', '$NID')";

mysqli_query($con, $query);

if($con){
  echo "Submitted";
  echo '<a href="welcome.php" style="btn btn-primary">.....>Goto main page</a>';
}else{
  echo "Connection Error!";
}


?>
