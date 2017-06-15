/**
 * Created by Kevin on 17/05/2017.
 */

/* Méthode de Foundation permettant d'afficher la sidebar */
$(document).foundation()
/* Plugin pour la date, changement du format (car nativement calendrier EN */
$('.fdatepicker').fdatepicker({
    language: 'fr',
    format: 'dd/mm/yyyy'
});
/* Exécution de la méthode select2 permettant une recherche dans un select */
$('.select2').select2()
/* Exécution de la méthode confirm du plugin confirm.js permettant d'ouvrir un modal et afficher deux bouttons permettant de trigger 2 evenements */
$('.blabla').confirm({
    title: 'What is up?',
    content: 'Here goes a little content',
    type: 'red',
    buttons: {
        ok: {
            text: "ok!",
            keys: ['enter'],
            action: function(){
                console.log('the user clicked confirm')
            }
        },
        cancel: function(){
            console.log('the user clicked cancel')
        }
    }
});
/* Permet d'exécuter sur toute la page la méthode scrollUp() permettant alors lorsque la page est longue, de pouvoir faire un back to top */
$(function(){
    $.scrollUp()
});
/* Utilisation du plugin permettant un rating des notes, en choisissant comme design 'bars-movie' (fichier css) rating pour les select */
$(function() {
    $('#example').barrating({
        theme: 'bars-movie'
    });
    $('#example2').barrating({
        theme: 'bars-movie'
    });
});
let inc = 2
// Au clic de "Add cpt"
$("#addCpt").click(function() {
    let elem = $("<input/>",{
        type: "text",
        name: "competence[]",
        id: inc++,
        placeholder:"Votre nouvelle compétence..."
    })
    let removeLink = $("<button>").html("Retirer").addClass("button columns row ").click(function(){
        // Supprime l'input text
        $(elem).remove()
        // Supprime le bouton supprimer
        $(this).remove()
    })
    // Permet de lier le remove à l'input, mettre le content dans la div divcpt
    $("#divCpt").append(elem).append(removeLink)
})
/* Fonction permettant de rechercher une compétence en particulier */
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
$('#sMatiere').change(GBilanEleve);

function GBilanEleve(){

   console.log($('#sMatiere').val())
    $.ajax({
        type : 'POST', // Le type de la requête HTTP, ici devenu POST

        url : "bilan_eleve_test",


        dataType : 'html',
        success: function (data) {


           alert(data)
        }
    });
}



/* Fonction qui affiche div ou la cache si la value est différente */
function DisplayBloc() {
    let inputDisplay
    inputDisplay = document.querySelector('#epreuve')
    inputDisplay.addEventListener('change', () => {
        /* boucle ternaire */
        let style = inputDisplay.value == "BTS_SN" ? 'block' : 'none'
        document.querySelector('#bloc_eval').style.display = style
    })
}
$(function () // on document.ready() - Execute la boucle if quand la page entière est chargée
{
    /* Permet d'exécuter une fonction si le selecteur est trouvé */
    if ($('table#data_bilan_eleve').length > 0)
    {
        InitializeSearch();

        $('#sMatiere').change(GBilanEleve);
    }
    if ($('select#epreuve').length > 0)
    {
        DisplayBloc()
    }
})
$(document).ready(() => {
    /* A chaque fois que ça scroll */
    $(window).scroll( function(){
        /* On vérifie pour chaque élément de classe hideme sa position */
        $('.hideme').each( function(i){
            let bottom_of_object = $(this).offset().top + $(this).outerHeight()
            let bottom_of_window = $(window).scrollTop() + $(window).height() + 200
            /* Si l'objet est complètement visible dans la fenêtre, on la rend visible */
            if( bottom_of_window > bottom_of_object && $('div').is('#bloc_accueil') ){
                $(this).animate({'opacity':'1'},500)
            }
        })
    })
    $("#checkbox").click(function(){
        if($("#checkbox").is(':checked') ){
            $("#etudiant > option").prop("selected","selected")
            $("#etudiant").trigger("change")
        }else{
            $("#etudiant > option").prop("selected", false)
            // permet de déclencher l'event change du select appelé étudiant
            $("#etudiant").trigger("change")
        }
    })
})