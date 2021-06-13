<div class="login_container">
    <div class="login_box">
        <div class="form">
            <form action="" method="post">
                <h2>Login</h2>
                <input type="text" name="login"><br>
                <h2>Password</h2>
                <input type="password" name="password" style="margin-bottom: 10px;"><br>
                <input type="submit" value="Zaloguj" name="b_logon">
            </form>
        </div>
    </div>
</div>


<?php
    if( isset($_POST['b_logon']) ){
        
        $login = $_POST['login'];
        $password_encrypted = md5($_POST['password']);

        require("connect.php");

        $admin_check_query = "select * from bloggers where login = '$login' and password = '$password_encrypted' and is_admin = 1 ;";
        $admin = mysqli_query($connection, $admin_check_query);
        $admin_check = mysqli_fetch_assoc($admin);

        if(@$admin_check['is_admin']){
            $_SESSION['admin'] = 1;
        }

        $query = "Select * from bloggers where login = '$login' and password = '$password_encrypted';";
        $result = mysqli_query($connection, $query);
        $check = mysqli_fetch_assoc($result);

        if(@$check['login']){
            $_SESSION['loggedin'] = 1;
            $_SESSION['id'] = $check['id_user'];
            $_SESSION['nick'] = $check['nick'];
            header("Location: index.php?webpage=default");
        }
        else{
            echo("blad logowania");
        }
    }


?>