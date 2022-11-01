
var ruteListe = document.getElementsByClassName("square");

for(var i = 0; i < ruteListe.length; i++){
    ruteListe[i].addEventListener("click", flyttBrikke);
}


var harKlikketEnGang = false;

var brikkeViSkalTaVarePaa = "";

function flyttBrikke(e) {
    if(harKlikketEnGang){
        e.target.innerHTML = brikkeViSkalTaVarePaa;
        harKlikketEnGang = false;
    }
    else {
        brikkeViSkalTaVarePaa = e.target.innerHTML;
        harKlikketEnGang = true;
    }

    console.log(e.target.innerHTML)
    //sqareB1.innerHTML = "";
}









//sqareA1.style.backgroundColor="blue";


//Sjekk om det er første gang du klikker
    // Ta vare på brikken i ruta du klikket på
    // Sett harKlikketEnGang til true

// Hvis det er andre gang
    // Tegne hestten i stedet
    // Sett harKlikketEnGang til false