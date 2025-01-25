<?php

    $host = 'db'; // Usa l'host corretto
    $dbname = 'Chat_room';
    $user = 'user'; // Cambia con il tuo utente
    $password = 'user'; // Cambia con la tua password
    $port = 3306; // Porta predefinita di MySQL

    // Connessione al database
    $connection = new mysqli($host, $user, $password, $dbname, $port);

    if ($connection->connect_error) {
        die("Connessione fallita!: " . $connection->connect_error);
    }

    $table = "utenti";
    $query = "SELECT * FROM $table";
    $result = $connection->query($query);

    if ($result && $result->num_rows > 0) {
        echo "<table>";

        // Mostra i nomi delle colonne
        while ($column = $result->fetch_field()) {
            echo "<th>" . $column->name . "</th>";
        }

        // Mostra i dati
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nessun risultato trovato.";
    }

?>
