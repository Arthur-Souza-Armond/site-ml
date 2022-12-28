function buscar_empresa(){

    const inputNomeEmpresa = document.querySelector('#nome-da-empresa');

    if( inputNomeEmpresa.value == "" || inputNomeEmpresa.value == null ){
        alert("ERRO");
    }else{
        
        $.ajax({
            url: 'http://localhost/siteMl/functions.php',
            type: 'POST',
            data: {
                'create_account'
                 : inputNomeEmpresa.value
            },success: data => {
                console.log( data );
            },error: function(XML, textStatus, errorThrown){
                console.log(XML);
                console.log( textStatus );
                console.log( errorThrown );
            }
        })

    }

}