<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Selezionabili</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 300px;
            background-color: #fff;
            border-right: 1px solid #ddd;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }
        .chat-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .chat-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .chat-item:hover {
            background-color: #f0f0f0;
        }
        .chat-item img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .chat-item .chat-info {
            flex: 1;
        }
        .chat-item .chat-info h4 {
            margin: 0;
            font-size: 16px;
            color: #333;
        }
        .chat-item .chat-info p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #777;
        }
        .chat-display {
            flex: 1;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f9f9f9;
        }
        .chat-display h2 {
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <ul class="chat-list">
            <?php
            require_once '../chat_Room/db.php'; // Assicurati che il percorso sia corretto

            $query = "SELECT nome_stanza FROM stanze";
            $result = $connection->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $chatName = $row['nome_stanza'];
                    echo '
                    <li class="chat-item" onclick="openChat(\'' . $chatName . '\')">
                        <img src="https://via.placeholder.com/40" alt="Utente">
                        <div class="chat-info">
                            <h4>' . $chatName . '</h4>
                            <p>Ultimo messaggio...</p>
                        </div>
                    </li>';
                }
            } else 
            {
                echo '<li class="chat-item">Nessuna chat disponibile</li>';
            }
            ?>
        </ul>
    </div>
    <div class="chat-display" id="chatDisplay">
        <?php
            $query ="SELECT 



            " 

        ?>
        <h2>Seleziona una chat per iniziare</h2>
    </div>

    <script>
        // Funzione per cambiare il contenuto della chat selezionata
        function openChat(chatName) {
            const chatDisplay = document.getElementById('chatDisplay');
            chatDisplay.innerHTML = <h2>Stai visualizzando ${chatName}</h2>;
        }
    </script>
</body>
</html>