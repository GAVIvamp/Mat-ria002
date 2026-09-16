<?php

    $host ="localhot";
    $user ="root";
    $password ="";
    $db ="sistema_login";

    $conn = mysqli_connect($host, $user, $password, $db);

    if ($conn->connect_error) {
        die("Erro de Conexão". $conn->connect_error);
    }

?>