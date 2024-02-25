<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de sesión</title>
    <link rel="stylesheet" href='css\style.css'>
</head>
<body>
    <h1>Formulario de Inicio de sesión</h1>
    <div>
        <form action="{{ route('user.login', $user->id) }}" method="post">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
            <input type="submit" value="LogIn">
        </form>
    </div>
</body>
</html>