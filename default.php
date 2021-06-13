<div class="login_container">
    <h1 class="defaultSite">
        Witaj 
        <?php
            if(isset($_SESSION['nick'])){
                echo($_SESSION['nick']);
            }
            else{
                echo("Nieznajomy");
            }
        ?>
        !
    </h1>
    <h2 class="defaultSite">
        <?php
        if(isset($_SESSION['admin']) and isset($_SESSION['nick']) and isset($_SESSION['loggedin'])){
           echo("Adminie ! Zacznij kontrolować bloga wchodząc na Admin Panel !"); 
        }
        if(!isset($_SESSION['admin']) and isset($_SESSION['nick']) and isset($_SESSION['loggedin'])){
            echo("Użytkowniku ! Zacznij pisać posty na blogi wchodząc na Post Management!"); 
        }
        if(!isset($_SESSION['admin']) and !isset($_SESSION['nick']) and !isset($_SESSION['loggedin'])){
            echo("Zaloguj się (bądź jak nie masz konta zarejestruj) żeby móc wpisać posty na 81099 !!"); 
         }
        
        ?>
    </h2>
</div>