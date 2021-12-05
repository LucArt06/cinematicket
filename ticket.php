<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php
    //récupération des pages afin d'afficher les élémnts
    require_once "ticketCinema.class.php";
    require_once "ticketTheatre.class.php";
    require_once "choix.php";

    // vérification si les variables sont saisies :
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (
            isset($_POST['ticketDate']) && !empty($_POST['ticketDate'])
            && isset($_POST['placeChoix'])
            && isset($_POST['tarif'])
            && isset($_POST['nom'])
            && isset($_POST['heureChoix'])

        ) {
            $ticketDate = $_POST['ticketDate'];
            $placeChoix = $_POST['placeChoix'];
            $nom = $_POST['nom'];
            $tarif = $_POST['tarif'];
            $heureChoix = $_POST['heureChoix'];
        }

        //création de la fonction numero ticket unique (date mois + numéro random)
        function idTicket()
        {
            list($annee, $mois, $jour) = explode("-", $_POST['ticketDate']);
            return $annee . $mois . rand(0, 999);
        }
    }

    echo "<a href='index.php'><<<<-Retour au formulaire</a>";

    //creation d'un tableau mentionant pour les film, les salles et les ages minimums
    $film = array("Venom" => array("NewYork", 16), "Eiffel" => array("Paris 6", 10), "Les Eternels" => array("Gustave", 16), "Resident Evil" => array("du Démon", 18), "Star Wars" => array("Jedi", 12));

    $entracte = $_POST['heureChoix'] + 1;

    //création de l'affichage en fonction soit du théatre ou du cinema.
    if ($nom === "Venom") {
        $ticketCinema = new Cinema($ticketDate, $placeChoix, $tarif, $nom, $heureChoix, $film["Venom"][0], $film["Venom"][1]);
        $ticketCinema->displayFilm();
    } else if ($nom === "Eiffel") {
        $ticketCinema = new Cinema($ticketDate, $placeChoix, $tarif, $nom, $heureChoix, $film["Eiffel"][0], $film["Eiffel"][1]);
        $ticketCinema->displayFilm();
    } else if ($nom === "Les Eternels") {
        $ticketCinema = new Cinema($ticketDate, $placeChoix, $tarif, $nom, $heureChoix, $film["Les Eternels"][0], $film["Les Eternels"][1]);
        $ticketCinema->displayFilm();
    } else if ($nom === "Resident Evil") {
        $ticketCinema = new Cinema($ticketDate, $placeChoix, $tarif, $nom, $heureChoix, $film["Resident Evil"][0], $film["Resident Evil"][1]);
        $ticketCinema->displayFilm();
    } else if ($nom === "Star Wars") {
        $ticketCinema = new Cinema($ticketDate, $placeChoix, $tarif, $nom, $heureChoix, $film["Star Wars"][0], $film["Star Wars"][1]);
        $ticketCinema->displayFilm();
    } else {
        $ticketTheatre = new Theatre($ticketDate, $placeChoix, $tarif, $nom, $heureChoix, $entracte);
        $ticketTheatre->displayTheatre();
    }


    ?>


</body>

</html>