<div class="blog_container">
    <?php
        $id = $_SESSION['id'];
        require('connect.php');
        if(isset($_SESSION['admin'])){
            $query = "select * from posts";
        }
        else{
            $query = "select * from posts where id_blogger=$id";
        }
        $result = mysqli_query($connection,$query);
        $data = mysqli_fetch_all($result);
    ?>
    <?php foreach($data as $post){?>
        <div class="post_box">
            <div class="post_title">
                <form method="post" action="index.php?webpage=editpost">
                    <input type="submit" name="edit" value="Edit">
                    <input type="hidden" name="id_post" value="<?=$post[0]?>">
                    <input type="hidden" name="title_post" value="<?=$post[1]?>">
                    <input type="hidden" name="text_post" value="<?=$post[2]?>">
                </form>
                <h1><?=$post[1]?></h1>
                <form method="post" action="index.php?webpage=deletepost">
                    <input type="submit" name="delete" value="Delete">
                    <input type="hidden" name="id_post" value="<?=$post[0]?>">
                    <input type="hidden" name="title_post" value="<?=$post[1]?>">
                </form>
            </div>
            <div class="post_text">
                <?=$post[2]?>
            </div>
            <p class="post_author">Author: <?=$post[4]?></p>
            <p class="post_date">Date: <?=$post[5]?></p>
        </div>
    <?php } ?>

</div>