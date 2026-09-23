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
    <link rel="stylesheet" href="../style/style2.css">
</head>
<body>
    <div class="container">
    <h1>OLá TerRaQuiO</h1>
    <p><h2>SeJA Bem VinDo a MeU PLAnETA!</h2>
    <img src="../img/OVINI.jpg" alt="Minha Imagem">
    <br><br>
    <?php
        echo htmlspecialchars($_SESSION["usuario"], ENT_QUOTES, 'UTF-8');  
    ?></p>
    <p>EsTe é O meU PrImEiRo pRoJETo</p>
    <br><br>

    <button class="botao-sair" href="logout.php">Sair</button><br><br>

    <section class ="thingspeak">
        
        <h2 color="#000000">Dados do Thingspeak</h2>
        <a href="https://thingspeak/channels/seu_canal_id" target="_blank" rel="depois">
            <img src="https://thingspeak.com/channels/seu_canal_id/badges/l.svg" alt="badge do thingspeak">
        </a><br><br>
        <iframe
        width="450"
        heigth="200"
        style="border: 1px solid #cccccc;"
        src="https://thingspeak.com/channels/2521230/charts/1?bgcolor=%23000000&color=%23FFDE00&dynamic=true&results=60&round=2&title=Temperatura&type=spline">
    </iframe>
    </section>

    </div>
    <br><br>

</body>
</html>
