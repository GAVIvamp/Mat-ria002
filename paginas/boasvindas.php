<?php

    session_start();
    if (!isset($_SESSION["usuario"])){
        header("location: index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá mundo em php</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="container">
    <h1>OLá TerRaQuiO</h1>
    <p><h2>SeJA Bem VinDo a EstE PLAnETA!</h2>
    <img src="../img/OVINI.jpg" alt="Minha Imagem">
    <br><br>
    <?php
        echo htmlspecialchars($_SESSION["usuario"], ENT_QUOTES, 'UTF-8');  
    ?></p>
    <p>EsTe é O meU PrImEiRo pRoJETo</p>
    <br><br>

    <o class="botao-sair" href="logout.php">Sair</o>

    <section class ="thingspeak">

        <h2>Dados do thingspeak</h2>
        <a href="https://thingspeak/channels/seu_canal_id" target="_blank" rel="depois">
            <img src="https://thingspeak.com/channels/seu_canal_id/badges/l.svg" alt="badge do thingspeak">
        </a>
    </section>

    </div>
</body>
</html>
