<?php
  include('db.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Vivify blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="styles/blog.css" rel="stylesheet">
  </head>
  <body>
    <?php include('header.php');?>


<main role="main" class="container">

  <div class="row">

      <div class="col-sm-8 blog-main">

        <div class="blog-post">
          <?php
          $sqlUpit = "SELECT * FROM posts";
          $stmt = $connection->prepare($sqlUpit);
          $stmt->execute();
          $stmt->setFetchMode(PDO::FETCH_ASSOC);
          $singlePost = $stmt->fetch();
          // echo '<pre>';
          // var_dump($singlePost);
          // echo '</pre>';
          ?>



          <h2 class="blog-post-title"><?php echo($singlePost['title']); ?></h2>
            <p class="blog-post-meta"><?php echo($singlePost['Created_at']); ?> by <a href="#"><?php echo($singlePost['author']); ?></a></p>
            <hr>
            <p><?php echo($singlePost['body']); ?></p>

            <div class="comments">
              <?php

                $sqlUpitComments = "SELECT * FROM comments";
                $stmt2 = $connection->prepare($sqlUpitComments);
                $stmt2->execute();
                $stmt2->setFetchMode(PDO::FETCH_ASSOC);
                $comments = $stmt2->fetchAll();

                // echo '<pre>';
                // var_dump($comments);
                // echo '</pre>';

                  foreach ($comments as $comment) {

             ?>

             <div class="single-comment">
               <ul>
                  <li>
                <hr>
                <div>posted by: <strong><?php echo($comment['author']); ?>
                </strong> on <?php echo($comment['Created_at']); ?></div>

                <div><?php echo($comment['body']); ?></div>

             </div>


            <?php } ?>
              </li>
            </ul>
          </div><!-- /.comments -->

        </div> <!-- /.blog-post -->
      </div> <!-- /.blog-main -->
    </div> <!-- /.row-->
  </div> <!-- /.container-->
    <?php include('sidebar.php'); ?>
    <?php include('footer.php'); ?>
  </body>
</html>
