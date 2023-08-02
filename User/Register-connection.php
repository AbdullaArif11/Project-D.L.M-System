<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'temp');

$Name = $_POST['Name'];
$NID = $_POST['NID'];
$Email = $_POST['Email'];
$District = $_POST['District'];
$pass = $_POST['pass'];

// Check if the NID or Email already exists in the table
$checkQuery = "SELECT * FROM userinfo WHERE NID = '$NID' OR Email = '$Email'";
$result = mysqli_query($con, $checkQuery);

if (mysqli_num_rows($result) > 0) {
  // If the NID or Email already exists, show a message and redirect to the login page
  echo '<h3 style="color: white; background: red;">NID or Email already exists. Please use a different NID or Email.</h3>';
  echo '<a href="Register.php" style=" 
                                    padding: 10px 20px; 
                                    background-color: black; 
                                    color: white; 
                                    text-decoration: none; 
                                    border-radius: 4px; 
                                    font-size: 16px;
                                    border: 2px solid #4CAF50;
                                    transition: background-color 0.3s ease-in-out;">
        Go Back
      </a>';
  // header("Location: login-page.php");
} else {
  // If NID and Email are unique, insert the data into the database
  $query = "INSERT INTO userinfo (Name, NID, Email, District, pass)
            VALUES ('$Name', '$NID', '$Email', '$District', '$pass')";

  if (mysqli_query($con, $query)) {
    echo "Submitted";
    header("Location: login-page.php");
  } else {
    echo "Error: " . mysqli_error($con);
  }
}

mysqli_close($con);
?>
