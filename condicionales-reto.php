<?php

$donaciones = readline("Que cantidad de donaciones tienes?: ");

if ($donaciones >= 100) {
    echo "Puedes retirar tus donaciones";
}else{
    echo "Necesitas esperar mas donaciones :c";
}

echo "\n";

?>