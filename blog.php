<div class="blog_container">
    <?php
        require('connect.php');
        $query = "select * from posts";
        $result = mysqli_query($connection,$query);
        $data = mysqli_fetch_all($result);
    ?>
    <?php foreach($data as $post){?>
        <div class="post_box">
            <div class="post_title">
                <h1><?=$post[1]?></h1>
            </div>
            <div class="post_text">
                <?=$post[2]?>
            </div>
            <p class="post_author">Author: <?=$post[4]?></p>
            <p class="post_date">Date: <?=$post[5]?></p>
        </div>
    <?php } ?>

</div>