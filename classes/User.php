<?php    

    /************************************
     * 
     * Informações da conta do usuário
     * 
     ************************************/
    class Account_Seller{

        
        public $Token_user;
        public $Id_user;
        public $Refresh_token_user;
        public $Cliente_secret_user;

        public $state_info_user = 0;        

        // Função de aquisição de dados do cliente
        public function get_info_seller(){            

            // Variáveis auxiliares
            $accountClass = new Account_Seller();

            // inicialização da consulta
            $ch = curl_init();             

            //if(  )

            // Parâmetros da consulta da API
            curl_setopt($ch, CURLOPT_URL, 'https://api.mercadolibre.com/users/690254008');
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Authorization: Bearer APP_USR-5792361718104401-122613-30eb8eddcbef8efc8f30b6f69ce62f50-690254008'  ) );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            // Execução do pedido
            $data = curl_exec($ch);

            // Liberação de memória
            curl_close( $ch );
                                   
            // Validação da consulta
            $validation = $accountClass->validation_answer_server( $data );

            if( gettype( $validation ) == 'array' ){
                if( $validation['can_go'] ){

                    // Se a consulta tiver sido bem sucedida
                    ob_clean();
                    $data = json_decode( $data );
                    echo json_encode( $accountClass->info_persona_seller( $data ) );
    
                }else if( !empty( $validation['error_message'] ) ){
    
                    // Se houver algum erro 
                    ob_clean();
                    echo json_encode( $validation );
    
                }else{
    
                    // Erros desconhecidos
                    ob_clean();
                    echo json_encode([ 'error_message' => 'error_unknown', 'codigo_error' => 'error_unknown' ]);
                }

            }else if( gettype( $validation ) == 'object' ){
                $accountClass->get_info_seller();
            }          

        }

        /************************************
         * Validação da resposta
         ************************************/

        public function validation_answer_server( $data ){

            
            if( $data == '' ){

                // Requisição com resposta vazia
                return [ 'error_message' => 'empty_answer', 'codigo_error' => 'error_empty_request', 'can_go' => false ];

            }else{

                // Transformação de JSON para object
                $data = json_decode( $data );

                // Verificação de mensagem de token inválido
                if( strval( $data->message ) == 'invalid_token' ){

                    // Criação da instância da classe de criação de usuário
                    $refresh_token = new CREATE_user;
                    return $refresh_token->refresh_token();
                }else{

                    // Requisição com resposta correta
                    return ['can_go' => false];
                }  
            }         
        }

        /***************************************
         *  Aquisição dos dados pessoais
         ***************************************/

        public function info_persona_seller( $data ){

            $info = [ 
                'id' => $data->id,
                'first_name' => $data->first_name,
                'last_name' => $data->last_name,
                'seller' => ( $data->seller_reputation->level_id == null )? false : true,
                'nickname' => $data->nickname,
                'email' => $data->email,
                'registration_date' => $data->registration_date,
                'type_identification' => $data->identification->type,
                'number_identification' => $data->identification->number,

            ]; 
            return $info;
        }

        /*************************************
         *  Getters and Setters 
         *************************************/

         // Token User
         public function get_token_user(){ return $this->Token_user; }
         public function set_token_user( $var ){ 
             $this->Token_user = $var;
         }
 
         // Id Usuário
         public function get_id_user(){ return $this->Id_user; }
         public function set_id_user( $var ){
             $this->Id_user = $var;
         }
 
         // Refresh Token
         public function get_refresh_token_user(){ return $this->Refresh_token_user; }
         public function set_refresh_token_user( $var ){
             $this->Refresh_token_user = $var;
         }
 
         // Client Secret
         public function get_client_secret_user(){ return $this->Cliente_secret_user; }
         public function set_cliente_secret_user( $var ){
             $this->Cliente_secret_user = $var;
         }

    }

    class Account_user{

        /**************************
         * Criação da conta
         **************************/

        public function create_account( $infoCliente, $infoEnderecoCliente, $infoAssinatura, $infoPagamento ){
            
            // ARRAYS TESTE
            $infoCliente = [
                'nome' => 'Arthur',
                'sobrenome' => 'Souza',
                'email' => 'asarmond83@gmail.com',
                'tipo_de_pessoa' => 'Física',
                'codigo_identificador' => '16179151652',
                'senha' => 'Arthurfff82@',
                'confirmacao_senha' => 'Arthurfff82@'
            ];

            $infoEnderecoCliente = [
                'cep' => '31270215',
                'rua' => 'Rua flor-de-índio',
                'numero' => '100',
                'complemento' => 'apto 204 A',
                'bairro' => 'Liberdade',
                'cidade' => 'Belo Horizonte',
                'estado' => 'MG'
            ];

            $infoAssinatura = [
                'tipo_de_assinatura' => '1 plataforma',
                'tipo_de_renovacao' => 'mensal'
            ];

            $infoPagamento = [
                'status_pagamento' => 'pago',
                'data_primeiro_pagamento' => '31/12/2022 15:51',
                'data_de_cobranca' => '10'
            ];            

            // Verificação de usuário já existente
            $verification = $this->verificar_usuario( $infoCliente );            
            if( !empty( $verification['status_action'] ) )
                return $verification;
            
            $infoCliente = $verification;

            // Verificação pagamento
            if( $infoPagamento['status_pagamento'] != 'pago' )
                return [ 'status_action' =>  'error', 'error_code' => 'create_account_pagamento_nao_pago', 'error_message' => 'O pagamento consta como não pago' ];
            
            // Criar novo usuário no banco de dados
            $idNewUser = $this->new_userpost_db( $infoCliente );
            if( $idNewUser == 0 )
                return [ 'status_action' =>  'error', 'error_code' => 'create_account_inserir_usuario', 'error_message' => 'Ops! ocorreu um erro ao inserir usuário ao banco de dados. Por favor entre em contato com o Suporte' ];

            // Adicionar informações usuário            
            $meta_info = $this->add_meta_information( $infoCliente, $infoEnderecoCliente, $infoAssinatura, $infoPagamento, $idNewUser );
            if( $meta_info['status_action'] == 'sucess' ){
                
                session_start();

                $_SESSION['id_usuario'] = $idNewUser;

                return [ 'status_action' => 'sucess' ];

            }

        }

        private function verificar_usuario( $data ){

            $argsUsers = [
                'post_type' => 'users',
                'post_status' => 'publish'
            ];

            $USERS = get_posts( $argsUsers );

            foreach( $USERS as $user ){
                if( get_post_meta( $user->ID, 'email_user', true ) == $data['email'] ){
                    return [ 
                        'status_action' =>  'error',
                        'error_code' => 'create_account_usuario_existente',
                        'error_message' => 'Esse email já existe no nosso banco de dados'
                    ];
                }
            }

            // Formatação email
            $data['email'] = addslashes( trim( $data['email'] ) );
            if( !filter_var( $data['email'], FILTER_VALIDATE_EMAIL ) )
                return [ 
                    'status_action' =>  'error',
                    'error_code' => 'create_account_email_inadequado',
                    'error_message' => 'O email não segue a formatação necessária'
                ];
            
            // Verificação de senhas
            if( trim( $data['senha'] ) != trim( $data['confirmacao_senha'] ) )
                return [ 
                    'status_action' =>  'error',
                    'error_code' => 'create_account_senha_diferente',
                    'error_message' => 'As senhas não são iguais'
                ];
            
            $data['senha'] = md5( trim( $data['senha'] ) );

            // Verificação de CPF/CNPJ
            if( $data['tipo_de_pessoa'] == 'Física' ){

                if( strlen( $data['codigo_identificador'] ) != 11 ){
                    return [ 
                        'status_action' =>  'error',
                        'error_code' => 'create_account_cpf_errado',
                        'error_message' => 'Ops! parece que tem algum erro no tipo de pessoa ou no código inserido'
                    ];
                }

            }else if( $data['tipo_de_pessoa'] == 'Jurídica' ){

                if( strlen( $data['codigo_identificador'] ) != 14 )
                    return [ 
                        'status_action' =>  'error',
                        'error_code' => 'create_account_cnpj_errado',
                        'error_message' => 'Ops! parece que tem algum erro no tipo de pessoa ou no código inserido'
                    ];        

            }else{
                return [ 
                    'status_action' =>  'error',
                    'error_code' => 'create_account_tipo_de_pessoa_errado',
                    'error_message' => 'Ops! Parece que o tipo de pessoa inserido não existe'
                ];
            }

            return $data;
        }

        private function new_userpost_db( $data ){

            // Argumentos usuário
            $argsUser = [
                'post_status' => 'publish',
                'post_type' => 'users',
                'post_name' => trim( $data['nome'] ) . ' ' . trim( $data['sobrenome'] ),
                'post_title' => trim( $data['nome'] ) . ' ' . trim( $data['sobrenome'] )
            ];

            return wp_insert_post( $argsUser );

        }

        private function add_meta_information( $dataCliente, $dataEndereco, $dataAssinatura, $dataPagamento, $id ){

            // Pessoais
            update_post_meta( $id, 'email_user', $dataCliente['email'] );
            update_post_meta( $id, 'type_user', $dataCliente['tipo_de_pessoa'] );
            update_post_meta( $id, 'identificador_user', $dataCliente['codigo_identificador'] );
            update_post_meta( $id, 'senha_user', $dataCliente['senha'] );

            // Endereço
            update_post_meta( $id, 'cep_user', $dataEndereco['cep'] );
            update_post_meta( $id, 'rua_user', $dataEndereco['rua'] );
            update_post_meta( $id, 'numero_user', $dataEndereco['numero'] );
            update_post_meta( $id, 'complemento_user', $dataEndereco['complemento'] );
            update_post_meta( $id, 'bairro_user', $dataEndereco['bairro'] );
            update_post_meta( $id, 'cidade_user', $dataEndereco['cidade'] );
            update_post_meta( $id, 'estado_user', $dataEndereco['estado'] );

            // Assinatura
            update_post_meta( $id, 'tipo_assinatura_user', $dataAssinatura['tipo_de_assinatura'] );
            update_post_meta( $id, 'tipo_renovacao_user', $dataAssinatura['tipo_de_renovacao'] );

            // Info Pagamento
            update_post_meta( $id, 'status_pagamento_user', $dataPagamento['status_pagamento'] );
            update_post_meta( $id, 'primeiro_pagamento_user', $dataPagamento['data_primeiro_pagamento'] );
            update_post_meta( $id, 'data_de_cobranca_user', $dataPagamento['data_de_cobranca'] );

            return [ 'status_action' => 'sucess' ];

        }

        // Variáveis Login
        private $emailExists = false;
        private $idUserExists;

        public function log_in( $email, $senha ){       

            // Verificação das variáveis recebidas
            if( $email == '' && $email == null && $senha == "" && $senha == null )
                return [ 'status_return' => 'error', 'error_code' => 'log_in_error_formatacao', 'error_message' => 'formato de requisição inválido' ];

            // Preparação das variáveis recebidas
            $emailInput = addslashes( trim( $email ) );
            $senhaInput = md5( trim( $senha ) );

            // Argumentos da consulta
            $args = [
                'post_type' => 'users',
                'post_status' => 'publish'
            ];

            // Todos os usuários do sistema
            $Usuarios = get_posts( $args );

            // Verificação se existem usuários no banco de dados
            if( sizeof( $Usuarios ) == 0 )
                return [ 'status_return' => 'error', 'error_code' => 'log_in_error_nenhum_usuario_encontrado', 'error_message' => 'Nenhum usuário foi encontrado' ];

            // Verificação de cada usuário do banco
            foreach( $Usuarios as $user ){

                // Recuperação das informações de login do usuário atual
                $emailUser = get_post_meta( $user->ID, 'email_user', true );
                $senhaUser = get_post_meta( $user->ID, 'senha_user', true );

                // Verificação de compatibilidade do email ( Inserido == Atual )
                if( $emailUser == $emailInput ){

                    // Recupera o ID do usuário com email correspondente
                    $this->set_email_exists( true, $user->ID );

                    // Verifica a senha do usuário atual com corresponde com a inserida
                    if( $senhaUser == $senhaInput ){

                        // Verifica se há algum bloqueio no login
                        if( $this->verificar_bloqueio( $user->ID ) ){

                            // Atualiza as informações de login
                            update_post_meta( $user->ID, 'numero_de_tentativas', '0' );
                            update_post_meta( $user->ID, 'tempo_bloqueio', '' );                            

                            session_start();

                            // Configuração de informações de sessão do usuário
                            $_SESSION[ "id_usuario" ] = $user->ID;
                            
                            // ABAIXO vem informação do App do mercado livre conectado e outras informaões do DB
                            
                            // Retorno a requisição bem sucedida
                            return [ 'status_return' => 'success', 'sessao' => $_SESSION ];

                        }else{

                            // Retorno de usuário que foi bloqueado
                            return [ 'status_return' => 'error', 'error_code' => 'log_in_error_tempo_de_bloqueio', 'error_message' => 'Ops! Parece que você excedeu o número máximo de tentativas. Tente novamente mais tarde' ];
                        }                                
                    }else{
                        // Usuário errou a senha

                        // Retorno das informações de identificação do cliente com esse email
                        $resultExists = $this->get_email_exists();

                        // Verifica se possui uma conta com esse email
                        if( $resultExists[0] ){                    

                            // Recupera o número de tentativas que o usuário teve
                            $numeroTentaivas = intval( get_post_meta( $resultExists[1], 'numero_de_tentativas', true ) );     
                            
                            // Realiza a condição de bloqueio do usuário
                            if( $numeroTentaivas == 2 ){

                                // Reinicia a quantidade de tentativas
                                update_post_meta( $resultExists[1], 'numero_de_tentativas', '0' );

                                // Estipula o tempo de bloqueio do usuário
                                update_post_meta( $resultExists[1], 'tempo_bloqueio', $this->get_data_bloqueio() );

                                // Retorno para o usuário da operação
                                return [ 'status_return' => 'error', 'error_code' => 'log_in_error_muitas_tentativas_falhas', 'error_message' => 'Ops! Parece que você excedeu o número máximo de tentativas. Tente novamente mais tarde' ];

                            }else{

                                // Incrementa 1 na quantidade de tentativas
                                update_post_meta( $resultExists[1], 'numero_de_tentativas', strval( $numeroTentaivas + 1 ) );

                                // Retorno para o usuário
                                return [ 'status_return' => 'error', 'error_code' => 'log_in_error_credenciais', 'error_message' => 'credenciais inválidas' ];
                            }

                        }                                                    
                    }
                }
            }

            // Usuaário não encontrado no banco de dados
            return [ 'status_return' => 'error', 'error_code' => 'log_in_error_usuario_nao_existe', 'error_message' => 'O usuário digitado não existe' ];

        }

        private function get_data_bloqueio(){

            date_default_timezone_set('America/Sao_Paulo');
            return date( 'd-m-Y H:i:s', strtotime('+5 min'));

        }

        private function verificar_bloqueio( $IdUser ){

            $bloqueioDb = get_post_meta( $IdUser, 'tempo_bloqueio', true );
            $dataAtual = date( 'd-m-Y H:i:s' );

            if( strtotime( $dataAtual ) > strtotime( $bloqueioDb ) ){
                return true;
            }else{
                return false;
            }

        }

        public function set_email_exists( $exists, $id ){
            $this->emailExists = $exists;
            $this->idUserExists = $id;
        }
        public function get_email_exists(){ return [ $this->emailExists, $this->idUserExists ]; }

    }