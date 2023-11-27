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
            Il tuo Testo è importante per noi!
        </h1>
        <h6>
            (evita l'uso di parole improprie come: gattino o Lorem)
        </h6>
        <form action="censura.php" method="GET" class="d-flex flex-column align-items-center w-25 m-auto pt-3 ">
            <textarea cols="50" rows="10" placeholder=" Inserisci qui il tuo testo..." type="text" name="testo"></textarea>
            <button type="submit" class="mt-3">Invia</button>
        </form>
    </header>
</body>
</html>