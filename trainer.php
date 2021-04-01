

<section class="text-gray-600 body-font bg-gray-300" id="team">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-3xl font-medium title-font mb-4 text-gray-900 tracking-widest">OUR<button class="py-1 px-4 bg-red-500 text-white focus:outline-none">TEAM</button></h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base  "> Meet The Best Coach Of Nepal</p>
      </div>
      <div class="flex flex-wrap -m-4">
      <?php
    include('admin/config.php');
    $query="SELECT * FROM trainer ORDER BY id asc LIMIT 4";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
        <div class="p-4 lg:w-1/2">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <?php echo '<img src="admin/uploads/'. $row["file"].'" alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4">'; ?>

            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-gray-900"><?php echo $row["name"]; ?></h2>
              <h3 class="text-gray-500 mb-3"><?php echo $row["specialist"]; ?></h3>
              <p class="mb-4"><?php echo $row["description"]; ?></p>
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