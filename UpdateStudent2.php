<?php
    $ID = $_REQUEST['ID'];
    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];

    
    $db = mysqli_connect('localhost','mcgrail_conserv','N3v3rSv3nd1ng','mcgrail_conserv2');
    
    if ($db) {
        $sql = "UPDATE Students SET firstName = '$firstName', lastName = '$lastName' WHERE ID = '$ID'";
        
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