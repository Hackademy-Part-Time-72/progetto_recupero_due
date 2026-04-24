<!DOCTYPE html>
<html>

<head>
    <title>Crea articolo</title>
</head>

<body>

    <h1>Crea articolo</h1>

    <form method="POST" action="/articles">
        @csrf

        <input type="text" name="title" placeholder="Titolo" required>
        <br><br>

        <textarea name="body" placeholder="Contenuto" required></textarea>
        <br><br>

        <button type="submit">Salva</button>
    </form>

</body>

</html>