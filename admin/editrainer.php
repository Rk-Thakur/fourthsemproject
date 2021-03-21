<?php
                  include_once  ('config.php');
                  $id=$_REQUEST['id'];
                  $sql="SELECT * FROM trainer where id='$id'";
                  $result=mysqli_query($conn,$sql);
                        if($result)
                        {
                            $row=mysqli_fetch_assoc($result);

                        }
                        ?>
                        <h1>Update Trainer </h1>
                        <?php
                        if(isset($_POST['new']))
                        {
                        $id=$_REQUEST['id'];
                        $image=$_FILES["file"]["name"];
                        $name=$_REQUEST['name'];
                        $specialist=$_REQUEST['specialist'];
                        $description=$_REQUEST['description'];
                        $update="UPDATE trainer set file='$image' ,name='$name',specialist='$specialist',description='$description' where id='$id' ";
                        $result=mysqli_query($conn,$update);
                        if($result){
                        header("Location: trainer.php");//redirect to view.php after successfully updated record
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
        <p><input type="text" name="name"  required value="<?php echo$row['name'];?>" /></p>
        <p><input type="text" name="specialist"  required value="<?php echo$row['specialist'];?>" /></p>
        <p><input type="text" name="description"  required value="<?php echo $row['description'];?>" /></p>
            <p><input type="submit" name="submit" value=" Update Trainer"></p>
    </form>
    </div>

    <?php } ?>