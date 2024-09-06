<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Crie sua conta L/L</title>
</head>
<body>
<div class="container">
        <div class="form-box">
            <img src="logo.png" alt="Logo L / L" class="logo">
            <h1>CRIE SUA CONTA</h1>
            <form>
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <input type="tel" name="telefone" placeholder="Telefone" required>
                <input type="number" name="idade" placeholder="Idade" required>
                <button type="submit">CRIAR CONTA</button>
            </form>
            <a href="views/login.blade.php">Já tem conta na L / L? Acessar sua conta L / L</a>
        </div>
    </div>
    
</body>
</html>