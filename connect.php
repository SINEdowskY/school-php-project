<?php

            $host = "localhost";
            $user = "root";
            $pass = "";
            $database = "blog";

            $connection = mysqli_connect($host, $user, $pass, $database);

            if(!$connection){
                echo("Błąd połączenia");
                exit();
            }

?>