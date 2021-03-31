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
                        <h1>Update BLOG </h1>
                        <?php
                        if(isset($_POST['new']))
                        {
                       $id=$_REQUEST['id'];
                         $image=$_FILES["file"]["name"];
                        $topic=$_REQUEST['topic'];
                        $summary= $_REQUEST['summary'];
                        $description=$_REQUEST['description'];
                        $update="UPDATE blog set file='$image' ,topic='$topic',summary= '$summary',description='$description' where id='$id' ";
                        $result=mysqli_query($conn,$update);
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
        <p><input type="text" name="summary"  required value="<?php echo$row['summary'];?>" /></p>
        <p><input type="text" name="description"  required value="<?php echo $row['description'];?>" /></p>
            <p><input type="submit" name="submit" value=" Update Blog"></p>
    </form>
    </div>

    <?php } ?>