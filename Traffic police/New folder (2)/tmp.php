<?php
   include("connection.php");
   if(isset($_POST['submit'])){
   $userid = $_POST['User'];
   $password = $_POST['pass'];

   $sql = "SELECT * FROM policeinfo WHERE ID ='$userid' and pass ='$password'";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   if($count!=0){
    header("Location:main.php");
   }
  }
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Login Successful!!!</h1>
</body>
</html>
?>