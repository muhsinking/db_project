<?php
    $ID = $_REQUEST['ID'];
    
    $db = mysqli_connect('localhost','mcgrail_conserv','N3v3rSv3nd1ng','mcgrail_conserv2');
    
    if ($db) {
        $sql = "DELETE FROM Students WHERE ID = '$ID'";
        
        $query = mysqli_query($db, $sql);
        
        if ($query) {
            header("Location: Students.php");
        
        } else {
            echo "Broken Query!\n";
        }
    } else {
        echo "Database ist kaput.\n";
    }


?>