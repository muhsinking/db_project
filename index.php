
<html>
<head>
<title>MFK Softworks Professional Blog</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script>
function inputFocus(i){
    if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
}
    
function inputBlur(i){
    if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
}
</script>
</head>
<body>
<?php 
    $db = mysqli_connect("localhost","mcgrail_group5","f1v3@l1v3","mcgrail_group5");
    
    if ($db) {
        $sql = "SELECT * FROM Posts ORDER BY Number DESC";
        $query = mysqli_query($db,$sql);
        
        if ($query) {
            $num_rows = mysqli_num_rows($query);
            
            if($num_rows > 0) {
                echo "  <div class=\"container\">";
                echo "      <div class=\"row\">";
                echo "          <div class=\"col-md-8\" style=\"float:none; margin: 0 auto\">";
                echo "              <h1 class=\"page-header\">";
                echo "                  MFK Softworks Professional Blog";
                echo "              </h1>";
                for($i = 0; $i < $num_rows; $i++) {
                    $post = mysqli_fetch_assoc($query);
                    
                    $Number = $post['Number'];
                    $Title = $post['Title'];
                    $Content = $post['Content'];
                    
                    echo "<h2>$Title</h2>";
                    echo "<p>$Content</p>";
                    echo "<a class=\"btn btn-primary\" href=\"EditPost1.php?Number=$Number&Title=$Title&Content=$Content\">Edit &nbsp; <span class=\"glyphicon glyphicon-edit\"></span></a>";
                    echo "<a class=\"btn btn-primary\" style=\"margin-left: 5px; margin-right: 5px;\" href=\"DeletePost.php?ID=$Number\">Delete &nbsp; <span class=\"glyphicon glyphicon-trash\"></span></a>";
                    echo "<a class=\"btn btn-primary\" href=\"Comments.php?ID=$Number&Title=$Title&Content=$Content\">Comments &nbsp; <span class=\"glyphicon glyphicon-comment\"></span></a>";
                    echo "<hr>";
                    // echo "<tr><td>$Title</td>";
                    // echo "<td>$Content</td>";
                    // echo "<td><a href=\"Comments.php?ID=$Number&Title=$Title&Content=$Content\">Comments</a></td>";
                    // echo "<td><a href=\"DeletePost.php?ID=$Number\">Delete</a></td>";
                    // echo "<td><a href=\"EditPost1.php?Number=$Number&Title=$Title&Content=$Content\"> Edit </a></tr>\n";
                }  

                echo "<h3>New Post</h3>\n";
                echo "<form id=\"add_post\" action=\"AddPost.php\" method=\"get\">\n";
                echo "  <div class=\"form-group\">";
                echo "    <input type=\"text\" name=\"Title\" class=\"form-control\" id=\"usr\" style=\"color:#888;\" 
                           value=\"Title\" onfocus=\"inputFocus(this)\" onblur=\"inputBlur(this)\" />";
                echo "  </div>";
                echo "  <div class=\"form-group\">";
                echo "    <textarea name = \"Content\" style = \"resize:none; color:#888\" class=\"form-control\" 
                           rows=\"5\" id=\"comment\" onfocus=\"inputFocus(this)\" onblur=\"inputBlur(this)\">Say something!</textarea>";
                echo "  </div>";
                echo "  <a class=\"btn btn-primary\" type=\"submit\" name=\"submit\" href=\"javascript:{}\" onclick=\"document.getElementById('add_post').submit();\">Submit &nbsp; <span class=\"glyphicon glyphicon-ok\"></span></a>";
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
            } else {
                echo "The Posts table is empty.<br/>\n";
            }
        } else {
            echo "Sorry, the query is not well formed.";
        }
        
        mysqli_close($db);
    } else {
        echo "Not Connected to Database.";
    }
?>
</body>
</html>
