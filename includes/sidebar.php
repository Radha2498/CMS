<div class="col-md-4">
                    
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="index.php" method="post">
                                
                        <script async src=  "https://cse.google.com/cse.js?cx=007019498718139788174:amtiepdpgeg"> 
                        </script> 
                        <div class="gcse-search"></div> 
                    
                    </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    
                    
                    
                    <?php
                    
                    $query="SELECT * from catagory_table";
                    $select_catagory_sidebar=mysqli_query($connection ,$query);
                   
                    ?>
                    
                    
                    
                    
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php
                                 while($row=mysqli_fetch_assoc($select_catagory_sidebar))
                                  {
                                    $catagory_title=$row['catagory_title'];
                                     echo "<li><a href='#'>{$catagory_title}</a></li>";
                                   }
                               
                                
                                ?>
                              
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
<!--
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
-->
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <?php include "widget.php"; ?>

            </div>