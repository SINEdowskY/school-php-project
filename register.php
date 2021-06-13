<div class="login_container">
    <div class="reg_box">
        <div class="form">
            <form action="" method="post">
                <h2>Login</h2>
                <input type="text" name="login"><br>
                <h2>Password</h2>
                <input type="password" name="password"><br>
                <h2>Nick</h2>
                <input type="text" name="nick" style="margin-bottom: 10px;"><br>
                <input type="submit" value="Zarejestruj" name="b_register">
            </form>
        </div>
    </div>
</div>

<?php

    if(isset($_POST['b_register'])){
        $nick = $_POST['nick'];
        $login = $_POST['login'];
        $password_encrypted = md5($_POST['password']);

        require('connect.php');

        $user_check_query = "select * from bloggers where nick = '{$nick}' or login = '{$login}'";
        
        $user = mysqli_query($connection, $user_check_query);

        $user_check = mysqli_fetch_assoc($user);

        if(@$user_check['id_user']){
            echo("Błąd ! użytkownik o takim loginie bądź nicku istnieje istnieje");
        }
        else{
            $register_query = "insert into bloggers values(null,'{$login}','{$password_encrypted}','{$nick}',0)";

            $result = mysqli_query($connection, $register_query);

            if($result){
                header("Location: index.php");
            }
            else{
                echo("blad");
            }
        }
    }




?>