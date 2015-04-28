<form id="edit_comment" action="EditComment2.php" method="get">
<?php
	$Parent = $_REQUEST['Parent'];
    $Number = $_REQUEST['ID'];
    $Email = $_REQUEST['Email'];
    $Content = $_REQUEST['Content'];
    $PostTitle = $_REQUEST['PostTitle'];
    $PostContent = $_REQUEST['PostContent'];
    
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
    echo "                  Edit Comment";
    echo "              </h1>";
    echo "              <input type=\"hidden\" name=\"Parent\" value=\"$Parent\"/>";
    echo "              <input type=\"hidden\" name=\"Number\" value=\"$Number\"/>\n";
    echo "              <input type=\"hidden\" name=\"Email\" value=\"$Email\"/>\n";
    echo "              <input type=\"hidden\" name=\"PostTitle\" value=\"$PostTitle\"/>\n";
    echo "              <input type=\"hidden\" name=\"PostContent\" value=\"$PostContent\"/>\n";
    echo "              <div class=\"form-group\">";
    echo "                  <textarea name = \"Content\" style = \"resize:none; color:#888\" title = \"Content\" 
                             class=\"form-control\" rows=\"5\" id=\"comment\" onfocus=\"inputFocus(this)\" >$Content</textarea>";
    echo "              </div>";
    echo "          <a class=\"btn btn-primary\" type=\"submit\" name=\"submit\" href=\"javascript:{}\" onclick=\"document.getElementById('edit_comment').submit();\"> Submit &nbsp; <span class=\"glyphicon glyphicon-ok\"></span></a>";
    echo "          <hr>";

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

?>
</form>