<?php
ob_start();

require_once '../chat_Room/db.php';

$nome = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $password = trim($_POST["password"]);

    $query = "SELECT * FROM utenti WHERE nome='$nome' AND Pw='$password'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        header("Location: chat.html");
        exit;
    } else {
        header("Location: /home/user/docker-xampp/src/chat_Room/log_in.html");
        exit;
    }
}

ob_end_flush();
?>