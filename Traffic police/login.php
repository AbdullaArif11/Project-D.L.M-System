<?php
   include("connection.php");
   if(isset($_POST['submit'])){
   $userid = $_POST['User'];
   $password = $_POST['pass'];

   $sql = "SELECT * FROM policeinfo WHERE ID ='$userid' and pass ='$password'";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   if($count==1){
    header("Location:welcome.php");
    //echo'akjsdhfgiwhgiuh qekrghpiuweyhfg d;kasf';
   }
   else{
    echo '<script>
        window.location.href = "main.php";
        alert("Login failed. Invalid UserID or Password!!!")
        </script>';
   }
   
  }
?>