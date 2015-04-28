<?php
    $Number = $_REQUEST['ID'];
    $Parent = $_REQUEST['Parent'];
    $PostTitle = $_REQUEST['PostTitle'];
    $PostContent = $_REQUEST['PostContent'];
    
    $db = mysqli_connect("localhost","mcgrail_group5","f1v3@l1v3","mcgrail_group5");
    
    if ($db) {
        $sql = "DELETE FROM Comments WHERE Number = '$Number'";
        $query = mysqli_query($db, $sql);

        if ($query) {
            header("Location: Comments.php?ID=$Parent&Title=$PostTitle&Content=$PostContent");
        
        } else {
            echo "Broken Query!\n";
        }
    } else {
        echo "Database ist kaput.\n";
    }

?>