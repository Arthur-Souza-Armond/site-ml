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