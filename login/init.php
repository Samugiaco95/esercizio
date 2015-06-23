<?php
/*
File di configurazione generale... a parte index.html e login.php lo includerai ovunque
andando ad aggiungere le parti comuni qui.
 */

session_start();

if( trim( $_SESSION["utente"]) == "" ){
    header("Location: index.html");
}
