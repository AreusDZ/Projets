
// Récupération de l'élément body que je range dans la variable "body"
    var body = document.getElementsByTagName("body");

// Création de l'élement div 
function createInsertDiv(i,parent){
    var div = document.createElement("div");
        div.id = i;  
        div.style.display ="none";
        parent.appendChild(div);
        return div;
}
// function creation text
function createInsertText(text,parent){
    var a = document.createTextNode(text);
        c = parent.appendChild(a);
}

// function creation strong
function createInsertStrong(tContent,parent){
    var strong = document.createElement("strong");
        strong.textContent = tContent;
        c = parent.appendChild(strong);
}

// Function create a (lien)
function createA(href, title, tContent,parent){
    var a = document.createElement("a");
        a.href= href;
        a.title=title;
        a.textContent= tContent;
        c = parent.appendChild(a);
} 



// Insertion de la div dans le body

div = createInsertDiv("divTP1",body[0]);

// Insertion des éléments dans la div
createInsertText(" Le",div);
createInsertStrong(" World Wild Web consortium",div);
createInsertText(" abrégé par le sigle",div); 
createInsertText(" W3C",div); 
createInsertText(" est un",div);
createA("https://fr.wikipedia.org/wiki/Organisme_de_normalisation", "organisme de normalisation", " organisme de normalisation",div );
createInsertText(" à but non-lucratif chargé de promouvoir la compatibilité des technologies du",div);
createA("https://fr.wikipedia.org/wiki/World_Wide_Web", "World Wild Web", " World Wild Web",div);


// Bouton afficher
var bouton = document.getElementById("btn_afficher");
    bouton.addEventListener('click', function (e){
        
        var div = document.getElementById("divTP1");
        if (div.style.display !== "none") {
            
            bouton.value = "afficher";
            div.style.display = "none";

         } 
         
         else if(div.style.display == "none") {

            bouton.value = "masquer";
            div.style.display = "block";
            
         
             }
    })

    // function afficher() {
    //     var div = document.getElementById("divTP1");
    //     if (div.style.display === "none") {
    //       div.style.display = "block";
    //     } else {
    //       div.style.display = "none";
    //     }
    //   }