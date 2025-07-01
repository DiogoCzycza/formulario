<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados Recebidos</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #fdf6f6;
            color: #333;
            padding: 50px;
        }
        h1 {
            color: #b30000;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Informações Recebidas</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
        $time = htmlspecialchars($_POST["time"]);

        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Time do coração:</strong> $time</p>";
    } else {
        echo "<p>Nenhuma informação foi recebida.</p>";
    }
    ?>
</body>
</html>
