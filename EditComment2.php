<?php
    $Number= $_REQUEST['Number'];
    $Title = $_REQUEST['Title'];
    $Content = $_REQUEST['Content'];

    $db = mysqli_connect("localhost","mcgrail_group5","f1v3@l1v3","mcgrail_group5");

    
    if ($db) {
        $sql = "UPDATE Posts SET Title = '$Title', Content = '$Content' WHERE ID = '$ID'";
        
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