<?php

function clear(){

    if (PHP_OS == "WINNT") {
        system("clear");
    }else{
        system('clear');
    }
}

define("MAX_ATTEMPS", 6);
$possible_words = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto", "Baldosa", "Terremoto", "Asteroide", "Gallo"];

echo "Juego del ahorcado! \n\n";

// configuracion de la palabra
$choosen_word = $possible_words[ rand(0,8)];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $word_length, "_");
$attemps = 0;



do{
    // Inicia el juego
    echo "Palabra de $word_length letras \n\n";
    echo "Letras encontradas: $discovered_letters \n\n";

    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);


    if (str_contains($choosen_word, $player_letter)) {

        // Verificamos todas las ocurrencias de esta letra para reemplazarla
        $offset = 0;

        while (($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false) {

            $discovered_letters[$letter_position] = $player_letter;
            $offset = $letter_position + 1;
        }
    } else {
        clear();
        $attemps++;
        echo "La letra $player_letter no forma parte de la palabra. Te quedan " . MAX_ATTEMPS - $attemps . " intentos. \n";

        sleep(2);
    }
}while($attemps <= MAX_ATTEMPS && $discovered_letters !== $choosen_word);

clear();

if ($attemps < MAX_ATTEMPS) {
    echo "Felicidades! Has adivinado la palabra! \n\n";
}else {
    echo "Suerte para la proxima, amigo. \n\n";
}

echo "La palabra era: $choosen_word \n\n";
echo "Tu descubriste: $discovered_letters \n\n";

echo "\n\n";