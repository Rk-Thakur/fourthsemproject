<?php
                  include_once  ('config.php');
                  $id=$_REQUEST['id'];
                  $sql="SELECT * FROM gallery where id='$id'";
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
                        $name=$_REQUEST['name'];
                        $description=$_REQUEST['description'];
                        $update="UPDATE gallery set file='$image' ,topic='$topic',name='$name',description='$description' where id='$id' ";
                        $result=mysqli_query($conn,$update);
                       if($result){
                        header("Location: gallery.php");//redirect to view.php after successfully updated record
                         }
                        else{
                           echo"Record not Updated".mysqli_error($conn);
                          }
                          }else{
                        ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Gallery</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  

        

<div class="flex items-center h-screen w-full bg-gray-400">
  <div class="w-full bg-white rounded  p-8 m-4 md:max-w-sm md:mx-auto">
  <h1 class=" w-full text-center text-grey-darkest mb-6"> Edit Gallery</h1>

    <form class="" name="form" action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="new" value="1"/>
          <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase  font-bold text-lg text-grey-darkest" for="Image">Image</label>
        <input class="border py-2 px-3 text-grey-darkest md:mr-2" type="file" name="file" value="<?php echo $row['file'];?>">
        <?php echo '<img src="uploads/'. $row["file"].'"height= "100" width="100" alt=" ">'; ?>
        
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest md:ml-2" for="Workout">Workout Name</label>
        <input class="border py-2 px-3 text-grey-darkest md:ml-2" type="text" name="topic" value="<?php echo $row['topic'];?>">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="Model">Model</label>
        <input class="border py-2 px-3 text-grey-darkest" type="text" name="name" value="<?php echo $row['name'];?>">
      </div>
      <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="Description">Description</label>

      <textarea class="border py-2 px-3 text-grey-darkest" name="description"  type="text" id="description" cols="30" rows="5">
      <?php echo$row['description'];?>
      </textarea>
      
      <button class="block   text-white bg-gray-900   uppercase  mx-auto p-4 rounded" type="submit" name="submit">
      Upload Gallery
      </button>
      
    </form>
    
  </div>
</div>



    <?php } ?>

    </body>
    </html>