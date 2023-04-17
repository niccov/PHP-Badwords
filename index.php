<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM BADWORDS</h1>

    <form action="login.php" method="GET">
        <textarea name="randomText" cols="30" rows="10" placeholder="Inserisci del testo..."></textarea>
        <input type="text" placeholder="Inserisci una parola da censurare" name="censoredWord">
        <button type="submit">Verifica</button>
    </form>
</body>
</html>