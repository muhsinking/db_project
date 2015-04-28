<form action="EditComment2.php" method="get">
<?php
	$Parent = $_REQUEST['Parent'];
    $Number = $_REQUEST['ID'];
    $Email = $_REQUEST['Email'];
    $Content = $_REQUEST['Content'];
    
    echo "<input type=\"hidden\" name=\"Parent\" value=\"$Parent\"/>";
    echo "<input type=\"hidden\" name=\"Number\" value=\"$Number\"/>\n";
    echo "<table>\n";
    echo "  <tr><th>Email:</th><td><input type=\"text\" name=\"Email\" value=\"$Email\"/></td></tr>\n";
    echo "  <tr><th>Content:</th><td><input type=\"text\" name=\"Content\" value=\"$Content\"/></td></tr>\n";
    echo "</table>\n";

?>
  <input type="submit" name="submit" value="Edit Comment"/>
</form>