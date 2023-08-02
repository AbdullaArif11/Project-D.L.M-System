<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'temp');

$Name = $_POST['Name'];
$ID = $_POST['ID'];
$Email = $_POST['Email'];
$pass = $_POST['pass'];
$Thana = $_POST['Thana'];
$District = $_POST['District'];


$query = "INSERT INTO policeinfo(Name, ID, Email, pass, Thana, District)
VALUES ('$Name','$ID','$Email','$pass','$Thana','$District')";

mysqli_query($con, $query);

if($con){
  header("Location: TF list.php");
}else{
  echo "Connection Error!";
}


?>