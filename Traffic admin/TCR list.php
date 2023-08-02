<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin panel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../indexstyle.css">
</head>
<body>
  <main>

  </main>
  <footer>
  </footer>
</body>
</html>

<?php
$con = mysqli_connect('localhost','root');
if($con){
  echo "";
}else{
  echo "Connection Error!";
}
mysqli_select_db($con, 'temp');

$query = "SELECT * FROM actions";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) { // check if any rows were returned
  echo '<table style="border: 5px solid black;">
  <tr>
    <th style="border: 3px solid black;">NID:</th>
    <th style="border: 3px solid black;">Case Title:</th>
    <th style="border: 3px solid black;" colspan="5">Detail:</th>
    <th style="border: 3px solid black;">Fine:</th>
    <th style="border: 3px solid black;">Last Payment date:</th>
    <th style="border: 3px solid black;">Payment:</th>
    <th style="border: 3px solid black;">Type:</th>
    <th style="border: 3px solid black;">Action</th>
  </tr>';
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
      <td style='border: 2px solid black;'>".$row["NID"]."</td>
      <td style='border: 2px solid black;'>".$row["case_name"]."</td>
      <td style='border: 2px solid black;' colspan='5'>".$row["detail"]."</td>
      <td style='border: 2px solid black;'>".$row["fine"]."</td>
      <td style='border: 2px solid black;'>".$row["last_date"]."</td>
      <td style='border: 2px solid black;'>".$row["payment"]."</td>
      <td style='border: 2px solid black;'>".$row["type"]."</td>
      <td style='border: 2px solid black;'>
        <a href='delete-case.php?NID=" . $row["NID"] . "'><button type='button' class='btn'>Delete</button></a>
      </td>
    </tr>";
  }
  echo "</table>";
} else {
  echo "No results found.";
}

mysqli_close($con);
?>
