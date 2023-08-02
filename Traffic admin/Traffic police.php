<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin-Panel(Assign Traffic-Admin)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../indexstyle.css">
</head>

<body>
  
  <h3 class="text-center"><b>Traffic-Police </b>Assign Form*</h3>

 <div class="w-50 m-auto">
 <form action="T-connection.php" method="POST" onsubmit="return validateForm()">

    <div class="form-group">
      <label>Police ID:</label>
      <input type="text" name="ID" class="form-control" autocomplete="off" >
    </div>

    <div class="form-group">
      <label>Name:</label>
      <input type="text" name="Name" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Email:</label>
      <input type="email" name="Email" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Temporary Password:</label>
      <input type="text" name="pass" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Thana:</label>
      <input type="text" name="Thana" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>District:</label>
      <input type="text" name="District" class="form-control" autocomplete="off">
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