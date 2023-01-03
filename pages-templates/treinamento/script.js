/***********************
 * Visibilidade Acordeon
 **********************/

let elementsAcordeon = document.querySelectorAll( '.div-acordeon div' );

elementsAcordeon.forEach( element => {
    if( element.id == "div-acordeon-modulo1" ){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
} )


function show_selected_accordeon( id ){
    
    elementsAcordeon.forEach( element => {
        if( element.id == id ){
            element.style.display = "block";
        }else{
            element.style.display = "none";
        }
    } )

}

function ir_para_hotmart(){
    window.location="https://pay.hotmart.com/E61377603V";
}