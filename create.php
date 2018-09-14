<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("header.php");
include ("db.php");
$title = "";
$body ="";
$author = "";
if (isset($_POST['button'])) {


      $title = $_POST['title'];
      $body = $_POST['body'];
      $author = $_POST['author'];


      $sql = "INSERT INTO `posts` (title, body, author)VALUES('$title', '$body', '$author')";
      $stat4 = $connection->prepare($sql);
      $stat4->execute();
      header("Location:index.php");
}
      include_once("sidebar.php");


?>
<div class="container">
 <form class="create-post" name="postForm" action="create.php" method="post"  onsubmit="return validateForm()">
        <label>Your name</label><br>
        <input type="text" name="author" placeholder="Your name"><br>
        <label>Title</label><br>
        <input type="text" name="title" placeholder="Title"><br>
        <label>Your posted</label><br>
        <textarea name="body" rows="8" cols="80" placeholder="Your post goes here"></textarea><br>
        <button type="submit" name="button" class="btn btn-default">Submit</button>

  </form>
</div>
<script>
function validateForm() {
 var author = document.forms["postForm"]["author"].value;
 var title = document.forms["postForm"]["title"].value;
 var body = document.forms["postForm"]["body"].value;
 if (author == "" || title == "" || body =="") {
     alert("All fields must be filled");
     return false;
 }
}
</script>
<?php

    include("footer.php");
?>
