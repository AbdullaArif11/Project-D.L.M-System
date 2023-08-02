<?php

session_start();
include("connection.php");

if (isset($_SESSION['ID'])){
  $ID = $_SESSION['ID'];


  $query = "SELECT * FROM police_admin WHERE ID = '$ID'";
  $user_result = mysqli_query($con, $query);
  if (mysqli_num_rows($user_result) == 1) {
    $user_row = mysqli_fetch_array($user_result, MYSQLI_ASSOC);
    $Name = $user_row['Name'];
    $ID = $user_row['ID'];
    $Email = $user_row['Email'];
    $Rank = $user_row['Rank'];
    $District = $user_row['District'];
    $pass = $user_row['pass'];
  } else {
    echo 'Data-connection error!';
  }



} else {
  header("Location: login-page.php");
  exit();
}

?>

<?php
if (isset($_GET['logout'])) {
  session_destroy();
  header("Location: login-page.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.0/dist/full.css" rel="stylesheet" type="text/css" />
  <title>Login Successful</title>
  <style>
    .hover2:hover { 
    transform: translatex(25px) translateY(-5px);
    transition: 0.4s linear;
    box-shadow: 5px 4px 30px 0px rgba(255, 255, 255, 0.5);
}
  </style>
</head>
<body>
<header>
  <nav>
  <div class="navbar" style="background-color: #1A2633;">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Home</a></li>
        <li>
          <a>Select User</a>
          <ul class="p-2">
          <li><a>General User</a></li>
            <li><a>Traffic Police</a></li>
            <li><a>Traffic Admin</a></li>
          </ul>
        </li>
        <li><a>About</a></li>
      </ul>
    </div>
    <a href="" class="logo"><img class="w-10" src="../logo/logowhite.png"></a>
    <a class="btn btn-ghost normal-case text-xl">D.L.M system</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a>Home</a></li>
      <li tabindex="0">
        <details>
          <summary>Select User</summary>
          <ul class="p-2 w-36">
            <li><a>General User</a></li>
            <li><a>Traffic Police</a></li>
            <li><a>Traffic Admin</a></li>
          </ul>
        </details>
      </li>
      <li><a>About</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <!-- <a class="btn">Button</a> -->
    <a href="?logout" class="btn bg-gradient-to-r from-slate-900 via-sky-800 to-cyan-700 border-1 border-white  text-white">Logout</a>
  </div>
</div>
  </nav>
</header>

<main class="bg-gradient-to-r from-slate-900 via-sky-800 to-cyan-700 text-white min-h-screen p-5  md:p-[4rem] lg:p-[6rem]">

<!-- Displaying User information -->
<section class="border border-gray-200 rounded-2xl p-5 mb-10">
  <h2 class="text-2xl font-semibold mb-10 text-center">Admin: <?php echo $Name; ?></h2>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">ND: <?php echo $ID; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Email: <?php echo $Email; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Rank: <?php echo $Rank; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">District: <?php echo $District; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Password: <?php echo $pass; ?></p>
</section>

<div class="h-10 border border-gray-200 rounded-[5px] mb-10 hover2" style="background-color: #1A2633;">
  <a href="TCR list.php"><p class="font-bold ml-4 mt-1 ">Traffic Case Records</p></a>
</div>

<div class="h-10 border border-gray-200 rounded-[5px] mb-10 hover2" style="background-color: #1A2633;">
  <a href="TF list.php"><p class="font-bold ml-4 mt-1 ">Register List of Traffic Police</p></a>
</div>

<div class="h-10 border border-gray-200 rounded-[5px] mb-10 hover2" style="background-color: #1A2633;">
  <a href="#"><p class="font-bold ml-4 mt-1 ">Recruitment of new traffic police</p></a>
</div>

<div class="border border-gray-200 rounded-2xl p-5 mb-10 flex flex-col justify-center">
  <h2 class="font-extrabold mb-5 text-center text-2xl">Search  recruitment traffic police</h2>
<div class="">
<form action="" method="POST">
  <div class="form-group">
    <input type="text" placeholder="Enter ID" name="ID" class="form-control w-full bg-white text-black" autocomplete="off" required>
  </div>
  <button type="submit" class="btn border border-gray-200 h-10 mt-3">Search ID</button>
</form>
  </div>




  <?php
include("connection.php");

if (isset($_SESSION['ID'])) {
  $ID = $_SESSION['ID'];

  $query = "SELECT * FROM police_admin WHERE ID = '$ID'";
  $user_result = mysqli_query($con, $query);

  if (mysqli_num_rows($user_result) == 1) {
    $user_row = mysqli_fetch_array($user_result, MYSQLI_ASSOC);
    $Name = $user_row['Name'];
    $ID = $user_row['ID'];
    $Email = $user_row['Email'];
    $Rank = $user_row['Rank'];
    $District = $user_row['District'];
    $pass = $user_row['pass'];
  } else {
    echo 'Data-connection error!';
  }
} else {
  header("Location: login-page.php");
  exit();
}

if (isset($_GET['logout'])) {
  session_destroy();
  header("Location: login-page.php");
  exit();
}

// Process the search form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ID = $_POST['ID'];

  // Check if the NID exists in the policeinfo table
  $query = "SELECT * FROM policeinfo WHERE ID = '$ID'";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) > 0) {
    // NID exists, display details and options
    echo 'ID exists. Details:';
    echo '<div class="details">';
    
    // Display additional details of the record
    $row = mysqli_fetch_assoc($result);
    echo '<p>Name: ' . $row["Name"] . '</p>';
    echo '<p>Email: ' . $row["Email"] . '</p>';
    
    echo '<a href="delete.php?NID=' . $ID . '"><button class="btn border hover:border-gray-200 h-10 mt-3 mr-5 option-button">Delete</button></a>';
    echo '<a href="update.php?NID=' . $ID . '"><button class="btn border hover:border-gray-200 h-10 mt-3 option-button">Update</button></a>';
    
    echo '</div>';
  } else {
    echo "ID does not exist.";
  }
}

mysqli_close($con);
?>

</div>




</main>

<footer class="footer footer-center p-10 text-base-content rounded" style="background-color: #1A2633;">
  <div class="grid grid-flow-col gap-4">
    <a class="link link-hover">Driving License Management System</a> 
  </div> 
  <div>
    <div class="grid grid-flow-col gap-4">
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a> 
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
    </div>
  </div> 
  <div>
    <p>Copyright © 2023 - All right reserved .</p>
  </div>
</footer>

</body>
</html>




