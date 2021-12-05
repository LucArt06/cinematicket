<?php

/*creation d'un fonction display qui permet sur la page index de faire apparaitre
les listes de films en fonction du choix film/cinéma
*/

function display()
{
    if ($_POST["cinemaTheatre"] === "cinema") {
        echo "<label for='filmChoix'>Selectionner votre Film :</label>
        <select name='nom' id='filmChoix'>
            <option>Venom</option>
            <option>Eiffel</option>
            <option>Les Eternels</option>
            <option>Resident Evil</option>
            <option>Star Wars</option>

        </select>
        <label for='heureChoix'>Selectionner votre Heure :</label>
        <select name='heureChoix' id='heureChoix'>
            <option value='19'>19 heures</option>
            <option value='21'>21 heures</option>
        </select>";
    } else {
        echo "<label for='pieceChoix'>Selectionner votre Pièce :</label>
        <select name='nom' id='pieceChoix'>
            <option>Cyrano de Bergerac</option>
            <option>Le Mysanthrope</option>
            <option>Le Malade imaginaire</option>
            <option>Hamlet</option>

        </select>
        <label for='heureChoix'>Selectionner votre Heure :</label>
        <select name='heureChoix' id='heureChoix'>
            <option value='19'>19 heures</option>
            <option value='21'>21 heures</option>
        </select>";
    }
}
