<?php

//var_dump($_POST);

$paragraph = $_POST['paragraph'];
$word = $_POST['word'];
$paragraph_length = strlen($paragraph);

$new_paragraph = str_replace($word, '***', $paragraph);
$new_paragraph_length = strlen($new_paragraph);
$substitutions_number = substr_count($new_paragraph, '***');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords Result</title>
</head>
<body>
    <main>
        <h5>Paragrafo originale:</h5>
        <?php echo $paragraph ?>
        <h5>Lunghezza iniziale paragrafo:</h5>
        <?php echo $paragraph_length ?>

        <h5>Paragrafo censurato:</h5>
        <?php echo $new_paragraph ?>
        <h5>Nuova lunghezza paragrafo:</h5>
        <?php echo $new_paragraph_length ?>

        <h5>Numero totale sostituzioni:</h5>
        <?php echo $substitutions_number ?>
    </main>
</body>
</html>