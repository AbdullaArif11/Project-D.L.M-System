<?php

session_start();
include("connection.php");

$license_not_found = false;
$user_not_found = false;
$vehicle_not_found = false;
$no_case = false;

if (isset($_GET['NID'])){
  $NID = $_GET['NID'];

  $query = "SELECT * FROM d_l WHERE NID = '$NID'";
  $d_l_result = mysqli_query($con, $query);
  if (mysqli_num_rows($d_l_result) == 1) {
    $d_l_row = mysqli_fetch_array($d_l_result, MYSQLI_ASSOC);
    $Name = $d_l_row['Name'];
    $date_of_birth = $d_l_row['date_of_birth'];
    $Blood_group = $d_l_row['Blood_group'];
    $Father_or_husband = $d_l_row['Father_or_husband'];
    $Issue_Renewal = $d_l_row['Issue_Renewal'];
    $Validity = $d_l_row['Validity'];
    $Licence_no = $d_l_row['LIcence_no'];
    $Issuing_Aurthrority = $d_l_row['Issuing_Aurthrority'];
    $Address = $d_l_row['Address'];
    $Class_of_vehicle = $d_l_row['Class_of_vehicle'];
  } else {
    $license_not_found = true;
  }

  $query = "SELECT * FROM userinfo WHERE NID = '$NID'";
  $user_result = mysqli_query($con, $query);
  if (mysqli_num_rows($user_result) == 1) {
    $user_row = mysqli_fetch_array($user_result, MYSQLI_ASSOC);
    $Email = $user_row['Email'];
    $OTP = $user_row['OTP'];
    $District = $user_row['District'];
  } else {
    $user_not_found = true;
  }

  $query = "SELECT * FROM vehicle WHERE NID = '$NID'";
  $vehicle_result = mysqli_query($con, $query);
  if (mysqli_num_rows($vehicle_result) == 1) {
    $vehicle_row = mysqli_fetch_array($vehicle_result, MYSQLI_ASSOC);
    $Registration_no = $vehicle_row['Registration_no'];
    $Date = $vehicle_row['Date'];
    $Vehicle_Description = $vehicle_row['Vehicle_Description'];
    $Vehicle_Class = $vehicle_row['Vehicle_Class'];
    $Color = $vehicle_row['Color'];
    $CC = $vehicle_row['CC'];
    $Fuel = $vehicle_row['Fuel'];
    $Seat = $vehicle_row['Seat'];
    $Engine_no = $vehicle_row['Engine_no'];
    $Chassis_no = $vehicle_row['Chassis_no'];
    $Hire = $vehicle_row['Hire'];
    $Wheel_Base = $vehicle_row['Wheel_Base'];
    $Weight_kg = $vehicle_row['Weight_kg'];
    $Issuing_Authority = $vehicle_row['Issuing_Authority'];
    $Owner_Name_and_Address = $vehicle_row['Owner’s_Name_and_Address'];
    $Owner_Type = $vehicle_row['Owner_Type'];
    $Tyre_Size = $vehicle_row['Tyre_Size'];
    $Mfg_Year = $vehicle_row['Mfg_Year'];
  } else {
    $vehicle_not_found = true;
  }

  $query = "SELECT * FROM actions WHERE NID = '$NID'";
  $user_result = mysqli_query($con, $query);
  if (mysqli_num_rows($user_result) == 1) {
    $user_row = mysqli_fetch_array($user_result, MYSQLI_ASSOC);
    $case_name = $user_row['case_name'];
    $detail = $user_row['detail'];
    $last_date = $user_row['last_date'];
    $fine = $user_row['fine'];
    $type = $user_row['type'];
  } else {
    $no_case = true;
  }

} else {
  header("Location: welcome.php");
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
</div>
  </nav>
</header>

<main class="bg-gradient-to-r from-slate-900 via-sky-800 to-cyan-700 text-white min-h-screen p-5  md:p-[4rem] lg:p-[6rem]">
<!-- Displaying User information -->
<?php if ($user_not_found): ?>
<p class="text-xl border-b-2 border-gray-200 pb-3 mb-2">Not signed up yet.</p>
<?php else: ?>
<section class="border border-gray-200 rounded-2xl p-5 mb-10">
  <h2 class="text-2xl font-semibold mb-10 text-center">User: <?php echo $Name; ?></h2>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">NID: <?php echo $NID; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Date of Birth: <?php echo $date_of_birth; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Blood Group: <?php echo $Blood_group; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Father or Husband: <?php echo $Father_or_husband; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Email: <?php echo $Email; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">OTP: <?php echo $OTP; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">District: <?php echo $District; ?></p>
</section>
<?php endif; ?>

<!-- Displaying License information -->
<?php if ($license_not_found): ?>
<p class="text-xl border-b-2 border-gray-200 pb-3 mb-2"></p>
<?php else: ?>
<section class="border border-gray-200 rounded-2xl p-5 mb-10">
  <h2 class="text-2xl font-semibold mb-10 text-center">License information is incorrect</h2>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Issue/Renewal: <?php echo $Issue_Renewal; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Validity: <?php echo $Validity; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Licence No: <?php echo $Licence_no; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Issuing Authority: <?php echo $Issuing_Aurthrority; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Address: <?php echo $Address; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Class of Vehicle: <?php echo $Class_of_vehicle; ?></p>
</section>
<?php endif; ?>

<!-- Displaying Vehicle information -->
<?php if ($vehicle_not_found): ?>
<p class="text-xl border-b-2 border-gray-200 pb-3 mb-2">No vehicle has been registered under this NID yet.</p>
<?php else: ?>
<section class="border border-gray-200 rounded-2xl p-5 mb-5">
  <h2 class="text-2xl font-semibold mb-10 text-center">Your Vehicle Document</h2>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Registration No: <?php echo $Registration_no; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Date: <?php echo $Date; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Vehicle Description: <?php echo $Vehicle_Description; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Vehicle Class: <?php echo $Vehicle_Class; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Color: <?php echo $Color; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">CC: <?php echo $CC; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Fuel: <?php echo $Fuel; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Seat: <?php echo $Seat; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Engine No: <?php echo $Engine_no; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Chassis No: <?php echo $Chassis_no; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Hire: <?php echo $Hire; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Wheel Base: <?php echo $Wheel_Base; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Weight (kg): <?php echo $Weight_kg; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Issuing Authority: <?php echo $Issuing_Authority; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Owner’s Name and Address: <?php echo $Owner_Name_and_Address; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Owner Type: <?php echo $Owner_Type; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Tyre Size: <?php echo $Tyre_Size; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Manufacturing Year: <?php echo $Mfg_Year; ?></p>
</section>
<?php endif; ?>

<!-- Displaying Case information -->
<?php if ($no_case): ?>
<p class="text-xl border-b-2 border-gray-200 pb-3 mb-2">Case information: Clear (No cases found).</p>
<?php else: ?>
<section class="border border-gray-200 rounded-2xl p-5 mb-10">
  <h2 class="text-2xl font-semibold mb-10 text-center">Case Information</h2>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Case: <?php echo $case_name; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Case-Detail: <?php echo $detail; ?></p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Fine: <?php echo $fine; ?>tk</p>
  <p class="text-xl border-b-2 border-gray-200 pb-3 mb-5">Last Payment Date: <?php echo $last_date; ?></p>
</section>
<?php endif; ?>

<section class="mt-10 mb-10 w-36">
<button class="btn border border-2 border-red-500 text-red-500 hover:border-gray-300 hover:bg-red-500 hover:text-white" onclick="my_modal_4.showModal()"><p>File a new case</p></button>
<dialog id="my_modal_4" class="modal">
  <form method="dialog" class="modal-box w-11/12 max-w-5xl">
    <h3 class="font-bold text-lg">With great commitment and dedication to maintaining law and order, a new case title is added, upholding justice for the community we serve.</h3>
    <p class="py-4"></p>



    <div class="h-full border-solid border-2 border-gray-200 rounded-2xl p-10 shadow-2xl text-white">
    <form action="case-connection.php" method="POST" onsubmit="return validateForm()">

    <div class="form-group my-3">
      <label>Case Title:</label>
      <input type="text" name="case_name" class="form-control w-full" autocomplete="off">
    </div>

    <div class="form-group my-3">
      <label>Case-Detail:</label>
      <input type="text" name="detail" class="form-control h-[20rem] w-full" autocomplete="off">
    </div>

    <div class="form-group my-3">
      <label>Fine:</label>
      <input type="text" name="fine" class="form-control w-full" autocomplete="off">
    </div>

    <div class="form-group my-3">
      <label>Last Payment Date:</label>
      <input type="date" name="last_date" class="form-control w-full" autocomplete="off">
    </div>

    <div class="mt-10 flex justify-center">
      <button type="submit" class="btn w-[15rem] rounded-full border-1 border-white text-white">Submit</button>
      <button type="close" class="btn w-[15rem] rounded-full border-1 border-white text-white">Cancel</button>
    </div>

  </form>
 </div>
  </form>
</dialog>
</section>


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




