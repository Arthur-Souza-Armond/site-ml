<?php    

    /************************************
     * 
     * Classe de criação do usuário
     * 
     ************************************/

    class CREATE_user{

        /***************************************
         *  Função de refresh do token
         ***************************************/

        public function refresh_token(){

            // Inicia o curl
            $ch = curl_init();

            // Parâmetros para requisição
            curl_setopt($ch, CURLOPT_URL, 'https://api.mercadolibre.com/oauth/token');
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 
                'accept: application/json',
                'content-type: application/x-www-form-urlencoded'
                  ) );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt( $ch, CURLOPT_POST, 1 );
            curl_setopt(  $ch, CURLOPT_POSTFIELDS, http_build_query( array(
                'grant_type' =>  'refresh_token',
                'client_id' =>  '5792361718104401',
                'client_secret' =>  'zqmoCG9PXY8Zdg53FuUKwt7NP3JevG56',
                'refresh_token' => 'TG-63a9d9d4c55e05000138cd8e-690254008'
            ) ) );

            // Execução de consulta
            $data = curl_exec($ch);

            // Liberação de memória
            curl_close( $ch );

            // ( JSON ) => ( Object )
            $data = json_decode( $data );

            // Se tiver acontecido algum erro na consulta
            if( !empty( $data->error ) ){
                return [
                            'error_message' => $data->error,
                            'codigo_error' => 'error_refresh_token', 
                            'can_go' => false
                        ];
            }

            // Usar novas informações para colocar no db
            return $data;

        }

    }

    if( isset( $_POST['account_info'] ) ){
                       
        $aux = new Account_Seller();
        $aux->get_info_seller();

    }
?>