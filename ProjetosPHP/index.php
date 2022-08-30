<?php

    $vetor = [];
    $valor = $_GET["v"];
    $procurar = $_GET["procurar"];
    $achado = false;
    $posi=0;
    
            //Inicialização                           //Condição         //Incremento
    for ( $i = ( ($valor <= 1) ? $valor : 1 ),$pos = 0; ($valor <= 1) ? $i <= 1 : $i <= $valor; $i++, $pos++){

        $vetor[] = (int)$i;

        if ($procurar == $i) {

            
            $achado = true;
            $posi = $pos;
        }

    }

    var_dump($vetor);
    echo "<br>";
    
    echo (($achado) ? "$procurar o valor encontra-se na posição $posi" : "Valor não encontrado");