<?php
include("admin/config.php");
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $address= $_POST['address'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $trainer = $_POST['trainer'];
  $package= $_POST['package'];
  $payment= $_POST['payment'];
  if(empty($trainer) || empty($package) || empty($payment)){
    // echo '<script type="text/javascript">';
    // echo ' alert("Please Select The Values")';  //not showing an alert box.
    // echo '</script>';   
    header("Location: register.php");
  }
  $sql =  "INSERT INTO registration(name,address,contact,email,trainer,package,payment) Values('$name','$address','$contact','$email','$trainer','$package','$payment')";
  $result = mysqli_query($conn,$sql);
  if($result){
    // echo 'data inserted into table';
  }else{
    // echo "data not  inserted into table".mysqli_error($conn);
  }

} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


</head> 
<body>
  <!-- socialmedia -->
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
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img src="images/logo.JPG" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12 text-white p-2  rounded-full" viewBox="0 0 24 24">

        <span class="ml-3 text-xl text-3xl text-bold text-white">A.S.T GYM KHANA </span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center text-2xl text-white ">
        <a class="mr-5 hover:text-red-600 " href="index.php#home">Home</a>
        <a class="mr-5 hover:text-red-600 " href="index.php#gallery">Gallery</a>
        <a class="mr-5 hover:text-red-600 " href="index.php#team">Trainee</a>
        <a class="mr-5 hover:text-red-600 " href="index.php#price">Pricing</a>
        <a class="mr-5 hover:text-red-600 "href="index.php#blog">Blog</a>
        <a class="mr-5 hover:text-red-600 " href="index.php#contact">Contact</a>

      </nav>
      

      <a href="register.php" class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg  ">Member!!</a>
    </div>
  </header>
  <!-- Registration Form -->
  <section class="text-gray-600 body-font relative">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Thanks For Choosing Us!!!!</h1>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
              <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="address" class="leading-7 text-sm text-gray-600">Address</label>
              <input type="text" id="address" name="address" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="name" class="leading-7 text-sm text-gray-600">Contact</label>
              <input type="number" id="number" name="contact" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-1/2">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">Trainer</label> <br>
                <input type="radio" name="trainer"  value="Ranjan" id=""> Ranjan Kumar Thakur   <br>
                <input type="radio" name="trainer"  value="Arush" id=""> Arush Joshi   <br>
                <input type="radio" name="trainer"  value="Tejash" id=""> Tejash Shrestha   <br>
                <input type="radio" name="trainer"  value="Suresh" id=""> Suresh Napit   <br>
                
              </div> 
            </div>

            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">Package</label> <br>
                <input type="radio" name="package" value="Starter" id=""> Starter ($9)   <br>
                <input type="radio" name="package" value="Basic" id=""> Basic ($27)  <br>
                <input type="radio" name="package" value="Pro" id=""> Pro ($74)  <br>
                <input type="radio" name="package" value="Unlimited" id=""> Unlimited ($140)  <br>
                
              </div> 
            </div>

            <div class="p-2 w-1/2">
            <div class="relative">
              <label for="payment" class="leading-7 text-sm text-gray-600">Payment</label> <br> 
              <select name="payment" id="">
                
                <option value="" class="border border-indigo-100">Select Option!!</option>
                <option value="Cash on Delivery">Cash On Delivery</option>
                <option value="Online Transaction">Online Payment</option>
              </select>
            </div>
          </div>
            
          
          <div class="p-2 w-full">
            <input type="submit"  value="Register"name="submit" class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"> 
          </div>

        </div>
      </div>
    </div>
</form>
  </section>

    
</body>
</html>