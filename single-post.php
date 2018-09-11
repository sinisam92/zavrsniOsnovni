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
          
        
        $sqlUpit = "SELECT * FROM posts WHERE posts.id = {$_GET['post_id']}";
          $stmt = $connection->prepare($sqlUpit);
          $stmt->execute();
          $stmt->setFetchMode(PDO::FETCH_ASSOC);
          $singlePost = $stmt->fetch();
       
          ?>



          <h2 class="blog-post-title"><?php echo($singlePost['Title']); ?></h2>
            <p class="blog-post-meta"><?php echo($singlePost['Created_at']); ?> by <a href="#"><?php echo($singlePost['Author']); ?></a></p>
            <hr>
            <p><?php echo($singlePost['Body']); ?></p>

            <div class="comments">
            <button id="show-hideBtn" class="btn btn-default">Hide Comments</button>
              <?php include('comments.php')?>
          </div><!-- /.comments -->

        </div> <!-- /.blog-post -->
      </div> <!-- /.blog-main -->
    </div> <!-- /.row-->
    
    
    
  </main> <!-- /.container-->
  <?php include('sidebar.php'); ?>
    <?php include('footer.php'); ?>
   <script src="java.js"> </script>
  </body>
</html>