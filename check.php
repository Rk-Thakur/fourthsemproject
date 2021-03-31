<!DOCTYPE html>
<html>
<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  left: 50%;
  bottom: 100%;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  margin-left: -60px;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
<body style="text-align:center;">

<p>Move the mouse over the text below:</p>

<div class="tooltip">Hover over me
<?php
                  include_once('admin/config.php');
                  $id=$_REQUEST['id'];
                  $sql="SELECT * FROM payments where id=$id ";
                  $result=mysqli_query($conn,$sql);
                        if($result)
                        {
                            $row=mysqli_fetch_assoc($result);
                            

                        }
                        ?>
  <span class="tooltiptext"><?php echo $row['total'] ?></span>
</div>

<p>Note that the position of the tooltip text isn't very good. Go back to the tutorial and continue reading on how to position the tooltip in a desirable way.</p>

</body>
</html>

