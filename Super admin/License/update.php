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
  $query = "SELECT * FROM d_l WHERE NID = '$nid'";
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
      <label>Name:</label>
      <input type="text" name="Name" class="form-control" value="' . $row["Name"] . '">
    </div>

    <div class="form-group">
      <label>Date of Birth:</label>
      <input type="date" name="Death_of_birth" class="form-control" value="' . $row["Death_of_birth"] . '">
    </div>


    <div class="form-group" value="' . $row["Blood_group"] . '">
    <label>Blood group:</label>
        <select name="Blood_group" class="form-control">
        <option value="">select</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
    </div>

    <div class="form-group">
      <label>Father/Husband Name:</label>
      <input type="text" name="Father_or_husband" class="form-control" value="' . $row["Father_or_husband"] . '">
    </div>

    <div class="form-group">
      <label>Issue/Renewal:</label>
      <input type="date" name="Issue_Renewal" class="form-control" value="' . $row["Issue_Renewal"] . '">
    </div>

    <div class="form-group">
      <label>Validity:</label>
      <input type="date" name="Validity" class="form-control" value="' . $row["Validity"] . '">
    </div>

    <div class="form-group">
      <label>License No:</label>
      <input type="text" name="LIcence_no" class="form-control" value="' . $row["LIcence_no"] . '">
    </div>

    <div class="form-group">
      <label>Issuing Authority:</label>
      <input type="text" name="Issuing_Aurthrority" class="form-control" value="' . $row["Issuing_Aurthrority"] . '">
    </div>

    <div class="form-group">
      <label>Address:</label>
      <input type="text" name="Address" class="form-control" value="' . $row["Address"] . '">
    </div>

    <div class="form-group">
      <label>Class of Vehicles:</label>
      <input type="text" name="Class_of_vehicle" class="form-control" value="' . $row["Class_of_vehicle"] . '">
    </div>
      
      <div>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

    </form>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>';
  } else {
    echo "No results found for the specified NID.";
  }
} else {
  echo "Invalid request.";
}

mysqli_close($con);
?>
