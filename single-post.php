<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  include('db.php');
  include('header.php');
  $postId = $_GET['post_id'];
?>
<body>
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



          <h2 class="blog-post-title"><?php echo($singlePost['title']); ?></h2>
            <p class="blog-post-meta"><?php echo($singlePost['created_at']); ?> by <a href="#"><?php echo($singlePost['author']); ?></a></p>
            <hr>
            <p><?php echo($singlePost['body']); ?></p>
            <button type="submit" class="btn btn-default" name="button">Delete this post</button>
            <?php
                $errorMessage =$_GET;
                if (!empty($errorMessage)){
                    echo "<div class='alert-danger'>
                        <strong>Upozorenje!</strong> Nisu popunjena sva polja!
                        </div>";
                }
            ?>
            <div class="post-comment">
              <form class="alert" role="alert" action="create-comment.php" method="post" name="createComment" onsubmit="return validateForm()">
                <label>First and last name:</label><br>
                <input type="text" name="name" placeholder="Your name"><br>
                <label>Comment: </label><br>
                <textarea name="comment" rows="3" cols="50" placeholder="Your thoughts go here..."></textarea><br>
                <button type="submit" class="btn btn-default" name="submit">Post comment</button>
                <input type="hidden" name="postId" value=<?php echo $postId ?>>
              </form>
            </div><!-- /.post-comment-->
            <button id="comments-btn" class="btn btn-default" onclick="showHide()">Hide Comments</button>
            <div id="comments-div">

              <?php include('comments.php')?>

          </div><!-- /.comments -->

        </div> <!-- /.blog-post -->
      </div> <!-- /.blog-main -->
      <?php include_once "sidebar.php" ?>
    </div> <!-- /.row-->



  </main> <!-- /.container-->

    <?php include('footer.php'); ?>
   <script src="java.js"></script>
  </body>
</html>
