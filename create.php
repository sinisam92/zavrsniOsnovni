<?php
    include("header.php");
    include ("db.php");
?>
  <form class="create-post" action="index.php" method="post">
        <label>Your name</label><br>
        <input type="text" name="author" placeholder="Your name"><br>
        <label>Title</label><br>
        <input type="text" name="title" placeholder="Title"><br>
        <label>Your posted</label><br>
        <textarea name="body" rows="8" cols="80" placeholder="Your post goes here"></textarea><br>
        <button type="submit" name="button">Submit</button>
  </form>

<?php
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];

      $sql = "INSERT INTO `posts` (title, body, author)VALUES ('$title', '$body', '$author')";
      $stat4 = $connection->prepare($sql);
      $stat4->execute();

    include("sidebar.php");
    header("Location: single-post.php?post_id=$postId");
    include("footer.php");
?>
