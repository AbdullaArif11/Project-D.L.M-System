<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'temp');

$NID = $_POST['NID'];
$Registration_no = $_POST['Registration_no'];
$Date = $_POST['Date'];
$Vehicle_Description = $_POST['Vehicle_Description'];
$Vehicle_Class = $_POST['Vehicle_Class'];
$Color = $_POST['Color'];
$CC = $_POST['CC'];
$Fuel = $_POST['Fuel'];
$Seat = $_POST['Seat'];
$Engine_no = $_POST['Engine_no'];
$Chassis_no = $_POST['Chassis_no'];
$Hire = $_POST['Hire'];
$Wheel_Base = $_POST['Wheel_Base'];
$Weight_kg = $_POST['Weight_kg'];
$Issuing_Authority = $_POST['Issuing_Authority'];
$Owner_Name_and_Address = $_POST['Owner’s_Name_and_Address'];
$Owner_Type = $_POST['Owner_Type'];
$Tyre_Size = $_POST['Tyre_Size'];
$Mfg_Year = $_POST['Mfg_Year'];

$query = "INSERT INTO vehicle(NID, Registration_no, Date, Vehicle_Description, Vehicle_Class, Color, CC, Fuel, Seat, Engine_no, Chassis_no, Hire, Wheel_Base, Weight_kg, Issuing_Authority, Owner’s_Name_and_Address, Owner_Type, Tyre_Size, Mfg_Year) 
VALUES ('$NID', '$Registration_no', '$Date', '$Vehicle_Description', '$Vehicle_Class', '$Color', '$CC', '$Fuel', '$Seat', '$Engine_no', '$Chassis_no', '$Hire', '$Wheel_Base', '$Weight_kg', '$Issuing_Authority', '$Owner_Name_and_Address', '$Owner_Type', '$Tyre_Size', '$Mfg_Year')";

mysqli_query($con, $query);

if ($con) {
  echo "Connected";
} else {
  echo "Connection Error!";
}
?>