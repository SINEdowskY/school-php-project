<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+128+Text&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a class="header_link" href="index.php?webpage=blog">Blog</a>
        <?php
            if(isset($_SESSION['loggedin'])){
                echo('<a class="header_link" href="index.php?webpage=account">Account</a>');
            }
            else{
                echo('<a class="header_link" href="index.php?webpage=register">Register</a>');
            }
        ?>
        <a class="title" href="index.php?webpage=default">
            <h1 class="title">81099</h1>
        </a>
        <?php
            if(isset($_SESSION['loggedin'])){
                echo('<a class="header_link" href="index.php?webpage=logout">Logout</a>');
                if(isset($_SESSION['admin'])){
                    echo('<a class="header_link" href="index.php?webpage=admin_panel">Admin Panel</a>');
                }
                else{
                    echo('<a class="header_link" href="index.php?webpage=postsmanagement">Post<br>Management</a>');
                }
            }
            else{
                echo('<a class="header_link" href="index.php?webpage=login">Login</a>');
                echo('<a class="header_link" href="index.php?webpage=credits">Credits</a>');
            }
        ?>
    </header>
        <?php
            if( isset($_GET['webpage']) ){

                $wp = $_GET['webpage'];

                switch($wp){
                    case "blog":
                        include("blog.php");
                        break;
                    case "register":
                        include("register.php");
                        break;
                    case "login":
                        include("login.php");
                        break;
                    case "credits":
                        include("credits.php");
                        break;
                    case "logout":
                        include("logout.php");
                        break;
                    case "postsmanagement":
                        include("postsmanagement.php");
                        break;
                    case "addpost":
                        include("addpost.php");
                        break;
                    case "editpostpanel":
                        include("editpostpanel.php");
                        break;
                    case "editpost":
                        include("editpost.php");
                        break;
                    case "deletepost":
                        include("deletepost.php");
                        break;
                    case "admin_panel":
                        include("adminpanel.php");
                        break;
                    case "account":
                        include("account.php");
                        break;
                    case "default":
                        include("default.php");
                }

            }
        ?>
</body>
</html>