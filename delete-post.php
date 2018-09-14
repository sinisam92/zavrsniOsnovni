<?php
include('db.php');


  $postId = $_POST['postId'];


  $sql5 = "DELETE FROM comments  WHERE post_id = {$postId}";
    $stmt5 = $connection->prepare($sql5);
    $stmt5->execute();

    $sql6 ="DELETE FROM posts WHERE id = {$postId}";
    $stmt6 = $connection->prepare($sql5);
    $stmt6->execute();



    header("Location:index.php");


?>
