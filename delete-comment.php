<?php
    include_once "db.php";

  $commentId = $_POST['commentId'];
  $postId = $_POST['postId'];


$sql = "DELETE FROM comments WHERE id={$commentId}";
    $statement = $connection->prepare($sql);
    $statement->execute();

header("Location:single-post.php?post_id=$postId");

?>
