<?php


function es_estudiante_legend($platzi_rank) {
    
    if ($platzi_rank >= 20000) {
        echo "Eres un estudiante legend! \n";
    }else {
        echo "Lo sentimos, aun no alcanzas el nivel legend! \n";

    }
}

do {
    $estudiante_rank = (int) readline("Cuantos puntos tienes en platzi?: ");

    es_estudiante_legend($estudiante_rank);
    echo "\n";
    
} while(true);


?>