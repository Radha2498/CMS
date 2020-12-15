  <table class="table table-bordered table-hover">
                            <thead>
                                
                            <tr>
                                <th>Id</th>
                               
                                <th>Title</th>
                                <th>Author</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Content</th>
                                <th>Tags</th>
                                <th>Comments</th>
                                <th>Status</th>
                            </tr>
                            
                            </thead>
                            <tbody>
                            <?php
                                $query="SELECT * FROM posts"; 
                                $select_post=mysqli_query($connection,$query);
                                while($row=mysqli_fetch_assoc($select_post))
                                {
                                    $post_id=$row['post_id'];
                                    $post_title=$row['post_title'];
                                    $post_author=$row['post_author'];
                                    $post_date=$row['post_date'];
                                    $post_image=$row['post_image'];
                                    $post_content=$row['post_content'];
                                    $post_tags=$row['post_tags'];
                                    $post_comment_count=$row['post_comment_count'];  
                                    $post_status=$row['post_status'];
                                    
                                    echo "<tr>";
                                    echo "<td>{$post_id}</td>";
                                    echo "<td>{$post_title}</td>";
                                    echo "<td>{$post_author}</td>";
                                    echo "<td>{$post_date}</td>";
                                    echo "<td><img class='img-responsive' src='../images/$post_image' alt='images'></td>";
                                    echo "<td>{$post_content}</td>";
                                    echo "<td>{$post_tags}</td>";
                                    echo "<td>{$post_comment_count}</td>";
                                    echo "<td>{$post_status}</td>";
                                    
                                    echo "</tr>";
                                
                                }
                            ?>
                                
                                
                                <td>3</td>
                                
                                <td>Node js</td>
                                <td>Joe Shove</td>
                                <td>2-2-2019</td>
                                <td>Not now</td>
                                <td>Language</td>
                                <td>Script</td>
                                <td>Most Demanded</td>
                                <td>Useful language</td>
                     </tbody>
                        </table>
                       