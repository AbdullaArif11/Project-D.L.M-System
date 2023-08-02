<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin-Panel(Register new user)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../indexstyle.css">
</head>
<body>
  <header class="">
    <div class="logo">
      <img src="../black-logo.jpg" alt="">
      <h3>Admin Port</h3>
    </div>
    <nav>
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li>
          <a href="#">Vehicle</a>
          <ul class="dropdown">
            <li><a href="http://localhost/Driving%20License%20Management/Super%20admin/Vehicle/Vehicle.php">Registration</a></li>
            <li><a href="http://localhost/Driving%20License%20Management/Super%20admin/Vehicle/vehicle_detail.php">List</a></li>
            <li><a href="http://localhost/Driving%20License%20Management/Super%20admin/Vehicle/v%20delete%20&%20update.php">Update/Delete</a></li>
          </ul>
        </li>
        <li>
          <a href="#">License</a>
          <ul class="dropdown">
            <li><a href="http://localhost/Driving%20License%20Management/Super%20admin/License/License.php">Registration</a></li>
            <li><a href="http://localhost/Driving%20License%20Management/Super%20admin/License/License_detail.php">List</a></li>
            <li><a href="http://localhost/Driving%20License%20Management/Super%20admin/License/delete%20&%20update.php">Update/Delete</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Traffic-Admin</a>
          <ul class="dropdown">
            <li><a href="http://localhost/Driving%20License%20Management/Super%20admin/Traffic%20admin/Traffic%20admin.php">Registration</a></li>
            <li><a href="http://localhost/Driving%20License%20Management/Super%20admin/Traffic%20admin/Traffic%20admin%20list.php">List</a></li>
            <li><a href="http://localhost/Driving%20License%20Management/Super%20admin/Traffic%20admin/T-delete%20&%20update.php">Update/Delete</a></li>
          </ul>
        </li>
        <li><a href="#">About</a></li>
      </ul>
  </nav>
  </header>
  
  <h3 class="text-center"><b>Driving-Licence </b>Information Form*</h3>

 <div class="w-50 m-auto">
  <form action="L-connection.php" method="POST" onsubmit="return validateForm()">

    <div class="form-group">
      <label>National ID:</label>
      <input type="text" name="NID" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Name:</label>
      <input type="text" name="Name" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Date of Birth:</label>
      <input type="date" name="date_of_birth" class="form-control" autocomplete="off">
    </div>


    <div class="form-group">
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
      <input type="text" name="Father_or_husband" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Issue/Renewal:</label>
      <input type="date" name="Issue_Renewal" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Validity:</label>
      <input type="date" name="Validity" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>License No:</label>
      <input type="text" name="Licence_no" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Issuing Authority:</label>
      <input type="text" name="Issuing_Aurthrority" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Address:</label>
      <input type="text" name="Address" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Class of Vehicles:</label>
      <input type="text" name="Class_of_vehicle" class="form-control" autocomplete="off">
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
  <script>
    function validateForm() {
      var inputs = document.getElementsByTagName('input');
      var select = document.getElementsByTagName('select')[0];
      var incompleteFields = [];
      
      for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].type === 'text' && inputs[i].value === '') {
          inputs[i].classList.add('error');
          incompleteFields.push(inputs[i].name);
        } else {
          inputs[i].classList.remove('error');
        }
      }
      
      if (select.value === '') {
        select.classList.add('error');
        incompleteFields.push('Blood group');
      } else {
        select.classList.remove('error');
      }
      
      if (incompleteFields.length > 0) {
        var message = 'Please fill in the following fields:\n';
        for (var k = 0; k < incompleteFields.length; k++) {
          message += '- ' + incompleteFields[k] + '\n';
        }
        alert(message);
        return false;
      }
      
      return true;
    }
  </script>
</body>

</html>
