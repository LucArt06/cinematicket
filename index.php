<?php

error_reporting(0);

// Récupération de la page choix permettant l'affichage dynamique des choix théatre et cinema
require_once "choix.php";


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guichet Cinema</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <div class="container">

        <!-- formulaire permettant le choix entre le cinema et le théatre -->
        <form action="" method="post" class="choixContain">
            <div>
                <input type="radio" id="cinema" name="cinemaTheatre" value="cinema" checked>
                <label for="cinema">Cinema</label>
                <input type="radio" id="theatre" name="cinemaTheatre" value="theatre">
                <label for="theatre">Théatre</label>
                <input type="submit" value="Choisir" class="btnChoix">
            </div>
        </form>


        <!-- formulaire concernant le choix des films et pièces -->
        <form action="ticket.php" method="post" class="formContain">

            <label for="ticketDate">Date du Ticket :</label>
            <input type="date" id="ticketDate" name="ticketDate" min="2021-12-06" value="2021-12-06" required>
            <label for="placeChoix">Place :</label>
            <select name="placeChoix" id="placeChoix">
                <option value="devant">Devant (1->30)</option>
                <option value="milieu">Au Milieu (31->60)</option>
                <option value="fond">Au Fond (61->90)</option>
            </select>
            <div>
                <input type="radio" id="adulte" name="tarif" value="15" checked>
                <label for="adulte">Adulte - 15 euros</label>
                <input type="radio" id="enfant" name="tarif" value="6">
                <label for="enfant">Enfant - 6 euros</label>
            </div>


            <?php

            //affichage dynamique concenant le théatre et le cinema (=> page choix.php)
            display();
            ?>

            <input type="submit" value="Acheter" class="btnAcheter">


        </form>



    </div>





</body>

</html>