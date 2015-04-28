<form id="edit_post" action="EditPost2.php" method="get">
<?php
    $Number= $_REQUEST['Number'];
    $Title = $_REQUEST['Title'];
    $Content = $_REQUEST['Content'];
    echo "<html>";
    echo "<head>";
    echo "  <title>Our Blog</title>";
    echo "  <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">";
    echo "</head>";
    echo "<script>";
    echo "  function inputFocus(i){";
    echo "      if(i.value==i.defaultValue){ i.style.color=\"#000\"; }";
    echo "  }";
    echo "  function inputBlur(i){";
    echo "      if(i.value==\"\"){ i.style.color=\"#888\"; };";
    echo "  }";
    echo "</script>";
    echo "<body>";
    echo "<body>";
    echo "  <div class=\"container\">";
    echo "      <div class=\"row\">";
    echo "          <div class=\"col-md-8\" style=\"float:none; margin: 0 auto\">";
    echo "              <h1 class=\"page-header\">";
    echo "                  Edit Post";
    echo "              </h1>";
    echo "				<div class=\"form-group\">";
   	echo "					<input type=\"hidden\" name=\"Number\" value=\"$Number\"/>\n";
    echo "              	<input type=\"text\" name=\"Title\" class=\"form-control\" 
    						 id=\"usr\" style=\"color:#888;\" value=\"$Title\" onfocus=\"inputFocus(this)\" />";
    echo "				</div>";
    echo "				<div class=\"form-group\">";
    echo "              	<textarea name = \"Content\" style = \"resize:none; color:#888\" title = \"Content\" 
    						 class=\"form-control\" rows=\"5\" id=\"comment\" onfocus=\"inputFocus(this)\" >$Content</textarea>";
    echo "				</div>";
    echo "  		<a class=\"btn btn-primary\" type=\"submit\" name=\"submit\" href=\"javascript:{}\" onclick=\"document.getElementById('edit_post').submit();\"> Submit &nbsp; <span class=\"glyphicon glyphicon-ok\"></span></a>";
    echo "			<hr>";

    echo "<footer>";
    echo "  <div class=\"row\">";
    echo "      <div class=\"col-lg-12\">";
    echo "          <p>Copyright &copy; MFK Softworks 2015</p>";
    echo "      </div>";
    echo "  </div>";
    echo "<footer>";

    echo "</div>";
    echo "</div>";
    echo "</div>";

    echo "</body>";
    echo "</html>";   

    // echo "<input type=\"hidden\" name=\"Number\" value=\"$Number\"/>\n";
    // echo "<table>\n";
    // echo "  <tr><th>Title:</th><td><input type=\"text\" name=\"Title\" value=\"$Title\"/></td></tr>\n";
    // echo "  <tr><th>Content:</th><td><input type=\"text\" name=\"Content\" value=\"$Content\"/></td></tr>\n";
    // echo "</table>\n";

?>
  <!-- <input type="submit" name="submit" value="Edit Post"/> -->
</form>