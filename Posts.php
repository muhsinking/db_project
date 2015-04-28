<?php 
    $db = mysqli_connect("localhost","mcgrail_group5","f1v3@l1v3","mcgrail_group5");
    
    if ($db) {
        $sql = "SELECT * FROM Posts ORDER BY Title, Content";
        $query = mysqli_query($db,$sql);
        
        if ($query) {
            $num_rows = mysqli_num_rows($query);
            
            if($num_rows > 0) {
                echo "<table border=\"1\">\n";
                echo "  <tr><th>ID</th><th>Title</th><th>Content/th></tr>\n";
                for($i = 0; $i < $num_rows; $i++) {
                    $post = mysqli_fetch_assoc($query);
                    
                    $Number = $post['Number'];
                    $Title = $post['Title'];
                    $Content = $post['Content'];
                    
                    echo "<tr><td>$ID</td><td>$Title</td><td>";
                    echo "$Content</td><td><a href=\"DeletePost.php?ID=$ID\">Delete</a></td>";
                    echo "<td><a href=\"EditPost1.php?ID=$ID&Title=$Title&Content=$Content\">Edit</a></tr>\n";
                }                
                echo "</table><br/>\n";
                echo "<h3>Add Post</h3>\n";
                echo "<form action=\"AddPost.php\" method=\"get\">\n";
                echo "  <table>\n";
                echo "    <tr><th>First Name:</th><td><input type=\"text\" name=\"Title\"/></td></tr>\n";
                echo "    <tr><th>Last Name:</th><td><input type=\"text\" name=\"Content\"/></td></tr>\n";
                echo "  </table>\n";
                echo "<input type=\"submit\" name=\"submit\" value=\"Add Post\"/>";
                echo "</form>\n";
                
            } else {
                echo "The Posts table is empty.<br/>\n";
            }
        } else {
            echo "Sorry, the query is not well formed.";
        }
        
        mysqli_close($db);
    } else {
        echo "Not Connected to Database.";
    }
?>
