<?php

session_start();

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

$users = require("conf/users.php"); // capire cosa fa... guarda il contenuto di $users


/*
    TODO: controllare se l'utente esiste

    Se si -> vai in home.php
    Se no -> vai a index.html
*/
