<?php 

function confirmQuery($result){
         global $connection;
     if(!$result)
     {
         die ("QUERY FAILED." . mysqli_error($connection));
        }
}





function insert_catagory(){
 if(isset($_POST['submit'])){
     
     global $connection;
                               $catagory_title=$_POST['catagory_title'];
                                
                                
                                if($catagory_title=="" || empty($catagory_title)){
                                    
                                    echo "<h4 style='color:red'>Please enter catagory</h4>";
                                }else{
                                    
                                  $query="INSERT INTO catagory_table(catagory_title)";
                                    $query.="VALUE('{$catagory_title}')";
                                    $create_catagory_query=mysqli_query($connection, $query);
                                     
                                   if(!$create_catagory_query){
                                        die('Query not created' .mysqli_error($connection));
                                    }
                                    
                                    
                                }
                                
                                
                            }
    
}

function findAllCatagory(){
    global $connection;
    $query="SELECT * from catagory_table";
    $select_catagory=mysqli_query($connection ,$query);
     while($row=mysqli_fetch_assoc($select_catagory))
                                        {
                                            $catagory_id=$row['catagory_id'];
                                            $catagory_title=$row['catagory_title'];
                                             echo "<tr>";
                                            echo "<td>{$catagory_id}</td>";
                                            echo "<td>{$catagory_title}</td>";
                                             echo "<td><a href='catagories.php?delete={$catagory_id}'>Delete</a></td>";
                                             echo "<td><a href='catagories.php?edit={$catagory_id}'>Edit</a></td>";
                                             echo "</tr>";
                                        }
}

function deleteCatagory(){

   global $connection;
    
                                        if(isset($_GET['delete'])){
                                            $the_catagory_id=$_GET['delete'];
                                            $query="DELETE FROM catagory_table WHERE catagory_id={$the_catagory_id}";    
                                            $delete_query=mysqli_query($connection, $query);
                                            
                                            header("Location:../Admin/catagories.php");
                          }
}
?>