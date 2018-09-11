<?php

        $sqlUpitComments = "SELECT * FROM comments";    
        $stmt2 = $connection->prepare($sqlUpitComments);
        $stmt2->execute();
        $stmt2->setFetchMode(PDO::FETCH_ASSOC);
        $comments = $stmt2->fetchAll();

            foreach ($comments as $comment) {

        ?>

        <div class="single-comment">
            <ul>
                <li>
        <hr>
                    <div>posted by: <strong><?php echo($comment['author']); ?>
                    </strong> on 10. 10. 2018</div>

            <div><?php echo($comment['text']); ?></div>

        </div>


        <?php } ?>
                </li>
            </ul>