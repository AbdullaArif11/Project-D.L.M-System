<?php
$con = mysqli_connect('localhost','root');
if($con){
  echo "Connection Successful";
}else{
  echo "Connection Error!";
}
mysqli_select_db($con, 'temp');

$query = "SELECT * FROM police_admin";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) { // check if any rows were returned
  echo '<table style="border: 5px solid black;">
  <tr>
    <th style="border: 3px solid black;">Name:</th>
    <th style="border: 3px solid black;">ID:</th>
    <th style="border: 3px solid black;">Email:</th>
    <th style="border: 3px solid black;">Rank:</th>
    <th style="border: 3px solid black;">Password:</th>
    <th style="border: 3px solid black;">Temporary OTP:</th>
  </tr>';
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
      <td style='border: 2px solid black;'>".$row["Name"]."</td>
      <td style='border: 2px solid black;'>".$row["ID"]."</td>
      <td style='border: 2px solid black;'>".$row["Email"]."</td>
      <td style='border: 2px solid black;'>".$row["Rank"]."</td>
      <td style='border: 2px solid black;'>".$row["password"]."</td>
      <td style='border: 2px solid black;'>".$row["OTP"]."</td>
    </tr>";
  }
  echo "</table>";
} else {
  echo "No results found.";
}

mysqli_close($con);
?>
