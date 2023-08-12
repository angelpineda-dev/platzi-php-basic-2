<?php

$usernames = ['Pepito123', 'Mr.Michi', 'RetaxMain'];

do {
    $new_username = readline("Por favor, ingresa tu nuevo nombre de usuairo: ");
    echo "\n";

} while ( in_array($new_username, $usernames));

?>