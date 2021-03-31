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
    <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <?php echo '<img src="admin/uploads/'. $row["file"].'" alt="blog" class="lg:h-48 md:h-36 w-full object-cover object-center">'; ?>
            <div class="p-6">
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?php echo $row["topic"]; ?></h1>
                <p class="leading-relaxed mb-3"><?php echo $row["summary"]; ?></p>
                <div class="flex items-center flex-wrap ">
                    <a href="showblog.php?id=<?php echo $row['id'];?>" class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0" name="submit">Learn More
                    </a>
                </div>
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


