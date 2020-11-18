// Création de l'élement div 
var div = document.createElement("div");
    div.id = "divTP2";

// Récupération de l'élément body que je range dans la variable "body"
var body = document.getElementsByTagName("body");

// création de l'élément form
var form = document.createElement("form");
    form.enctype = "multipart/form-data";
    form.method = "post";
    form.action = "upload.php";

// création de l'élément fieldset
var fieldset = document.createElement("fieldset");

// création de l'élément legend
var legend = document.createElement("legend");
    legend.textContent = "Uploader une image";

// création de l'élément div2
var div2 = document.createElement("div");
    div2.style = " text-align: center";

// création de l'élément label
var label = document.createElement("label");
    label.for ="inputUpload";
    label.textContent = "Image à upload";


// Function create input
function createInput(a, b, c, d){
    input=document.createElement("input");
    input.type=a;
    input.name=b;
    input.id=c
    input.value=d
    
    return input
    }

// création de l'élément input
var input= createInput("file", "inputUpload", "inputUpload", "");
 

// création de l'élément br
var br = document.createElement("br");

// création de l'élément input2
var input2 = createInput("submit", "", "", "envoyer");
   
// insertion contenu de la div 2
    div2.appendChild(label);
    div2.appendChild(input);
    div2.appendChild(br);
    div2.appendChild(input2);

// Insertion contenu du fieldset
    fieldset.appendChild(legend);
    fieldset.appendChild(div2);

// Insertion contenu du form
    form.appendChild(fieldset);

// Insertion contenu de la grande div
    div.appendChild(form);
   
// Insertion de la grande div dans le body 
    body[0].appendChild(div); 

// Affichage
    console.log(body);


    
    

   