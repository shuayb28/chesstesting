var ruteListe = document.getElementsByClassName("square");

for(var i = 0; i < ruteListe.length; i++){
    ruteListe[i].addEventListener("click", movePiece);
}


var haveClickedOnce = false;

var pieceWeWillTakeCareof = "";

function movePiece(e) {
    if(haveClickedOnce){
        e.target.innerHTML = pieceWeWillTakeCareof;
        haveClickedOnce = false;
    }
    else {
        pieceWeWillTakeCareof = e.target.innerHTML;
        haveClickedOnce = true;
    }

    console.log(e.target.innerHTML)
    //sqareB1.innerHTML = "";
}








// turn = w;
// turn = b;

// function side() {
//    return turn;
// }
// function setTurn(newTurn) {
//     turn = newTurn;
// }
// game.setTurn(b);
// game.setTurn(w);





//sqareA1.style.backgroundColor="blue";


//Sjekk om det er første gang du klikker
    // Ta vare på brikken i ruta du klikket på
    // Sett harKlikketEnGang til true

// Hvis det er andre gang
    // Tegne hestten i stedet
    // Sett harKlikketEnGang til false