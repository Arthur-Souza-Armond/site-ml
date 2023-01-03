/************************
 * 
 * Visibilidade da DashBoard
 * 
 ************************/
const childsDash = document.querySelectorAll( '.dashboard-content > *' );

// Visibilidade inicial
childsDash.forEach( element => {
    let identificadorDiv = ( element.className ).split('-');
    if( identificadorDiv[0] == 'account' ){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
} )

// Funcionalidade Sidebar
function show_content_dash( arg ){
    childsDash.forEach( element => {
        let identificadorDiv = ( element.className ).split('-');
        if( identificadorDiv[0] == arg ){
            element.style.display = "block";
        }else{
            element.style.display = "none";
        }
    } )
}

// Account Menu
const childNavigationTable = document.querySelectorAll( '#div-container-navigation-table > *' );

let indexLinks = 0;
childNavigationTable.forEach( element => {
    if( indexLinks == 0 ){
        element.style.fontWeight = "bold";
        element.style.borderColor = "black";
        element.style.borderWidth = "0px 0px 2px 0px"
    }
    indexLinks++;
} )

function change_table_account( index ){
    indexLinks = 0;
    childNavigationTable.forEach( element => {
        if( indexLinks == index ){
            element.style.fontWeight = "bold";
            element.style.borderColor = "black";
            element.style.borderWidth = "0px 0px 2px 0px"
        }else{
            element.style.fontWeight = "400";
            element.style.borderColor = "#ccc";
            element.style.borderWidth = "0px 0px 1px 0px"
        }
        indexLinks++;
    } )
}