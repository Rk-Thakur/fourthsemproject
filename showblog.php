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
        <a class="text-gray-500 " >
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500 ">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
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
        <a class="mr-5 hover:text-red-600 smoothScroll" href="index.html">Home</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="index.html">Gallery</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="index.html">Trainee</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="index.html">Pricing</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="index.html">Blog</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="index.html">Contact</a>

      </nav>
      

      <a href="register.html" class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg  ">Member!</a>
    </div>
  </header>

<!-- blog -->
<section class="text-gray-600 body-font">


    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <?php
    include('admin/config.php');
    $query="SELECT * FROM blog ORDER BY id desc LIMIT 1";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <?php echo '<img src="admin/uploads/'. $row["file"].'" alt="hero" class="object-cover object-center rounded">'; ?>

      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><?php echo $row["topic"]; ?></h1>
        <p class="mb-8 leading-relaxed"> <?php echo $row["description"]; ?>
        </p>
      </div>
      <?php 
    }
    }               
    ?>
    </div>
</section>



<?php
                  include_once  ('config.php');
                  $id=$_REQUEST['id'];
                  $sql="SELECT * FROM blog where id='$id'";
                  $result=mysqli_query($conn,$sql);
                        if($result)
                        {
                            $row=mysqli_fetch_assoc($result);

                        }
                        ?>
                        <?php
                        if(isset($_POST['new']))
                        {
                       $id=$_REQUEST['id'];
                         $image=$_FILES["file"]["name"];
                        $topic=$_REQUEST['topic'];
                        $description=$_REQUEST['description'];
                        
                       if($result){
                        header("Location: blog.php");//redirect to view.php after successfully updated record
                         }
                        else{
                           echo"Record not Updated".mysqli_error($conn);
                          }
                          }else{
                        ?>

        <div>
        <form align="center" name="form" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="new" value="1"/>
        <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
        <p><input type="file" name="file"  required value="<?php echo$row['file'];?>" /></p>
        <p><input type="text" name="topic"  required value="<?php echo$row['topic'];?>" /></p>
        <p><input type="text" name="description"  required value="<?php echo $row['description'];?>" /></p>
            <p><input type="submit" name="submit" value=" Update Blog"></p>
    </form>
    </div>

    <?php } ?>




























































</body>
</html>