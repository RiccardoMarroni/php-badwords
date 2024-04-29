<?php
    $badWords = ['parolacce' , 'x'];
    $text = $_POST ['text'];
    $censoredText = str_replace($badWords, '***', $text);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backpage</title>
</head>
<body>
    <div>
        <strong>testo non censurato</strong>
        <p><? echo $text ?></p>
    </div>
    <div>
        <strong">testo censurato</strong>
        <p><? echo  $censoredText ?></p>
    </div>
</body>
</html>