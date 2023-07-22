<?php
    include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:url(15a.jpg); background-repeat:no-repeat; background-size:100% 100%">
  
  <div class="loginbox" id="form">
    <img src="avatar.png" class="avatar">
    <h1>Login Here</hh1>
      <form action="login.php" action="login.php" method="post"><br>
        <p>User-ID:</p>
        <input type="text" name="User" placeholder="Enter User-ID">
        <p>Password:</p>
        <input type="password" name="pass" placeholder="Enter Password">
        <input type="submit" name="submit" value="Login">
        <a href="#"><i>Lost your password?</i></a>
      </form>
  </div>

</body>
</html>