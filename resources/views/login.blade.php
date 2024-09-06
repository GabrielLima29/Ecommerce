<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Acesse sua conta L/L</title>
</head>
    <body>
        <div class="header">
            <a href="#">INICIAR SESSÃO</a>
            <a href="#">CESTO (0)</a>
        </div>
        <div class="container">
            <div class="form-box">
                <img src="logo.png" alt="Logo L / L" class="logo">
                <h1>ACESSE A SUA CONTA</h1>
                <form>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <a href="#">Esqueceu sua senha?</a>
                    <button type="submit">INICIAR SESSÃO</button>
                </form>
                <a href="views/register.blade.php">Ainda não tem conta na L / L? Criar uma conta L / L</a>
            </div>
        </div>
    </body>
</html>