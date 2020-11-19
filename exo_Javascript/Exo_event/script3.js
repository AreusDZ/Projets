// chercher tous les td du tableau, quand on clic sur un td on insert un input à l'intérieur
// lorsqu'on clic ailleur, l'input disparait et la valeur entrée est sauvagarder dedans


// 1) clic sur le td qui ajoute un input dans le td
// 2) événement "j'ai quitté l'input" mettre la valeur directement dans le td

// event BUBBLING --> propagation des événements clic sur les parents, pour stopper il faut utiliser la fonction stopPropagation() 
// en faisant e.stopPropagation()



var table = document.getElementById("table");
var tds = document.getElementsByTagName("td");
// console.log(tds);
for(var i = 0; i < tds.length; i++){
    var td = tds[i];
    td.addEventListener('click', function (e){

        this.setAttribute('data-clicked','yes');
        this.setAttribute('data-text',this.innerHTML);

        var input = document.createElement("input");
            input.type = "text";
            input.value = this.innerHTML;         // garder la valeur de la cellule dans l'input
        
    

            input.onblur = function() {               // onblur éxécute le code quand la personne sort d'un input il y a aussi change et focusOut
            var td = input.parentElement;
            var originalText = input.parentElement.getAttribute("data-text");
            var currentText = this.value;

            if(originalText != currentText) {
                td.removeAttribute('data-clicked');
                td.removeAttribute('data-text');
                td.innerHTML = currentText;
            }
        }


        this.innerHTML = "";                      // clear la td quand on clique

        var myClickedElement = e.target;
        myClickedElement.appendChild(input);
        this.firstElementChild.select();          // select la valeur par défaut du input l'élément sélectonné
    })
}





// var tdList = document.querySelectorAll('td');
// var input = document.createElement('input'); input.id = 'modifTable';

// for (i = 0; i < tdList.length; i++) {
//     tdList[i].addEventListener('click', function(e){
//         var test = e.target;
//         var tdContent = test.innerText;
//         test.replaceWith(input);
//         document.getElementById("modifTable").value = tdContent;

//         document.getElementById("modifTable").addEventListener('focusout', function(e){
//             e.preventDefault();
//             this.replaceWith(this.value);
//         });
//     });
// }