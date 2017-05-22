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

function SearchBilan() {
    let filter, table, tr, td, i
    // search fct en maj ou minuscule carac
    filter = input.value.toUpperCase()
    table = document.getElementById("data_bilan_eleve")
    tr = table.getElementsByTagName("tr")
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = ""
            } else {
                tr[i].style.display = "none"
            }
        }
    }
}
let input
input = document.getElementById("search");
input.addEventListener('keyup', SearchBilan)