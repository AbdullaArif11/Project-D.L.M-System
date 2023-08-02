<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin-Panel(Assign Traffic-Admin)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../indexstyle.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body>

 <div class="w-50 m-auto">
 <form action="case-connection.php" method="POST" onsubmit="return validateForm()">

    <div class="form-group">
      <label>National ID:</label>
      <input type="text" name="NID" class="form-control" autocomplete="off" required>
    </div>


    <div class="form-group">
      <label>Case Title:</label>
      <input type="text" name="case_name" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label for="case_details">Case Details:</label><br>
      <textarea class="bg-white border border-4 w-full" id="detail" name="detail" rows="4" required></textarea>
    </div>

    <div class="form-group">
      <label>Last payment date:</label>
      <input type="text" name="last_date" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
      <label>Fine:</label>
      <input type="text" name="fine" class="form-control" autocomplete="off">
    </div>

    <section class="flex justify-center">
      <button type="submit" class="w-80 btn border border-4 bg-slate-900 border-red-500 text-red-500 hover:border-gray-300 hover:bg-red-500 hover:text-white">Submit</button>
    </section>

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