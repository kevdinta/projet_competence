/**
 * Created by Kevin on 17/05/2017.
 */

let inc = 2
// Au clic de "Add cpt"
$("#addCpt").click(function() {
    let elem = $("<input/>",{
        type: "text",
        name: "competence[]",
        id: inc++,
        placeholder:"Votre nouvelle compétence..."
    })
    let removeLink = $("<button>").html("Retirer").addClass("button columns row").click(function(){
        // Supprime l'input text
        $(elem).remove()
        // Supprime le bouton supprimer
        $(this).remove()
    })
    // Permet de lier le remove à l'input, mettre le content dans la div divcpt
    $("#divCpt").append(elem).append(removeLink)
})