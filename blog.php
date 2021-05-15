<section class="text-gray-600 body-font bg-gray-300" id="blog">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">BL<button class="py-1 px-1 bg-red-500 text-white focus:outline-none">OG</button></h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500">Articles Related to Body Building!! </p>
        </div>
        <div class="flex flex-wrap -m-4">

        <?php
    include('admin/config.php');
    $query="SELECT * FROM blog ORDER BY id desc LIMIT 3";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
    

    <div class="p-4 md:w-1/3 sm:mb-0 mb-6 border-2 border-gray-200 border-opacity-60 rounded-lg">
              <div class="rounded-lg h-64 overflow-hidden ">
                <?php echo '<img src="admin/uploads/'. $row["file"].'" alt="blog" class="object-cover object-center h-full w-full">'; ?>

              </div>
              <h2 class="text-xl font-medium title-font text-gray-900 mt-5"><?php echo $row["topic"]; ?></h2>
              <p class="text-base leading-relaxed mt-2"><?php echo $row["summary"]; ?></p>
              <a href="showblog.php?id=<?php echo $row['id'];?>" class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0" name="submit">Learn More
                    </a>
            </div>
            <?php 
    }
    }               
    ?>


        </div>
        
  </div>
  <button class="flex mx-auto text-black  border-0 py-2 px-2 focus:outline-none  rounded text-lg" href="allblog.php">
            <a href="allblog.php">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-8 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
            </a>
          </button>
</section>



