<?php

/* if (isset($_POST["name"])) {
    echo "Hola! ". $_POST['name'] . "!";
}else{
    echo "No enviaste nada";
}; */

if (empty($_POST["name"])) {
    echo "No enviaste nada";
} else {
    echo "Hola! " . $_POST['name'] . "!";
}
;