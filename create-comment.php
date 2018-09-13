<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  include("db.php");
  $error= "";
  $name= "";
  $comment = "";
  $postId = $_POST['postId'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (empty($_POST["name"]) || empty($_POST["comment"])) {
             header("Location: single-post.php?post_id=$postId".'&comment_error=1');
             die;
         }
         else {
             $name = $_POST["name"];
             $comment = $_POST["comment"];
         }
     }



  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $sql = "INSERT INTO `comments` (author, text, post_id)VALUES ('$name', '$comment', '$postId')";
  $stat4 = $connection->prepare($sql);
  $stat4->execute();

  header("Location:single-post.php?post_id=$postId");




 ?>
