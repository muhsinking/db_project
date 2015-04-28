<?php 
    $db = mysqli_connect("localhost","mcgrail_group5","f1v3@l1v3","mcgrail_group5");
    $ID = $_REQUEST['ID'];
    
    if ($db) {
        $sql = "SELECT Email, Content, Number FROM Comments WHERE Post = '$ID' ORDER BY Number";
        $query = mysqli_query($db,$sql);
        
        if ($query) {
            $num_rows = mysqli_num_rows($query);
            
            if($num_rows > 0) {
                echo "<table border=\"1\">\n";
                echo "  <tr><th>Email</th><th>Content</th></tr>\n";
                for($i = 0; $i < $num_rows; $i++) {
                    $comment = mysqli_fetch_assoc($query);
                    
                    $Number = $comment['Number'];
                    $Email = $comment['Email'];
                    $Content = $comment['Content'];
                    
                    echo "<tr><td>$Email</td><td>";
                    echo "$Content</td><td><a href=\"DeleteComment.php?ID=$Number\">Delete</a></td>";
                    echo "<td><a href=\"EditComment1.php?Number=$Number&Email=$Email&Content=$Content\">Edit</a></tr>\n";
                }                
                echo "</table><br/>\n";
                echo "<h3>Add Comment</h3>\n";
                echo "<form action=\"AddComment.php\" method=\"get\">\n";
                echo "  <table>\n";
                echo "    <tr><th>Email:</th><td><input type=\"text\" name=\"Email\"/></td></tr>\n";
                echo "    <tr><th>Your Comment:</th><td><input type=\"text\" name=\"Content\"/></td></tr>\n";
                echo "  </table>\n";
                echo "<input type=\"submit\" name=\"submit\" value=\"Add Comment\"/>";
                echo "</form>\n";
                
            } else {
                echo "The Comments table is empty.<br/>\n";
            }
        } else {
            echo "Sorry, the query is not well formed.";
        }
        
        mysqli_close($db);
    } else {
        echo "Not Connected to Database.";
    }
?>
