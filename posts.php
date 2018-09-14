<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include('db.php');

    $sqlUpit = "SELECT * FROM posts ORDER BY posts.Created_at DESC";
    $stmt = $connection->prepare($sqlUpit);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $stmt->fetchAll();


    foreach ($posts as $post) {

  ?>
<div class="blog-post">
	<h2 class="blog-post-title">
		<a href="single-post.php?post_id=<?php echo $post['id']?>"><?php echo($post['title']); ?></a>
	</h2>
	<p class="blog-post-meta">
		<?php echo($post['created_at']); ?> by
		<a href="#"><?php echo($post['author']); ?></a>
	</p>
	<hr>
		<p>
			<?php echo($post['body']); ?>
		</p>
	</div>
	<!-- /.blog-post -->
	<?php } ?>
