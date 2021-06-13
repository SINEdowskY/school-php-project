<?php

if(isset($_POST['edit'])){
    $text_post = $_POST['text_post'];
    $id_post = $_POST['id_post'];
    $title_post = $_POST['title_post'];


?>
<script src="https://cdn.tiny.cloud/1/iodc3oz4hrdxuj7mdxim5m87kef2d2lnoijexlm62yu4d2bh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<div class="login_container">
    <div class="article_box">
        <div class="form">
            <form method="post">
                <h2>Title</h2>
                <input type="text" name="title" value="<?=$title_post?>"><br>
                <h2>Text</h2>
                <textarea name="article"><?=$text_post?></textarea>
                <input type="hidden" name="id_post" value="<?=$id_post?>">
                <input type="submit" value="Save" name="b_save">
            </form>
        </div>
    </div>
</div>

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>


<?php
}
    echo('xd');
    if( isset($_POST['title'])){
        $title_post = $_POST['title'];
        $text_post = $_POST['article'];
        $id_post = $_POST['id_post'];
        echo("xd");

        require('connect.php');

        $query = "update posts set title='$title_post',content='$text_post' where id_post=$id_post";
        echo($query);
        $result = mysqli_query($connection,$query);
        $data = mysqli_fetch_all($result);

        if($data){
            header("Location: index.php?webpage=menagement");
        }
    }
?>