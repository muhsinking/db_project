<?php
    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    
    $db = mysqli_connect('localhost','mcgrail_conserv','N3v3rSv3nd1ng','mcgrail_conserv2');
    
    if($db) {
        $sql = "INSERT INTO Students (ID,firstName,lastName) VALUES (NULL,'$firstName','$lastName');";
        
        $query = mysqli_query($db,$sql);
        
        if($query) {
            header("Location: Students.php");
        } else {
            echo "Bad Query!\n";
        }
    
    } else {
        echo "Not Connected to Database.\n"; 
    }

?>