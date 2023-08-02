<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin-Panel(Assign Traffic-Admin)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  
  <h3 class="text-center"><b>Traffic-Admin </b>Assign Form*</h3>

 <div class="w-50 m-auto">
  <form action="T-connection.php" method="POST">

    <div class="form-group">
      <label>National ID:</label>
      <input type="text" name="NID" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Name:</label>
      <input type="text" name="Name" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>ID:</label>
      <input type="text" name="ID" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Email:</label>
      <input type="email" name="Email" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Rank:</label>
      <input type="text" name="Rank" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>OTP:</label>
      <input type="text" name="OTP" class="form-control" autocomplete="off">
    </div>

    <div>
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
 </div>

<br>
 <footer>
  <p class="p-3 bg-dark text-white text-center">Driving License Management System</p>
 </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>