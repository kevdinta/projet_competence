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
function InitializeSearch() {
    let input
    input = document.querySelector("#search")
    input.addEventListener('keyup', () => {
        let filter, table, tr, td, i
        // search fct en maj ou minuscule carac
        filter = input.value.toUpperCase()
        table = document.querySelector("#data_bilan_eleve")
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
    })
}
function DisplayBloc() {
    let inputDisplay
    inputDisplay = document.querySelector('#epreuve')
    inputDisplay.addEventListener('change', () => {
        var style = inputDisplay.value == "BTS_SN" ? 'block' : 'none';
        document.getElementById('bloc_eval').style.display = style;
    })
}
$(function () // on document.ready() - Execute la boucle if quand la page entière est chargée
{
    if ($('table#data_bilan_eleve').length > 0)
    {
        InitializeSearch()
    }
    if ($('select#epreuve').length > 0)
    {
        DisplayBloc()
    }
})
$(document).ready(function() {
    /* A chaque fois que ça scroll */
    $(window).scroll( function(){
        /* On vérifie pour chaque élément de classe hideme sa position */
        $('.hideme').each( function(i){

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height() + 300;
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);
            }
        });
    });
});