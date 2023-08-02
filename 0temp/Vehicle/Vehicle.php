<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin-Panel(Register new Vehicle)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <style>
    .error {
      border: 1px solid red;
    }
  </style>
</head>

<body>
  
  <h3 class="text-center"><b>Vehicle-Document </b>(Certificate of Registration)*</h3>

 <div class="w-50 m-auto">
  <form action="V-connection.php" method="POST" onsubmit="return validateForm()">

    <div class="form-group">
      <label>National ID:</label>
      <input type="text" name="NID" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>	Registration No:</label>
      <input type="text" name="Registration_no" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Date:</label>
      <input type="date" name="Date" class="form-control" autocomplete="off">
    </div>

  <div class="form-group">
    <label>Hire:</label>
    <fieldset class="form-control" autocomplete="off">
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
  <select name="Mfg_Year" class="form-control">
    <option value="Years">Years</option>
    <?php
    for ($year = 2000; $year <= 2100; $year++) {
      echo '<option value="' . $year . '">' . $year . '</option>';
    }
    ?>
  </select>
</div>

    <div class="form-group">
      <label>Vehicle Description:</label>
      <input type="text" name="Vehicle_Description" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Vehicle Class:</label>
      <input type="text" name="Vehicle_Class" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Color:</label>
      <input type="text" name="Color" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>CC:</label>
      <input type="text" name="CC" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Fuel:</label>
      <input type="text" name="Fuel" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Seat:</label>
      <input type="text" name="Seat" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Engine No:</label>
      <input type="text" name="Engine_no" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Chassis No:</label>
      <input type="text" name="Chassis_no" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Wheel Base:</label>
      <input type="text" name="Wheel_Base" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Weight (kg):</label>
      <input type="text" name="Weight_kg" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Issuing Authority:</label>
      <input type="text" name="Issuing_Authority" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Owner’s Name and Address:</label>
      <input type="text" name="Owner’s_Name_and_Address" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Owner Type:</label>
      <input type="text" name="Owner_Type" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Tyre Size:</label>
      <input type="text" name="Tyre_Size" class="form-control" autocomplete="off">
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
      var dateInput = document.getElementsByName('Date')[0];
      var hireInputs = document.getElementsByName('Hire');
      var yearInput = document.getElementsByName('Mfg_Year')[0];
      var incompleteFields = [];
      
      for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].type === 'text' && inputs[i].value === '') {
          inputs[i].classList.add('error');
          incompleteFields.push(inputs[i].name);
        } else {
          inputs[i].classList.remove('error');
        }
      }
      
      if (dateInput.value === '') {
        dateInput.classList.add('error');
        incompleteFields.push('Date');
      } else {
        dateInput.classList.remove('error');
      }
      
      var hireSelected = false;
      for (var j = 0; j < hireInputs.length; j++) {
        if (hireInputs[j].checked) {
          hireSelected = true;
          break;
        }
      }
      if (!hireSelected) {
        incompleteFields.push('Hire');
      }
      
      if (yearInput.value === 'Years') {
        yearInput.classList.add('error');
        incompleteFields.push('Manufacturing Year');
      } else {
        yearInput.classList.remove('error');
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