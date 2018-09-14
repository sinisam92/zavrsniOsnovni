<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  include("db.php");

  $name= "";
  $comment = "";
  $postId = $_POST['postId'];

  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $sql = "INSERT INTO `comments` (author, text, post_id)VALUES ('$name', '$comment', '$postId')";
  $stat4 = $connection->prepare($sql);
  $stat4->execute();



  header("Location:single-post.php?post_id=$postId");
 ?>
