<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="flex items-center h-screen w-full bg-gray-400">
  <div class="w-full bg-white rounded  p-8 m-4 md:max-w-sm md:mx-auto">

  <div class="w-full  p-4 ">
  <section class="w-20 h-20 mx-auto ">

  <img src="images/logo.JPG" height= "200" class="rounded-full" width="200" alt=" ">

        </section>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" onSubmit="return false">
      <h1 class=" text-xl font-bold">Sign in to your account</h1>
      <div>
        <span class="text-gray-600 text-sm">
          Don't have an account?
        </span>
        
        <a href="registerid.php" class="text-gray-700 text-sm font-semibold">Register</a>
      </div>
      <div class="mb-4 mt-6">
        <label class="block text-gray-700 text-sm font-semibold mb-2">
          Username
        </label>
        <input
          class="text-sm  rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10"
          name="uname"
          type="text"
          placeholder=" Username"
        />
      </div>
      <?php
    if(isset($errUsername)){
        echo $errUsername;
    }
    ?>
      <div class="mb-6 mt-6">
        <label
          class="block text-gray-700 text-sm font-semibold mb-2"
          htmlFor="password"
        >
          Password
        </label>
        <input
          class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10"
          id="password"
          type="password"
          name="password"
          placeholder="****************"
        />

      </div>
      <?php
    if(isset($errPassword)){
        echo $errPassword;
    }
    ?>
      <div class="flex w-full mt-8">
        
        <input type="submit" value="Sign In" name="submit" class="w-full bg-gray-800 hover:bg-grey-900 text-white text-sm py-2 px-4 font-semibold rounded focus:outline-none focus:shadow-outline h-10">
      </div>
    </form>
  </div>
    
  </div>
</div>
</body>
</html>



