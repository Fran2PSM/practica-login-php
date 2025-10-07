<?php
/*Aqui va a ir la logica del archivo loquete*/ 





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <h1 style="text-align:center">Iniciar sesión</h1>

    <form method="post" autocomplete="off" style="max-width:400px;margin:1rem auto;background:#fff;padding:2rem;padding-right:3.5rem;border-radius:12px;box-shadow:0 6px 24px rgba(0,0,0,.08)">
    <input name="user" placeholder="Usuario o email" required style="width:100%;padding:.8rem;margin:.5rem 0 1rem;border-radius:8px;border:1px solid #ddd">
    <input type="password" name="pass" placeholder="Contraseña" required style="width:100%;padding:.8rem;margin:.5rem 0 1rem;border-radius:8px;border:1px solid #ddd">
    <button style="width:107%;padding:.9rem;border:0;border-radius:15px;background:#1f6feb;color:#fff;cursor:pointer">Entrar</button>
  </form>

</body>
</html>