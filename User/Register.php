<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.0/dist/full.css" rel="stylesheet" type="text/css" />
  <title>Login page</title>
  <style>
    main {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(to top, #04080F, #00425A, #1B6468);
      color: white;
    }
    
    .label-up {
      transform: translateY(-1.25rem);
      font-size: 0.75rem;
      color: #ccc;
    }


  </style>
  <script>
    // JavaScript to handle label animation on click and focus
    document.addEventListener("DOMContentLoaded", function() {
      const inputs = document.querySelectorAll(".input");
      const labels = document.querySelectorAll(".label");
      
      inputs.forEach(input => {
        input.addEventListener("focus", () => {
          input.previousElementSibling.classList.add("label-up");
        });
        input.addEventListener("blur", () => {
          if (input.value === "") {
            input.previousElementSibling.classList.remove("label-up");
          }
        });
      });
      
      labels.forEach(label => {
        label.addEventListener("click", () => {
          const input = label.nextElementSibling;
          input.focus();
          input.previousElementSibling.classList.add("label-up");
        });
      });
    });
  </script>

</head>
<body >
<header>
  <nav>
  <div class="navbar" style="background-color: #1A2633;">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Home</a></li>
        <li>
          <a>Select User</a>
          <ul class="p-2">
          <li><a>General User</a></li>
            <li><a>Traffic Police</a></li>
            <li><a>Traffic Admin</a></li>
          </ul>
        </li>
        <li><a>About</a></li>
      </ul>
    </div>
    <a href="" class="logo"><img class="w-10" src="../logo/logowhite.png"></a>
    <a class="btn btn-ghost normal-case text-xl">D.L.M system</a>
  </div>
  
  <div class="navbar-end hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a>Home</a></li>
      <li tabindex="0">
      <li><a>General User</a></li>
      <li><a>Traffic Police</a></li>
      <li><a>Traffic Admin</a></li>
      <li><a>About</a></li>
    </ul>
  </div>
</div>
  </nav>
</header>
<main >
 <div class="hero bg-transparent backdrop-blur-sm h-[600px] max-w-[30rem] border-solid border-2 border-gray-200 rounded-2xl p-10 shadow-2xl text-white">
 <form action="Register-connection.php" method="POST" onsubmit="return validateForm()">

    <div class="form-group my-3">
      <label>National ID:</label>
      <input type="text" name="NID" class="form-control w-[25rem]" autocomplete="off">
    </div>

    <div class="form-group my-3">
      <label>Name:</label>
      <input type="text" name="Name" class="form-control w-[25rem]" autocomplete="off">
    </div>

    <div class="form-group my-3">
      <label>Email:</label>
      <input type="email" name="Email" class="form-control w-[25rem]" autocomplete="off">
    </div>

    <div class="form-group my-3">
      <label>District:</label>
      <input type="text" name="District" class="form-control w-[25rem]" autocomplete="off">
    </div>

    <div class="form-group my-3">
        <label>Set a new password:</label>
        <input type="password" name="pass" id="password" class="form-control w-[25rem]" autocomplete="off">
    </div>

    <div class="mt-10 flex justify-center">
      <button type="submit" class="btn w-[15rem] rounded-full border-1 border-white text-white">Sign up</button>
    </div>

  </form>
 </div>
</main>
<br>
 <footer>
  <p class="p-3 bg-dark text-white text-center">Driving License Management System</p>
 </footer>


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