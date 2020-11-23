

// bouton = document.getElementById("btn_cocher");
//     bouton.addEventListener('click', function (e){
//         var checkboxes = document.getElementsByClassName("checkbox");
//         for (var i = 0; i< checkboxes.length;i++) {
//             var checkbox = checkboxes[i];
//             checkboxes[i].checked=etat==1?"btn_cocher":false;
//         }

//     })


var boutonCocher = document.getElementById("btn_cocher");
var boutonDecocher = document.getElementById("btn_decocher");

function cocher(className,etat) {

    var checkboxes = document.getElementsByTagName(className);
    for (var i = 0; i < checkboxes.length; i++) {

        checkboxes[i].checked=etat==1?"btn_cocher":false;

    }
}