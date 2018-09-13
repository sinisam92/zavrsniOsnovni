<?php
    include_once "db.php";

  $commentId = $_POST['comments_id']
  $postId = $_POST['post_id'];

    $sql = "DELETE FROM comments WHERE posts_id = '$commentId' ";
    $statement = $connection->prepare($sql);
    $statement->execute();

header("Location:single-post.php?id=$postId");



?>
