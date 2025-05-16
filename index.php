<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site em PHP</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        header { background-color: #f0f0f0; padding: 10px; text-align: center; }
        nav a { margin: 0 10px; text-decoration: none; color: #333; }
        .container { margin-top: 20px; }
    </style>
</head>
<body>

    <header>
        <h1><?php echo "Bem-vindo ao Meu Site!"; ?></h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="sobre.php">Sobre</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>

    <div class="container">
        <h2>Página Inicial</h2>
        <p>
            <?php
                // Exemplo de variável e lógica PHP
                $mensagem = "Este é o conteúdo principal da minha página inicial em PHP.";
                $hora_atual = date("H:i:s"); // Pega a hora atual do servidor
                echo $mensagem;
                echo "<br>Agora são: " . $hora_atual;
            ?>
        </p>
        <p>Aqui você pode adicionar mais conteúdo HTML e PHP.</p>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Meu Site. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
