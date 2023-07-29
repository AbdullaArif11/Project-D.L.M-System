<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.0/dist/full.css" rel="stylesheet" type="text/css" />
  <title>Login page</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    
    /* New CSS to move the label up */
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
<body style="background:url(15a.jpg); background-repeat:no-repeat; background-size:100% 100%">

  <div class="hero bg-transparent backdrop-blur-sm h-500 max-w-[64.5rem] border-solid border-2 border-gray-200 rounded-2xl p-10 shadow-2xl text-white">
    <div class="hero-content flex-col lg:flex-row-reverse">

      <div class="text-center lg:text-left">
        <h1 class="text-4xl font-bold">Welcome to our Login Page!</h1>
        <p class="mt-6">Log in securely using your email or National ID (NID) and password. Forgot your password? No problem! Click "Forgot Password?" for a quick recovery.</p>
        <p class="py-1">New user? Register now and access our services hassle-free.</p>
        <p class="py-2 font-medium">Happy logging in!</p>
      </div>

      <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-transparent backdrop-blur-md">
        <div class="card-body">
          
        <form action="login.php" action="login.php" method="post">
          <div class="form-control border-solid border-b-2 border-gray-200 relative ">
            <label class="label absolute ease-in-out cursor-text">
              <span class="text-white text-xl">Email</span>
            </label>
            <input type="text" name="Email" class="input input-bordered bg-transparent border-0 outline-0 focus:outline-none" required>
          </div>

          <div class="form-control border-solid border-b-2 border-gray-200 relative mt-5">
            <label class="label absolute ease-in-out cursor-text">
              <span class="text-white text-xl">Password</span>
            </label>
            <input type="password" name="pass" class="input input-bordered bg-transparent border-0 outline-0 focus:outline-none" required>
          </div>
            <a href="#" class="mt-3 hover:underline">Forgot password?</a>

          <div class="form-control mt-6">
            <input class="btn btn-primary rounded-full" type="submit" name="submit" value="Login">
          </div>
        </form>


          <p>Don't have an account? <a class="hover:underline" href="">Register</a></p>
        </div>
      </div>
    </div>
  </div>



</body>
</html>