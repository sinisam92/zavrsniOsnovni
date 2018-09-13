<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sql3 = "SELECT title, id FROM posts ORDER BY created_at DESC";
$state3 = $connection->prepare($sql3);
$state3->execute();
$state3->setFetchMode(PDO::FETCH_ASSOC);
$postsTitles = $state3->fetchAll();

 ?>
<aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Latest posts</h4>
                <?php

                    foreach ($postsTitles as $title) {
                ?>
                    <div>
                        <a href = "single-post.php?post_id=<?php echo($title['id']) ?>"><?php echo ($title['title'])?> </a>
                    </div>

                <?php } ?>
            </div>
</aside><!-- /.blog-sidebar -->
