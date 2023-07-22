<?php
$con = mysqli_connect('localhost', 'root');
if ($con) {
  echo "";
} else {
  echo "Connection Error!";
}
mysqli_select_db($con, 'temp');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nid = $_POST['NID'];

  // Check if the NID exists in the veichal table
  $query = "SELECT * FROM veichal WHERE NID = '$nid'";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) > 0) {
    // NID exists, display details and options
    echo 'NID exists. Details:';
    echo '<div class="details">';
    
    // Display additional details of the record
    $row = mysqli_fetch_assoc($result);
    echo '<p>Registration No: ' . $row["Registration_no"] . '</p>';
    echo '<p>Date: ' . $row["Date"] . '</p>';
    
    echo '<a href="delete.php?NID=' . $nid . '"><button class="option-button">Delete</button></a>';
    echo '<a href="update.php?NID=' . $nid . '"><button class="option-button">Update</button></a>';
    
    echo '</div>';
  } else {
    // NID does not exist
    echo "NID does not exist.";
  }
}

mysqli_close($con);
?>

<!-- HTML Form -->
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
    <form action="" method="POST">
      <div class="form-group">
        <label>NID:</label>
        <input type="text" name="NID" class="form-control" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary">Check NID</button>
    </form>
  </div>

  <br>
  <footer>
    <p class="p-3 bg-dark text-white text-center">Driving License Management System</p>
  </footer>
</body>
</html>
