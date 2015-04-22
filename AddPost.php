<?php
    $Title = $_REQUEST['Title'];
    $Content = $_REQUEST['Content'];
    
    $db = mysqli_connect("localhost","mcgrail_group5","f1v3@l1v3","mcgrail_group5");
    
    if($db) {
        $sql = "INSERT INTO POSTS (Number,Title,Content) VALUES (NULL,'$Title','$Content');";
        
        $query = mysqli_query($db,$sql);
        
        if($query) {
            header("Location: Posts.php");
        } else {
            echo "Bad Query!\n";
        }
    
    } else {
        echo "Not Connected to Database.\n"; 
    }

?>