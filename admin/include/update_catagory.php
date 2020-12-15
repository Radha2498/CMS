 
                            <form action="" method="post">
                            <label style="font-size:21px;" for="catagory_title" >Edit Catagory</label>
                                 <?php
                                if(isset($_GET['edit']))
                                {       
                                     $catagory_id=$_GET['edit'];
                                     $query="SELECT * from catagory_table WHERE catagory_id=$catagory_id";
                                     $select_catagory_id=mysqli_query($connection ,$query);
                                      while($row=mysqli_fetch_assoc($select_catagory_id))
                                        {
                                            $catagory_id=$row['catagory_id'];
                                            $catagory_title=$row['catagory_title'];
                                      
                                           ?>
                                
                                 <input value="<?php if(isset($catagory_title)){echo $catagory_title;} ?>" type="text"  name="catagory_title" class="form-control">
                                
                                
                                          <?php } } ?>
                                
                                
                                <?php
                                            if(isset($_POST['update_catagory'])){
                                            $the_catagory_title=$_POST['catagory_title'];
                                            $query="UPDATE catagory_table SET catagory_title='{$the_catagory_title}' WHERE catagory_id={$catagory_id}";    
                                            $update_query=mysqli_query($connection, $query);
                                                
                                                if(!$update_query){
                                                    die("query failed" . mysqli_error($connection));
                                                }
                                            }
                                            
                                ?>
                                
                           
                            <div class="form-group">
                        
                            </div>
                            <div>
                                <input type="submit" name="update_catagory" class="btn btn-primary" value="Update Catagory">
                           
                            </div>
                            
                            
                            </form>