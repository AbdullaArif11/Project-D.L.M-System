<?php
$con = mysqli_connect('localhost', 'root');
if ($con) {
  echo "";
} else {
  echo "Connection Error!";
}
mysqli_select_db($con, 'temp');

if (isset($_GET['NID'])) {
  $nid = $_GET['NID'];
  
  // Fetch the row with the specified NID from the veichal table
  $query = "SELECT * FROM veichal WHERE NID = '$nid'";
  $result = mysqli_query($con, $query);
  
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    
    // Display the update form with the fetched row data
    echo '

  <!DOCTYPE html>
  <html lang="en">
  <head>
  <title>Admin-Panel(Register new Vehicle)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  </head>
  <body>
  <div class="w-50 m-auto">
    <form action="update_process.php" method="POST">

      <input type="hidden" name="NID" value="' . $row["NID"] . '">
      
      <div class="form-group">
        <label>Registration No:</label>
        <input type="text" name="Registration_no" class="form-control" value="' . $row["Registration_no"] . '">
      </div>

      <div class="form-group">
        <label>Date:</label>
        <input type="date" name="Date" class="form-control" value="' . $row["Date"] . '">
      </div>

    <div class="form-group">
    <label>Hire:</label>
    <fieldset class="form-control" name="Hire" value="' . $row["Hire"] . '">
      <label>
        <input type="radio" name="Hire" value="Yes">Yes .  
      </label>
      <label>
        <input type="radio" name="Hire" value="No">No
      </label>
    </fieldset>
  </div>

    <div class="form-group">
      <label>Manufacturing Year:</label>
      <input type="text" name="Mfg_Year" class="form-control" value="' . $row["Mfg_Year"] . '">
    </div>

    <div class="form-group">
      <label>Vehicle Description:</label>
      <input type="text" name="Vehicle_Description" class="form-control" value="' . $row["Vehicle_Description"] . '">
    </div>

    <div class="form-group">
      <label>Vehicle Class:</label>
      <input type="text" name="Vehicle_Class" class="form-control" value="' . $row["Vehicle_Class"] . '">
    </div>

    <div class="form-group">
      <label>Color:</label>
      <input type="text" name="Color" class="form-control" value="' . $row["Color"] . '">
    </div>

    <div class="form-group">
      <label>CC:</label>
      <input type="text" name="CC" class="form-control" value="' . $row["CC"] . '">
    </div>

    <div class="form-group">
      <label>Fuel:</label>
      <input type="text" name="Fuel" class="form-control" value="' . $row["Fuel"] . '">
    </div>

    <div class="form-group">
      <label>Seat:</label>
      <input type="text" name="Seat" class="form-control" value="' . $row["Seat"] . '">
    </div>

    <div class="form-group">
      <label>Engine No:</label>
      <input type="text" name="Engine_no" class="form-control" value="' . $row["Engine_no"] . '">
    </div>

    <div class="form-group">
      <label>Chassis No:</label>
      <input type="text" name="Chassis_no" class="form-control" value="' . $row["Chassis_no"] . '">
    </div>

    <div class="form-group">
      <label>Wheel Base:</label>
      <input type="text" name="Wheel_Base" class="form-control" value="' . $row["Wheel_Base"] . '">
    </div>

    <div class="form-group">
      <label>Weight (kg):</label>
      <input type="text" name="Weight_kg" class="form-control" value="' . $row["Weight_kg"] . '">
    </div>

    <div class="form-group">
      <label>Issuing Authority:</label>
      <input type="text" name="Issuing_Authority" class="form-control" value="' . $row["Issuing_Authority"] . '">
    </div>

    <div class="form-group">
      <label>Owner’s Name and Address:</label>
      <input type="text" name="Owner’s_Name_and_Address" class="form-control" value="' . $row["Owner’s_Name_and_Address"] . '">
    </div>

    <div class="form-group">
      <label>Owner Type:</label>
      <input type="text" name="Owner_Type" class="form-control" value="' . $row["Owner_Type"] . '">
    </div>

    <div class="form-group">
      <label>Tyre Size:</label>
      <input type="text" name="Tyre_Size" class="form-control" value="' . $row["Tyre_Size"] . '">
    </div>
      
      <div>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

    </form>';
  } else {
    echo "No results found for the specified NID.";
  }
} else {
  echo "Invalid request.";
}

mysqli_close($con);
?>
