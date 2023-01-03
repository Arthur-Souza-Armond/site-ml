<?php

    require_once( '../../../../wp-load.php' );

    /************************************
     * 
     *  Verificações de segurança
     * 
     ************************************/

     $ipAccess = '';
     if( isset($_SERVER['HTTP_CF_CONNECTING_IP']) ){
        $ipAccess = $_SERVER['HTTP_CF_CONNECTING_IP'];
     }else{
        if( isset($_SERVER['REMOTE_ADDR']) ){
            $ipAccess = $_SERVER['REMOTE_ADDR'];
        }else{
            $ipAccess = '0.0.0.0';
        }
     }

    /************************************
     * 
     *  Ajax para conta do usuário
     * 
     ************************************/

     // Função de login
    if( $_GET['action'] == 'log_in_user' ){
        
        // Verificação das variáveis recebidas
        if( !empty( $_GET['email'] ) && !empty( $_GET['senha'] ) ){

            // Uso da classe de usuário do sistema
            require_once( 'User.php' );

            // Instanciamento da classe
            $userClass = new Account_user();

            // Resposta a requisição
            ob_clean();
            echo json_encode( $userClass->log_in( $_GET['email'], $_GET['senha'] ) );

        }else{
            ob_clean();
            echo json_encode( [ 'status_return' => 'error', 'error_code' => 'error_inesperado', 'error_message' => 'Ocorreu um erro inesperado no sistema. Tente novamente mais tarde' ] );
        }

    }

    // Função de criação de conta
    if( $_POST['action'] == 'create_account' ){

        // Classe necessária
        require_once( 'User.php' );

        // Instancia da classe
        $userClass = new Account_user();

        // Resposta da requisição
        ob_clean();
        echo json_encode( $userClass->create_account( '', '', '', '' ) );

    }

