/**
 * Created by Kevin on 17/05/2017.
 */

function createElement() {

    let tailleMini = 4
    let text = document.querySelector('.autoCreate')
    let container = document.querySelector('.container_cpt')
    text.addEventListener('keyup', () =>  {
        let taille = document.querySelector('.autoCreate').value
        if (taille.length == tailleMini)
        {
            let input = document.createElement("input")
            input.type = "text"
            input.className = "autoCreate"
            input.id = "1"
            //alert(taille.length)
            document.body.appendChild(input, container)
        }

    })
}

createElement()


