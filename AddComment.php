<?php
    $Parent = intval($_REQUEST['Parent']);
    $Email = $_REQUEST['Email'];
    $Content = $_REQUEST['Content'];
    $db = mysqli_connect("localhost","mcgrail_group5","f1v3@l1v3","mcgrail_group5");
    
    if($db) {
        $sql = "INSERT INTO Comments (Number,Post,Email,Content) VALUES (NULL,'$Parent','$Email','$Content');";
        
        $query = mysqli_query($db,$sql);
        
        if($query) {
            header("Location: Comments.php?ID=$Parent");
        } else {
            echo "Bad Query!\n";
        }
    
    } else {
        echo "Not Connected to Database.\n"; 
    }

?>