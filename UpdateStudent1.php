<form action="UpdateStudent2.php" method="get">
<?php
    $ID = $_REQUEST['ID'];
    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    
    echo "<input type=\"hidden\" name=\"ID\" value=\"$ID\"/>\n";
    echo "<table>\n";
    echo "  <tr><th>First Name:</th><td><input type=\"text\" name=\"firstName\" value=\"$firstName\"/></td></tr>\n";
    echo "  <tr><th>Last Name:</th><td><input type=\"text\" name=\"lastName\" value=\"$lastName\"/></td></tr>\n";
    echo "</table>\n";

?>
  <input type="submit" name="submit" value="Update Student"/>
</form>