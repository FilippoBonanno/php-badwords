<?php

$paragrafo = $_GET ["paragrafo"];

$str = $paragrafo;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h1>La lunghezza del testo è di: <?php echo strlen($str) ?> Caratteri</h1>
    

</body>

</html>