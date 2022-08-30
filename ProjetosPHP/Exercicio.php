<?php

    $Valor = $_GET["valor"];
    $Limite = 100;

    for ($i = 1; $i <= $Limite; $i++) {

        $Sentinela = $i * $Valor;

        echo $Valor,"*",$i,"=",$Sentinela,"<br>";

    }
    
    $Nome = "Frederico";
    $Sobre_Nome = "Dúlio";

    echo $Nome," ",$Sobre_Nome;