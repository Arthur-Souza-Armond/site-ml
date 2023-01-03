<?php
    /*
        Template Name: Login
    */    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça o Login</title>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() . '/pages-templates/login/style/style-login.css' ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <main>
        <div class="login-esquerda">
            <div class="login-instrucoes">
                <h2>Fazer login em <span class="siteML">Comunidade Ecom</span></h1>
                    <p>Preencha suas informações abaixo:</p>
            </div>
            <div class="login-form">
                <div class="consert-block">
                    <div class="consertar-icon">
                        <i class="material-icons">person</i>
                        <label for="email"> E-mail:</label>
                    </div>
                </div>
                <input type="email" name="inputemail" id="email" placeholder="Digite aqui o seu e-mail." value="asarmond82@gmail.com">
                <div class="consert-block">
                    <div class="consertar-icon">
                        <i class="material-icons">vpn_key</i>
                        <label for="senha">Senha:</label>
                    </div>
                </div>
                <input type="password" name="inputsenha" id="senha" placeholder="Digite aqui a sua senha." value="Arthurfff82">
                <div class="esqueci-block">
                  <div class="esqueci-flex"><a class="esqueci" href="#">Esqueci minha senha</a></div>
                </div>
                <button onclick="login_user()">Entrar</button>
                <span class="cadastro">Ainda não tem uma conta? <a href="#">Cadastre-se</a></span>
            </div>
        </div>
        <div class="login-direita"></div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_theme_file_uri() . '/pages-templates/login/js/script-login.js' ?>"></script>
</body>

</html>