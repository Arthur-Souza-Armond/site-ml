<?php
    /*
        Template Name: Perfil
    */    
    
    session_start();

    $idUser = $_SESSION['id_usuario'] ?? NULL;

    if( !$idUser )
        header( 'Location: http://localhost/site-ml/login/' );    

    function show_home_content(){

        // Configuração de data
        date_default_timezone_set( 'America/Sao_Paulo' );
        $date = date('H:i');
        $horas = intval( substr( $date, 0, 2 ) );

        $idUser = $_SESSION['id_usuario'];

        $argsUsuario = [
            'id'
        ];

        if( $horas > 18 ){
            $date = 'Boa noite';
        }else if( $horas < 12 ){
            $date = 'Bom dia';
        }else if( $horas > 12 && $horas < 18 ){
            $date = 'Boa tarde';
        }
        $html = 
        '
            <div class="home-container">
                <span class="saudacao-usuario">'.
                    $date . ', ' . get_post( $idUser )->post_title
            .'  </span><!-- Saudacao do cliente -->
                <div class="grafico-tendencia">
                    Gráfico de tendencia
                </div>
            </div><!-- Content Home -->
        ';
        return $html;
    }

    function show_account_content(){
        $html = 
        '
            <div class="account-container">
                <span id="info-dash-account-label">Dados sobre sua conta</span>
                <div id="div-container-navigation-table">
                    <a onclick="change_table_account( 0 )">dados da conta</a>
                    <a onclick="change_table_account( 1 )">dados de cobrança</a>
                    <a onclick="change_table_account( 2 )">formas de pagamento</a>
                    <a onclick="change_table_account( 3 )">extrado de pagamentos</a>
                </div>
            </div><!-- Content Account -->     
        ';
        return $html;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link rel="stylesheet" href="<?php echo get_theme_file_uri() . '/pages-templates/perfil/style-perfil.css' ?>">
</head>
<body>
    <main>
        <div class="sidebar">
            <div class="mini-options">
                <div class="big-menu">
                    <div>
                        <span>Início</span>
                        <div class="sub-menu">
                            <ul>
                                <li><a onclick="show_content_dash( 'home' )">Home</a></li>
                                <li><a onclick="show_content_dash( 'account' )">Conta</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <span>Produtos</span>
                        <div class="sub-menu">
                            <ul>
                                <li><a>TESTE!!</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <span>Início</span>
                        <div class="sub-menu">
                            <ul>
                                <li><a>TESTE!!</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-content">
            <?php 
                echo show_home_content(); 
                echo show_account_content();
            ?>
        </div>
    </main>
    <script id="script-perfil" type="text/javascript" src="<?php echo get_theme_file_uri() . '/pages-templates/perfil/script-perfil.js' ?>"></script>
</body>
</html>