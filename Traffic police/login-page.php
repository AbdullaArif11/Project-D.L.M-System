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
    main {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;

      /* background: linear-gradient(to top, #1E293B, #0083B0, #4FD1C5); */
      /* background: linear-gradient(to bottom, #1E293B, #0083B0 50%, #4FD1C5); */
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
<body>
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

<main>
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

          <div class="form-control border-solid border-b-2 border-gray-200 relative mt-5">
            <label class="label absolute ease-in-out cursor-text">
              <span class="text-white text-xl">ID</span>
            </label>
            <input type="text" name="ID" class="input input-bordered bg-transparent border-0 outline-0 focus:outline-none" required>
          </div>

          <div class="form-control border-solid border-b-2 border-gray-200 relative mt-5">
            <label class="label absolute ease-in-out cursor-text">
              <span class="text-white text-xl">Password</span>
            </label>
            <input type="password" name="pass" class="input input-bordered bg-transparent border-0 outline-0 focus:outline-none" required>
          </div>

            <a href="#" class="mt-3 hover:underline">Forgot password?</a>

          <div class="form-control mt-6">
            <input class="btn  rounded-full border-1 border-white" type="submit" name="submit" value="Login">
          </div>
        </form>

        </div>
      </div>
    </div>
  </div>
</main>


</body>
</html>