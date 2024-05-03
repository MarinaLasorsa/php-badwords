<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <main>
        <form action="./server.php" method="POST">
            <p>
                <label for="paragraph">Paragrafo:</label><br>
                <textarea name="paragraph" id="paragraph" placeholder="Il tuo testo" rows="10" cols="30"></textarea>
            </p>
            <p>
                <label for="word">Parola da censurare:</label><br>
                <input type="text" name="word" id="word"/>
            </p>
            <p>
                <button type="submit">Invia</button>
            </p>
        </form>
    </main>
</body>
</html>