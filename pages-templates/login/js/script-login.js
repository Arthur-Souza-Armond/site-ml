
/****************************
 * 
 *  Funções de login/Esqueci minha senha
 * 
 ****************************/

function login_user(){
    
    const email = document.querySelector('#email');
    const senha = document.querySelector('#senha');

    if( email.value != "" && senha.value != "" ){

        $.ajax({
            url: 'http://localhost/site-ml/wp-content/themes/theme/classes/Ajax.php',
            type: 'GET',
            dataType: 'json',
            data: {
                action: 'log_in_user',
                'email' : email.value, 'senha' : senha.value
            }, success: data => {
                ( data['status_return'] == 'error' )? alert( data['error_message']+"\n\nError code: "+data['error_code'] ) : window.location.replace("http://www.localhost/site-ml/perfil");

            },error: function( XML, responseStatus ){
                alert( "Ops! Ocorreu um erro ao fazer o seu Login. Por favor, tente novamente mais tarde" );
                console.log( XML );
            }
        })

    }else{
        alert("Ops! Você precisa preencher os campos para poder fazer login");
    }

}
