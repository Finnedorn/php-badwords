<?php
    $text = $_GET['testo'];
    $censorship = $_GET['censura'];
    $textCensured = str_replace(
        $censorship,
        '***',
        $text,
    );

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="m-auto mt-5 text-center container">
        <h1>
            Ecco il tuo testo!
        </h1>
        <h6>
            <?php
            if(str_contains($text, 'gattino')) {
                echo "(ノಠ益ಠ)ノ彡┻━┻ ti avevo detto di non scrivere gattino !!!";
            } else if(str_contains($text, $censorship)) {
                echo "il tuo testo è stato censurato! (Θ︹Θ)ს";
            }
            ?>
        </h6>
        <p>
            <?php echo $textCensured. strlen($textCensured) ?>
        </p>
        <h6>
            lunghezza del paragrafo: <?php echo strlen($textCensured) ?> caratteri!
        </h6>
        <a href="./index.php">Prova di nuovo</a>
    </header>
</body>
</html>