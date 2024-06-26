<!DOCTYPE html>
<html>
<head>
    <title>Encriptar/Desencriptar Contraseñas</title>
</head>
<body>
<h2>Encriptar Contraseña</h2>
<form method="post" action="/encrypt">
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Encriptar</button>
</form>

<?php if (isset($encrypted)): ?>
    <p>Contraseña encriptada: <?= $encrypted ?></p>
<?php endif; ?>

<h2>Desencriptar Contraseña</h2>
<form method="post" action="/decrypt">
    <input type="text" name="encrypted_password" placeholder="Contraseña encriptada" required>
    <button type="submit">Desencriptar</button>
</form>

<?php if (isset($decrypted)): ?>
    <p>Contraseña desencriptada: <?= $decrypted ?></p>
<?php endif; ?>
</body>
</html>
