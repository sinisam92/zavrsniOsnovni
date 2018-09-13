<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include('db.php');
?>


<?php
    include('header.php');
?>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

               <?php
                    include('posts.php');
                ?>
            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->

        <?php
            include('sidebar.php');
        ?>
    </div><!-- /.row -->

</main><!-- /.container -->

<?php

 include('footer.php');

?>
</body>
</html>
