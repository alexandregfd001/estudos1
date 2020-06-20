<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    <div id="login-container">
        <h1>Faca o registro</h1>
        <form action="cadastro.php" method="post">
            <label for="nome">nome</label>
            <input type="usuario" name="nome" id="nome" placeholder="digite seu nome" autocomplete="off">         
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="digite seu E-mail" autocomplete="off">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="digite sua senha" autocomplete="off">
            <input type="submit" value="Login"> 
        </form>
        <div id="social-container">
            <p>ou entre pelas redes sociais</p>
            <i class="fa fa-facebook-f"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-instagram" ></i>
            <i class="fa fa-google"></i>
            <div id="register-container">
                <p>ja possui uma conta ?</p>
                <a href="aula1.html">faça o login</a>
            </div>
        </div>
    </div>
</body>
</html>