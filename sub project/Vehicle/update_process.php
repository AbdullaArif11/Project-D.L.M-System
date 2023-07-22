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
  $registrationNo = $_POST['Registration_no'];
  $date = $_POST['Date'];
  $vehicleDescription = $_POST['Vehicle_Description'];
  $vehicleClass = $_POST['Vehicle_Class'];
  $color = $_POST['Color'];
  $cc = $_POST['CC'];
  $fuel = $_POST['Fuel'];
  $seat = $_POST['Seat'];
  $engineNo = $_POST['Engine_no'];
  $chassisNo = $_POST['Chassis_no'];
  $hire = $_POST['Hire'];
  $wheelBase = $_POST['Wheel_Base'];
  $weightKg = $_POST['Weight_kg'];
  $issuingAuthority = $_POST['Issuing_Authority'];
  $ownerNameAndAddress = $_POST['Owner’s_Name_and_Address'];
  $ownerType = $_POST['Owner_Type'];
  $tyreSize = $_POST['Tyre_Size'];
  $mfgYear = $_POST['Mfg_Year'];

  // Update the row in the veichal table with the new values
  $query = "UPDATE veichal SET
    Registration_no = '$registrationNo',
    Date = '$date',
    Vehicle_Description = '$vehicleDescription',
    Vehicle_Class = '$vehicleClass',
    Color = '$color',
    CC = '$cc',
    Fuel = '$fuel',
    Seat = '$seat',
    Engine_no = '$engineNo',
    Chassis_no = '$chassisNo',
    Hire = '$hire',
    Wheel_Base = '$wheelBase',
    Weight_kg = '$weightKg',
    Issuing_Authority = '$issuingAuthority',
    `Owner’s_Name_and_Address` = '$ownerNameAndAddress',
    Owner_Type = '$ownerType',
    Tyre_Size = '$tyreSize',
    Mfg_Year = '$mfgYear'
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
