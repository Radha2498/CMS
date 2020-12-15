
<?php include "include/header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "include/navigation.php"; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin Site
                            <small>Author</small>
                            
                        </h1>
                        <div class="col-xs-6">
                            
                            <?php insert_catagory(); ?>
                              
                        <form action="" method="post">
                            <label style="font-size:21px;" for="catagory_title" >Catagory</label>
                            <div class="form-group">
                            <input type="text" name="catagory_title" class="form-control">
                            </div>
                            <div>
                                <input type="submit" name="submit" class="btn btn-primary" value="Add Catagory">
                           
                            </div>
                            
                            
                            </form>
                           <?php
                            
                            if(isset($_GET['edit'])){
                                
                            $catagory_id=$_GET['edit'];
                            include "include/update_catagory.php";
                                
                            }
                            ?>
                            
                        </div>
                               
                       <div class="col-xs-6">
                           
                            
                    
                            <table class="table table-bordered"  align="right">

                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Catagory Title</th>
                                    </tr>
                                    </thead>
                                
                                    <tbody>
                                        
                                        <?php
                                       
                                        findAllCatagory();
                                        
                                        ?>
                                      
                                        
                                        
                                        <?php
                                        
                                        deleteCatagory();
                                        
                                        ?>
   
                                        
                                        
<!--

                                    <tr>
                                        <td>New cources</td>
                                         <td>Old cources</td>
                                        </tr>
-->

                                        
                                        
                                   </tbody>                           
                                </table>
                            </div>
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "include/footer.php"; ?>