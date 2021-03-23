<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}
?>

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
</head>

<body>
  <!-- social media -->
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
        <a class="mr-5 hover:text-red-600 smoothScroll" href="#home">Home</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="#gallery">Gallery</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="#team">Trainee</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="#price">Pricing</a>
        <a class="mr-5 hover:text-red-600 smoothScroll"href="#blog">Blog</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="#contact">Contact</a>

      </nav>
      

      <a href="register.php" class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg  ">Member!</a>
    </div>
  </header>

<!-- hero -->

  <div class="relative pt-16 pb-32 flex content-center items-center justify-center " style="min-height: 95vh">
    <div
      class="absolute top-0 w-full h-full bg-top bg-cover"
      style="background-image: url('images/1.jpg');">
      <span
        id="blackOverlay"
        class="w-full h-full absolute opacity-75 bg-black"
      ></span>
    </div>
    <div class="container relative mx-auto" >
      <div class="items-center flex flex-wrap">
        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
          <div>
            <h1 class="text-white font-semibold text-5xl animate__animated animate__fadeInUp animate__delay-1s" >
              Feel The <span class="text-red-500">Power</span>
            </h1>
            <p class="mt-4 text-lg text-gray-300 font-medium animate__animated animate__fadeInUp animate__delay-1s">
              Welcome to The A.S.T GYM KHANA. We are a fitness and training
              center that focuses on pushing you to your absolute limit.
              Connect with  us to get started today!!
            </p>
            <!-- <a
              href="#"
              class="bg-transparent hover:bg-orange-500 text-orange-500 font-semibold hover:text-white p-4 border border-orange-500 hover:border-transparent rounded inline-block mt-5 cursor-pointer"
              >Download Brochure</a
            > -->
            <div class="flex justify-center ">
              <a href="register.php" class="inline-flex text-white bg-red-500 border-0 py-2 px-6  hover:bg-red-600 rounded text-lg  font-semibold  p-4 border border-orange-500  rounded inline-block mt-5 animate__animated animate__fadeInUp animate__delay-1s">Become a member!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>



<!-- gallery -->
<?php
include("gallery.php");

?>

  <!-- Team -->

  <?php
include("trainer.php");
  ?>

<!-- SUCESS -->
<?php 
include("sucess.php");
?>

  <!-- pricing  -->
  <section class="text-gray-600 body-font overflow-hidden bg-gray-300" id="price">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Pricing<button class="py-1 px-4 bg-red-500 text-white focus:outline-none">Monthly</button></h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500">Get Your Dream Shape In Just</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">STARTER</h2>
            <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">$9</h1>
              
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>15 Cardio Classes
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>10 Swimming Lesson
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>10 Yoga Classes
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>20 Aerobics
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>20 Zumba Classes
            </p>  
            
            <a href="register.html" class="flex-wrap items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Get IT!</a>

          </div>
        </div>
        
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">BASIC</h2>
            <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>$27</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
            </h1>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>20 Zumba Classes
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>20 Zumba Classes
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>20 Zumba Classes
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>20 Zumba Classes
            </p>
            <p class="flex items-center text-gray-600 mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>20 Zumba Classes
            </p>
            <a href="register.html" class="flex-wrap items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Get IT!</a>

          </div>
        </div>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-red-500 flex flex-col relative overflow-hidden">
            <span class="bg-red-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">PRO</h2>
            <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>$74</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
            </h1>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>15 Cardio Classes
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>15 Cardio Classes
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>15 Cardio Classes
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>15 Cardio Classes
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>15 Cardio Classes
            </p>
            
            <a href="register.html" class="flex items-center mt-auto text-white bg-red-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-red-600 rounded">Get IT!</a>

          </div>
        </div>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">UNLIMITED</h2>
            <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>$140</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
            </h1>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Vexillologist pitchfork
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Tumeric plaid portland
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Hexagon neutra unicorn
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Vexillologist pitchfork
            </p>
            <p class="flex items-center text-gray-600 mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Mixtape chillwave tumeric
            </p>
              <a href="register.html" class="flex-wrap items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Get IT!</a>
              
            </div>
        </div>
      </div>
    </div>
  </section>




  <!-- adverstise -->
  <section class="text-gray-600 body-font bg-black">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col bg-cover bg-gray-400 opacity-75" style="
    background-image: url('images/2.jpg');">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white-900 text-white">DON’T THINK, BEGIN TODAY!
        </h1>
        <p class="mb-8 leading-relaxed text-white"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur incidun</p>
        <div class="flex justify-center">
          <a href="#contact" class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Become a member!</a>
        </div>
      </div>
    </div>
  </section>


  <!-- blog -->
  
  <?php
  include("blog.php");
  ?>

  <!-- contact us -->
  <?php
    include("contact.php");
  ?>
  <!-- footer -->
  <footer class="text-gray-600 body-font bg-gray-300">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <img src="images/logo.JPG" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12 text-white p-2  rounded-full" viewBox="0 0 24 24">
          <span class="ml-3 text-xl">A.S.T GYM KHANA</span>
        </a>
        <p class="mt-2 text-sm text-gray-500 text-center text-bold">We are a fitness and training
          center that focuses on pushing you to your absolute limit.
          Connect with  us to get started today!!</p> <br>
        <a href="register.php" class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Be Member!</a>
      </div>
      <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Cardio</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Swimming</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Swimming</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Cardio</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Cardio</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Swimming</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Swimming</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Cardio</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Cardio</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Swimming</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Swimming</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Cardio</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Cardio</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Swimming</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Swimming</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Cardio</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>