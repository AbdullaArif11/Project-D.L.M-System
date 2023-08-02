<?php
$con = mysqli_connect('localhost', 'root');
if ($con) {
  echo "Connection Successful";
} else {
  echo "Connection Error!";
}
mysqli_select_db($con, 'temp');

$query = "SELECT * FROM vehicle";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) { // check if any rows were returned
  echo '<table style="border: 5px solid black;">
  <tr>
    <th style="border: 3px solid black;">NID</th>
    <th style="border: 3px solid black;">Registration No</th>
    <th style="border: 3px solid black;">Date</th>
    <th style="border: 3px solid black;">Vehicle Description</th>
    <th style="border: 3px solid black;">Vehicle Class</th>
    <th style="border: 3px solid black;">Color</th>
    <th style="border: 3px solid black;">CC</th>
    <th style="border: 3px solid black;">Fuel</th>
    <th style="border: 3px solid black;">Seat</th>
    <th style="border: 3px solid black;">Engine No</th>
    <th style="border: 3px solid black;">Chassis No</th>
    <th style="border: 3px solid black;">Hire</th>
    <th style="border: 3px solid black;">Wheel Base</th>
    <th style="border: 3px solid black;">Weight (kg)</th>
    <th style="border: 3px solid black;">Issuing Authority</th>
    <th style="border: 3px solid black;">Owner’s Name and Address</th>
    <th style="border: 3px solid black;">Owner Type</th>
    <th style="border: 3px solid black;">Tyre Size</th>
    <th style="border: 3px solid black;">Manufacturing Year</th>
    <th style="border: 3px solid black;">Actions</th>
  </tr>';
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
      <td style='border: 2px solid black;'>" . $row["NID"] . "</td>
      <td style='border: 2px solid black;'>" . $row["Registration_no"] . "</td>
      <td style='border: 2px solid black;'>" . $row["Date"] . "</td>
      <td style='border: 2px solid black;'>" . $row["Vehicle_Description"] . "</td>
      <td style='border: 2px solid black;'>" . $row["Vehicle_Class"] . "</td>
      <td style='border: 2px solid black;'>" . $row["Color"] . "</td>
      <td style='border: 2px solid black;'>" . $row["CC"] . "</td>
      <td style='border: 2px solid black;'>" . $row["Fuel"] . "</td>
      <td style='border: 2px solid black;'>" . $row["Seat"] . "</td>
      <td style='border: 2px solid black;'>" . $row["Engine_no"] . "</td>
      <td style='border: 2px solid black;'>" . $row["Chassis_no"] . "</td>
      <td style='border: 2px solid black;'>" . $row["Hire"] . "</td>
      <td style='border: 2px solid black;'>" . $row["Wheel_Base"]."</td>
      <td style='border: 2px solid black;'>" . $row["Weight_kg"]."</td>
      <td style='border: 2px solid black;'>" . $row["Issuing_Authority"]."</td>
      <td style='border: 2px solid black;'>" . $row["Owner’s_Name_and_Address"]."</td>
      <td style='border: 2px solid black;'>" . $row["Owner_Type"]."</td>
      <td style='border: 2px solid black;'>" . $row["Tyre_Size"]."</td>
      <td style='border: 2px solid black;'>" . $row["Mfg_Year"]."</td>
      <td style='border: 2px solid black;'>
        <a href='delete.php?NID=" . $row["NID"] . "'>Delete</a>
        <a href='update.php?NID=" . $row["NID"] . "'>Update</a>
      </td>
    </tr>";
  }
  echo "</table>";
} else {
  echo "No results found.";
}

mysqli_close($con);
?>
