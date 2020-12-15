<?php

if(isset($_POST['create_post'])){
    
                                    $post_catagory_id=$_POST['post_catagory_id'];
                                    $post_title=$_POST['post_title'];
                                    $post_author=$_POST['post_author'];
    
                                    $post_date=date('d-m-y');
                                                    
                                    $post_image=$_FILES['image']['name'];
                                    $post_img_temp=$_FILES['image']['tmp_name'];
    
                                    $post_status=$_POST['post_status'];
                                    $post_tags=$_POST['post_tags'];
                                    $post_content=$_POST['post_content'];
                                    $post_comment_count=4;
                        
                                move_uploaded_file($post_img_temp , "../images/$post_image");
    
                                    $query="Insert INTO posts(post_catagory_id,post_title,post_author,post_date,post_image,post_status,post_tags,post_content,post_comment_count)";
                                    $query.="VALUES({$post_catagory_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{ $post_status}','{$post_tags}','{$post_content}',{$post_comment_count})";
    
                                    $create_post_query=mysqli_query($connection,$query);
    
                                     confirmQuery($create_post_query);
                                   
    
}



?>



<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
    <label for="title">Post Title</label>
        <input type="text" class="form-control" name="post_title">
    </div>
    
    <div class="form-group">
    <label for="post_catagory">Post Catagory Id</label>
        <input type="text" class="form-control" name="post_catagory_id">
    </div>

     <div class="form-group">
    <label for="author">Post Author</label>
        <input type="text" class="form-control" name="post_author">
    </div>
    
     <div class="form-group">
    <label for="date">Post Date</label>
        <input type="text" class="form-control" name="post_date">
    </div>
    
    
     <div class="form-group">
    <label for="post_image">Post Image</label>
        <input type="file" name="image">
    </div>

     <div class="form-group">
    <label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="post_status">
    </div>

    
     <div class="form-group">
    <label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>
    
    
     <div class="form-group">
    <label for="Post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
         </textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
        
    </div>

















</form>