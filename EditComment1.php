<form action="EditPost2.php" method="get">
<?php
    $Number= $_REQUEST['Number'];
    $Title = $_REQUEST['Title'];
    $Content = $_REQUEST['Content'];
    
    echo "<input type=\"hidden\" name=\"Number\" value=\"$Number\"/>\n";
    echo "<table>\n";
    echo "  <tr><th>Title:</th><td><input type=\"text\" name=\"Title\" value=\"$Title\"/></td></tr>\n";
    echo "  <tr><th>Content:</th><td><input type=\"text\" name=\"Content\" value=\"$Content\"/></td></tr>\n";
    echo "</table>\n";

?>
  <input type="submit" name="submit" value="Edit Post"/>
</form>