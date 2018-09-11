
<?php

    include('db.php');

    $sqlUpit = "SELECT * FROM posts ORDER BY posts.Created_at ASC";
    $stmt = $connection->prepare($sqlUpit);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $stmt->fetchAll();


    foreach ($posts as $post) {

  ?>
    <div class="blog-post">

      <h2 class="blog-post-title"><a href="single-post.php?post_id=<?php echo $post['id']?>"><?php echo($post['Title']); ?></a></h2>
        <p class="blog-post-meta"><?php echo($post['Created_at']); ?> by <a href="#"><?php echo($post['Author']); ?></a></p>
        <hr>
        <p><?php echo($post['Body']); ?></p>

    </div><!-- /.blog-post -->
<?php } ?>
