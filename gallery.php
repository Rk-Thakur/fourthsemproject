
<section class="text-gray-600 body-font bg-gray-300  " id="gallery">
<div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-3xl font-medium title-font mb-4 text-gray-900 tracking-widest">GAL<button class="py-1 px-4 bg-red-500 text-white focus:outline-none">LERY</button></h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base  ">Client Transformation</p>
    </div>
    <div class="flex flex-wrap -m-4">
    <?php
    include('admin/config.php');
    $query="SELECT * FROM gallery ORDER BY id desc LIMIT 6";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
    <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
        <?php echo '<img src="admin/uploads/'. $row["file"].'" alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center  cursor-pointer">'; ?>
        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-gray-100 opacity-0 hover:opacity-50">
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
    <div class="p-2 w-full">
    
    <button class="flex mx-auto text-black  border-0 py-2 px-2 focus:outline-none  rounded text-lg" href="allgallery.php">
      <a href="allgallery.php">
    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-8 ml-2" viewBox="0 0 24 24">
      <path d="M5 12h14M12 5l7 7-7 7"></path>
    </svg>
      </a>
    </button>


  </div>
    </div>
  </div>
</section>