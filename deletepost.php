<?php
if(isset($_POST['delete'])){

$id_post = $_POST['id_post'];

?>

<div class="login_container">
    <div class="login_box">
        <div class="form">
        <form method="post">
        <h2>Chcesz usunąć post: <?=$_POST['title_post']?>?<br></h2>
            <input type="submit" name="no" value="Nie">
            <input type="submit" name="yes" value="Tak">
        </form>
        </div>
    </div>
</div>

<?php
}
if(isset($_POST['no'])){
    header("Location: index.php?webpage=postmanagement");
}
if(isset($_POST['yes'])){
    require('connect.php');

    $query = "delete from posts where id_post=$id_post";

    $result = mysqli_query($connection,$query);

    $data = mysqli_fetch_all($result);

    if($data){
        header("Location: index.php?webpage=postsmanagement");
    }
}


?>