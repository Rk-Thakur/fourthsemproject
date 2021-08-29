<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="bg-white-200  " id="home" >
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row ">
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start ">
        <a href="https://www.facebook.com" class="text-gray-500 hover:text-blue-600" >
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a href="https://www.twitter.com" class="ml-3 text-gray-500 hover:text-blue-200">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a href="https://www.instagram.com" class="ml-3 text-gray-500 hover:text-red-600">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
    </div>
</div>
  <!-- header -->
  <header class="text-black-600 body-font-black  bg-black   " id="header">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center text-bold bg-black ">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="index.php">
              <img src="images/logo.JPG" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12 text-white p-2  rounded-full" viewBox="0 0 24 24">
        <span class="ml-3 text-xl text-3xl text-bold text-white">A.S.T GYM KHANA </span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center text-xl text-white ">
        <a class="mr-5 hover:text-red-600 " href="index.php#home">Home</a>
        <a class="mr-5 hover:text-red-600 " href="index.php#gallery">Gallery</a>
        <a class="mr-5 hover:text-red-600 " href="index.php#team">Trainee</a>
        <a class="mr-5 hover:text-red-600 " href="index.php#price">Pricing</a>
        <a class="mr-5 hover:text-red-600 "href="index.php#blog">Blog</a>
        <a class="mr-5 hover:text-red-600 " href="index.php#contact">Contact</a>
        <a class="mr-5 hover:text-red-600 " href="workout.php">Workout</a>

      </nav>
      <a href="register.php" class=" text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-400 rounded text-lg  "><i class="fas fa-user-plus"></i></a>
    </div>
</header>

<section class="text-gray-600 body-font bg-gray-300" id="blog">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-3xl font-medium title-font mb-4 text-gray-900 tracking-widest">GAL<button class="py-1 px-4 bg-red-500 text-white focus:outline-none">LERY</button></h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base  ">Client Transformation</p>
        </div>
        <div class="flex flex-wrap -m-4">
    <?php
    include('admin/config.php');
    $query="SELECT * FROM gallery ORDER BY id desc ";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
    <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
        <?php echo '<img src="admin/uploads/'. $row["file"].'" alt="gallery" class="absolute rounded-lg inset-0 w-full h-full object-cover object-center  cursor-pointer">'; ?>
        <div class="px-12 py-14 relative z-10 w-full border-4 border-gray-200 bg-gray-100 opacity-0 hover:opacity-50">
            <h2 class="tracking-widest text-sm title-font font-medium text-red-500 mb-1"><?php echo $row["topic"]; ?></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?php echo $row["name"]; ?></h1>
            <p class="leading-relaxed"><?php echo $row["description"]; ?></p>
            
        </div>
        </div>
    </div>
    <?php 
    }
    }               
    ?>


        </div>
        
</div>
</section>



</body>
</html>