<?php
$con = mysqli_connect('localhost', 'root');
if ($con) {
  echo "";
} else {
  echo "Connection Error!";
}
mysqli_select_db($con, 'temp');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $nid = $_POST['NID'];
  $name = $_POST['Name'];
  $id = $_POST['ID'];
  $email = $_POST['Email'];
  $pass = $_POST['pass'];
  $Thana = $_POST['Thana'];
  $District = $_POST['District'];


  // Update the row in the police_admin table with the new values
  $query = "UPDATE policeinfo SET
    Name = '$name',
    ID = '$id',
    Email = '$email',
    pass = '$pass',
    Thana = '$Thana',
    District = '$District'
    WHERE ID = '$nid'";

  $result = mysqli_query($con, $query);

  if ($result) {
    echo "Row updated successfully.";
    header("Location: TF list.php");
  } else {
    echo "Error updating row: " . mysqli_error($con);
  }
} else {
  echo "Invalid request.";
}

mysqli_close($con);
?>
