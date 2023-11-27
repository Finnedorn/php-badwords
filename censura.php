<?php
    $text = $_GET['testo'];
    $censorship = [
        'lorem',
        'gattino'
    ];
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
    <title>experiment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="m-auto mt-5 text-center container">
        <h1>
            Ecco il tuo testo!
        </h1>
        <p>
            <?php echo $textCensured ?>
        </p>
        <a href="./index.php">Prova di nuovo</a>
    </header>
</body>
</html>