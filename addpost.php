<script src="https://cdn.tiny.cloud/1/iodc3oz4hrdxuj7mdxim5m87kef2d2lnoijexlm62yu4d2bh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<div class="login_container">
    <div class="article_box">
        <div class="form">
            <form action="" method="post">
                <h2>Title</h2>
                <input type="text" name="title"><br>
                <h2>Text</h2>
                <textarea name="article"></textarea>
                <input type="submit" value="Send" name="b_send">
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

    if( isset($_POST['b_send'])){
        $title = $_POST['title'];
        $article = $_POST['article'];
        $id = $_SESSION['id'];
        $nick = $_SESSION['nick'];

        require('connect.php');

        $query = "insert into posts values(null,'$title','$article',$id,'$nick',now())";

        $result = mysqli_query($connection,$query);

        if(@$result){
            header("Location: index.php?webpage=blog");
        }
    }



?>