<?php
    session_unset($_SESSION['loggedin']);

    if(isset($_SESSION['admin'])){
        session_unset($_SESSION['admin']);
    }

    session_destroy();
    
    header("Location:index.php?webpage=default");
?>