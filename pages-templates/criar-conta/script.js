// Constantes de elementos importantes
const divMain = document.querySelector('.container-inputs');
const divMainChilds = document.querySelectorAll( '.child-main-content' );

// Visibilidade incial
divMainChilds.forEach( element => {
    element.style.display = "none";
} )

// Configuração de Elemento atual
let AtualElement = document.querySelector('#user-info-inputs');
AtualElement.style.display = "block";

// Função de voltar menu anterior
function preview_menu_info_cadastro(){
    
    let divChilds = [];
    
    divMain.childNodes.forEach( Element => {
        if( Element.nodeName == "DIV" ){
            divChilds.push( Element )
        }
    } )

    let firstDiv = document.querySelector('#user-info-inputs');

    if( AtualElement != firstDiv ){

        let index;

        for( let i=0; i<divChilds.length; i++ ){
            if( divChilds[i] == AtualElement ){
                index = i;
            }
        }

        divChilds[index].style.display = "none";
        divChilds[index - 1].style.display = "block";
        AtualElement = divChilds[index - 1];

    }
}

// função de próximo menu
function next_menu_info_cadastro(){

    let divChilds = [];

    divMain.childNodes.forEach( Element => {
        if( Element.nodeName == "DIV" ){
            divChilds.push( Element )
        }
    } )

    let lastDiv = document.querySelector('#pagamento-info-user');

    if( AtualElement != lastDiv ){

        let index;
        for( let i=0; i<divChilds.length; i++ ){
            if( divChilds[i] == AtualElement ){
                index = i;
            }
        }

        divChilds[index].style.display = "none";
        divChilds[index + 1].style.display = "block";
        AtualElement = divChilds[index + 1];

    }

}

// Listnner input CEP
const inputCep = document.querySelector('#cc-cep');

const inputRua = document.querySelector('#cc-rua');
const inputCidade = document.querySelector('#cc-cidade');
const inputBairro = document.querySelector('#cc-bairro');
const inputEstado = document.querySelector('#cc-estado');

inputCep.addEventListener( 'keyup', function() {
    if( inputCep.value.length == 8 ){
        let response = get_info_cep( inputCep.value );
        if( response != 'error' && response != 'fetch_error' ){
            response.then( resposta => {
                inputRua.value = resposta.logradouro;
                inputRua.style.backgroundColor = "#ccc";

                inputCidade.value = resposta.localidade;
                inputCidade.style.backgroundColor = "#ccc";

                inputBairro.value = resposta.bairro;
                inputBairro.style.backgroundColor = "#ccc";

                inputEstado.value = resposta.uf;
                inputEstado.style.backgroundColor = "#ccc";
            } )
        }else if( json == 'fetch_error' ){
            alert( 'Ops! Seu cep não foi encontrado no banco de dados. Por favor, insira novamente um CEP válido' );
        }else{
            alert( 'Ops! Seu CEP está incorreto. Por favor, tente novamente' );
        } 
    }
})

async function get_info_cep( cep ){

    if( cep == "" || cep == null )
        return 'error';//[ 'status_consulta' = 'error' ];

    let urlConsulta = `http://viacep.com.br/ws/${cep}/json/`;
    try{
        const dados = await fetch( urlConsulta ).then( response => response.json() ).then();
        return dados;
    }catch( exception ){
        return 'fetch_error';
    }    

}

function testar_criar_conta(){

    $.ajax({
        url: 'http://localhost/site-ml/wp-content/themes/theme/classes/Ajax.php',
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'create_account'
        }, success: data => {
            
            ( data['status_action'] == 'sucess' )? ir_para_perfil() : handle_error_create_account( data );

        },error: function( XML, responseStatus ){
            alert( "Ops! Ocorreu um erro ao fazer o seu Login. Por favor, tente novamente mais tarde" );
            console.log( XML );
        }
    })

}

function ir_para_perfil(){

    window.location="http://localhost/site-ml/perfil";

}

function handle_error_create_account( data ){

    // Report error para o servidor

    // Exibição de erro para o usuário
    alert( data['error_message']+'\n\n'+data['error_code'] );
}