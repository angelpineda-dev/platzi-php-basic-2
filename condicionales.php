<?php 
    $se_hablo_de_bruno = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h2> Esto no se debe de hacer </h2>

    <?php if ($se_hablo_de_bruno) {
        echo "<b>OMG!! no puede ser!</b></br>";
    }else {
        echo "<b>Que bueno, que siga asi la cosa</b></br>";
    }?>

    <h2> Esto es aceptado pero si puedes evitala. </h2>
    <?php if ($se_hablo_de_bruno) { ?>
        <b>Quien hablo de bruno?!</b></br>
    <?php } else { ?>
        <b>Las 5 en punto y todo sereno.</b></br>
    <?php } ?>
    
    <h2> Esto si deberias hacerlo </h2>
    <?php if($se_hablo_de_bruno): ?>
        <b>Y siguen dandole con Bruno!</b></br>
    <?php else: ?>
        <b>Muy buenos muchachos.</b></br>
    <?php endif; ?>


</body>
</html>