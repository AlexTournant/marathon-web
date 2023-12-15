const el = document.querySelector("#convertir");
el.addEventListener("click", calculer, false);
function calculer() {
    let euros = document.querySelector( "#euros" );
    let valeur = euros.value;
    if ( isNaN( valeur ) ) {
        alert( "Le montant en euros n'est pas un nombre !" );
        euros.focus();
    }
    else {
        let francs = document.querySelector( "#francs" );
        francs.innerHTML = ( valeur * 6.55957 ).toFixed( 2 );
    }
}
