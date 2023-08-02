<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'temp');

$NID = $_POST['NID'];
$Name = $_POST['Name'];
$date_of_birth = $_POST['date_of_birth'];
$Blood_group = $_POST['Blood_group'];
$Father_or_husband = $_POST['Father_or_husband'];
$Issue_Renewal = $_POST['Issue_Renewal'];
$Validity = $_POST['Validity'];
$Licence_no = $_POST['Licence_no'];
$Issuing_Aurthrority = $_POST['Issuing_Aurthrority'];
$Address = $_POST['Address'];
$Class_of_vehicle = $_POST['Class_of_vehicle'];


$query = "INSERT INTO d_l(NID, Name, date_of_birth, Blood_group, Father_or_husband, Issue_Renewal, Validity, LIcence_no, Issuing_Aurthrority, Address, Class_of_vehicle) 
VALUES ('$NID', '$Name', '$date_of_birth', '$Blood_group', '$Father_or_husband', '$Issue_Renewal', '$Validity', '$Licence_no', '$Issuing_Aurthrority', '$Address', '$Class_of_vehicle')";

mysqli_query($con, $query);

if($con){
  echo "connected";
}else{
  echo "Connection Error!";
}


?>
