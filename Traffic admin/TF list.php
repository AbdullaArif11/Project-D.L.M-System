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

$query = "SELECT * FROM policeinfo";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) { // check if any rows were returned
  echo '<table style="border: 5px solid black;">
  <tr>
    <th style="border: 3px solid black;">ID:</th>
    <th style="border: 3px solid black;">Name:</th>
    <th style="border: 3px solid black;">Email:</th>
    <th style="border: 3px solid black;">Thana:</th>
    <th style="border: 3px solid black;">District:</th>
    <th style="border: 3px solid black;">Action</th>
  </tr>';
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
      <td style='border: 2px solid black;'>".$row["ID"]."</td>
      <td style='border: 2px solid black;'>".$row["Name"]."</td>
      <td style='border: 2px solid black;'>".$row["Email"]."</td>
      <td style='border: 2px solid black;'>".$row["Thana"]."</td>
      <td style='border: 2px solid black;'>".$row["District"]."</td>
      <td style='border: 2px solid black;'>
        <a href='delete-TF.php?NID=" . $row["ID"] . "'><button type='button' class='btn'>Delete</button></a>
        <a href='update.php?NID=" . $row["ID"] . "'><button type='button' class='btn'>Update</button></a>
      </td>
    </tr>";
  }
  echo "</table>";
} else {
  echo "No results found.";
}

mysqli_close($con);
?>
