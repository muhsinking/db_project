<?php
    $Number = $_REQUEST['Number'];
    
    $db = mysqli_connect("localhost","mcgrail_group5","f1v3@l1v3","mcgrail_group5");
    
    if ($db) {
        $sql = "DELETE FROM Posts WHERE Number = '$Number'";
        
        $query = mysqli_query($db, $sql);
        
        if ($query) {
            header("Location: Posts.php");
        
        } else {
            echo "Broken Query!\n";
        }
    } else {
        echo "Database ist kaput.\n";
    }

?>