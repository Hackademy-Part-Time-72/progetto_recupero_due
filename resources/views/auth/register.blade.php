<!DOCTYPE html>
<html>

<head>
    <title>Register - MindSpace</title>
</head>

<body>

    <h1>Registrazione</h1>

    <form method="POST" action="/register">
        @csrf

        <input type="text" name="name" placeholder="Nome" required>
        <br><br>

        <input type="email" name="email" placeholder="Email" required>
        <br><br>

        <input type="password" name="password" placeholder="Password" required>
        <br><br>

        <input type="password" name="password_confirmation" placeholder="Conferma Password" required>
        <br><br>

        <button type="submit">Registrati</button>
    </form>

</body>

</html>