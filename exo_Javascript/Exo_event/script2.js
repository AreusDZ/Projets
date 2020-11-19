
var bouton = document.getElementById("btnSupBr");
// var div = document.getElementById("divId");
var br = document.getElementsByClassName("br");

bouton.addEventListener('click', function (e){
   

    for (var i = 0; i< br.length;i++) {

        while (br){

            br[i].remove();
        }
        // br[i].remove();
        // var BR = br[i+1];
        // div.removeChild(Br);
        // div.removeChild(BR);
        
    }
        

        }
)

/* bouton.addEventListener('click', function(e){
    var br = document.querySelectorAll("br");
    for(i=0; i < br.length; i++) {
        br[i].remove();
    }
}); */
