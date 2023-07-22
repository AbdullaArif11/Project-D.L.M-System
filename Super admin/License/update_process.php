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
  $dob = $_POST['Death_of_birth'];
  $bloodGroup = $_POST['Blood_group'];
  $fatherOrHusband = $_POST['Father_or_husband'];
  $issueRenewal = $_POST['Issue_Renewal'];
  $validity = $_POST['Validity'];
  $licenceNo = $_POST['LIcence_no'];
  $issuingAuthority = $_POST['Issuing_Aurthrority'];
  $address = $_POST['Address'];
  $classOfVehicle = $_POST['Class_of_vehicle'];

  // Update the row in the d_l table with the new values
  $query = "UPDATE d_l SET
    Name = '$name',
    Death_of_birth = '$dob',
    Blood_group = '$bloodGroup',
    Father_or_husband = '$fatherOrHusband',
    Issue_Renewal = '$issueRenewal',
    Validity = '$validity',
    Licence_no = '$licenceNo',
    Issuing_Aurthrority = '$issuingAuthority',
    Address = '$address',
    Class_of_vehicle = '$classOfVehicle'
    WHERE NID = '$nid'";

  $result = mysqli_query($con, $query);

  if ($result) {
    echo "Row updated successfully.";
  } else {
    echo "Error updating row: " . mysqli_error($con);
  }
} else {
  echo "Invalid request.";
}

mysqli_close($con);
?>
