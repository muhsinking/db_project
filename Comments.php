<?php 
    $db = mysqli_connect("localhost","mcgrail_group5","f1v3@l1v3","mcgrail_group5");
    $ID = $_REQUEST['ID'];
    $Title = $_REQUEST['Title'];
    $PostContent = $_REQUEST['Content'];

    echo "<html>";
    echo "<head>";
    echo "  <title>Comments on $Title</title>";
    echo "  <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">";
    echo "</head>";
    echo "<script>";
    echo "  function inputFocus(i){";
    echo "      if(i.value==i.defaultValue){ i.value=\"\"; i.style.color=\"#000\"; }";
    echo "  }";
    echo "  function inputBlur(i){";
    echo "      if(i.value==\"\"){ i.value=i.defaultValue; i.style.color=\"#888\"; };";
    echo "  }";
    echo "</script>";
    echo "<body>";
    echo "  <div class=\"container\">";
    echo "      <div class=\"row\">";
    echo "          <div class=\"col-md-8\" style=\"float:none; margin: 0 auto\">";
    echo "              <h1 class=\"page-header\">";
    echo "                  $Title <br>";
    echo "                  <blockquote style=\"font-weight:normal;\">$PostContent</blockquote>";
    echo "                  <a class=\"btn btn-primary\" href=\"index.php\"><span class=\"glyphicon glyphicon-menu-left\">";
    echo "                  </span>&nbsp; Return to list</a>";
    echo "              </h1>";

    if ($db) {
        $sql = "SELECT Email, Content, Number FROM Comments WHERE Post = '$ID' ORDER BY Number DESC";
        $query = mysqli_query($db,$sql);
        
        if ($query) {
            $num_rows = mysqli_num_rows($query);
            
            if($num_rows > 0) {
                for($i = 0; $i < $num_rows; $i++) {
                    $comment = mysqli_fetch_assoc($query);
                    
                    $Number = $comment['Number'];
                    $Email = $comment['Email'];
                    $Content = $comment['Content'];
                    
                    echo "<p class=\"lead\">";
                    echo "  <h3>$Email</h3>";
                    echo "</p>";
                    echo "<p>$Content</p>";
                    echo "<a class=\"btn btn-primary\" style=\"margin-right: 5px;\" href=\"EditComment1.php?Parent=$ID&ID=$Number&Email=$Email&Content=$Content&PostTitle=$Title&PostContent=$PostContent\">Edit &nbsp; <span class=\"glyphicon glyphicon-edit\"></span></a>";
                    echo "<a class=\"btn btn-primary\" href=\"DeleteComment.php?Parent=$ID&ID=$Number&PostTitle=$Title&PostContent=$PostContent\">Delete &nbsp; <span class=\"glyphicon glyphicon-trash\"></span></a>";
                    echo "<hr>";
                }                
            } else {
                echo "<div style=\"margin-bottom:20px;\">No comments yet!</div>";
            }

            echo "<form id=\"add_comment\" action=\"AddComment.php\" method=\"get\">\n";
            echo "<input type=\"hidden\" name=\"Parent\" value=\"$ID\"\>";
            echo "<input type=\"hidden\" name=\"PostTitle\" value=\"$Title\"/>\n";
            echo "<input type=\"hidden\" name=\"PostContent\" value=\"$PostContent\"/>\n";
            echo "  <div class=\"form-group\">";
            echo "    <textarea name = \"Content\" style = \"resize:none; color:#888\" class=\"form-control\" 
                       rows=\"5\" id=\"comment\" onfocus=\"inputFocus(this)\" onblur=\"inputBlur(this)\">Say something about this post!</textarea>";
            echo "  </div>";
            echo "  <div class=\"form-group\">";
            echo "    <input type=\"text\" name=\"Email\" class=\"form-control\" id=\"usr\" style=\"color:#888;\" 
                       value=\"Email\" onfocus=\"inputFocus(this)\" onblur=\"inputBlur(this)\" />";
            echo "  </div>";
            echo "  <a class=\"btn btn-primary\" type=\"submit\" name=\"submit\" href=\"javascript:{}\" onclick=\"document.getElementById('add_comment').submit();\">Submit &nbsp; <span class=\"glyphicon glyphicon-ok\"></span></a>";
            echo "</form>\n";
            echo "<hr>";

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


        } else {
            echo "Sorry, the query is not well formed.";
        }
        
        mysqli_close($db);
    } else {
        echo "Not Connected to Database.";
    }
?>
