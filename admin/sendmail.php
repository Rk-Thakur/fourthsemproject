<?php

                include("config.php");
                $id=$_REQUEST['id'];
                $sql="SELECT * FROM contact where id=$id ";
                $result=mysqli_query($conn,$sql);
                        if($result)
                        {
                            $row=mysqli_fetch_assoc($result);
                            

                        }
                        
                        $to = $row['email'];
                        $subject = "Appreciation!🙂";
                        $message = "Thank you for Contacting us, We will get to u very soon " ;
                        $header = 'From: astgym89@gmail.com';
                        if(mail($to,$subject,$message, $header)){
                                
                            echo '<script type="text/javascript">alert("Mail has been sent!!");window.location.href="contact.php";</script>';
                        }else{
                            echo "Something went wrong";
                        }
                        
                        ?>



