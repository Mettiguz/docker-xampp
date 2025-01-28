<?php

    $host = 'db'; // Usa l'host corretto
    $dbname = 'Chat_room';
    $user = 'user'; // Cambia con il tuo utente
    $password = 'user'; // Cambia con la tua password
    $port = 3306; // Porta predefinita di MySQL

    $connection = new mysqli($host, $user, $password, $dbname, $port);

    if ($connection->connect_error){
    die("Connessione fallita!: " . $connection->connect_error);
    }
?> 