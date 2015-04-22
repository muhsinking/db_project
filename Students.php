<?php 
    $db = mysqli_connect("localhost","mcgrail_conserv","N3v3rSv3nd1ng","mcgrail_conserv2");
    
    if ($db) {
        $sql = "SELECT * FROM Students ORDER BY lastName, firstName";
        $query = mysqli_query($db,$sql);
        
        if ($query) {
            $num_rows = mysqli_num_rows($query);
            
            if($num_rows > 0) {
                echo "<table border=\"1\">\n";
                echo "  <tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>\n";
                for($i = 0; $i < $num_rows; $i++) {
                    $student = mysqli_fetch_assoc($query);
                    
                    $ID         = $student['ID'];
                    $firstName  = $student['firstName'];
                    $lastName   = $student['lastName'];
                    
                    echo "<tr><td>$ID</td><td>$firstName</td><td>";
                    echo "$lastName</td><td><a href=\"DeleteStudent.php?ID=$ID\">Delete</a></td>";
                    echo "<td><a href=\"UpdateStudent1.php?ID=$ID&firstName=$firstName&lastName=$lastName\">Update</a></tr>\n";
                }                
                echo "</table><br/>\n";
                echo "<h3>Add Student</h3>\n";
                echo "<form action=\"AddStudent.php\" method=\"get\">\n";
                echo "  <table>\n";
                echo "    <tr><th>First Name:</th><td><input type=\"text\" name=\"firstName\"/></td></tr>\n";
                echo "    <tr><th>Last Name:</th><td><input type=\"text\" name=\"lastName\"/></td></tr>\n";
                echo "  </table>\n";
                echo "<input type=\"submit\" name=\"submit\" value=\"Add Student\"/>";
                echo "</form>\n";
                
            } else {
                echo "The Students table is empty.<br/>\n";
            }
        } else {
            echo "Sorry, the query is not well formed.";
        }
        
        mysqli_close($db);
    } else {
        echo "Not Connected to Database.";
    }
?>