<?php
// récupération de la classe mère afin de construire les filles
require_once "ticket.class.php";

//création de la fille Cinema en fonction de la mère Ticket
final class Theatre extends Ticket {

    public $_nom;
    public $_heureChoix;
    public $_entracte;

    //création du constructeur Théatre en fonction du parent Ticket
    public function __construct ($ticketDate, $placeChoix, $tarif, $nom, $heureChoix, $entracte)
    {
        parent::__construct($ticketDate, $placeChoix, $tarif) ; // utilisation du constructeur provenant de la classe mère
        // en d'autres termes on profite du constructeur qu'on a déjà écrit dans la classe mère et on l'enrichit ici
        $this->_nom = $nom ;
        $this->_heureChoix = $heureChoix ;
        $this->_entracte = $entracte ;
    }

        // création de l'affichage ticket concernant le cinema
    public function displayTheatre(){
        echo "<div class='ticketContain'><img src='img/ciseaux.png' alt='ciseau image decoupe' class='ciseaux'><h3>".$this->_nom.'</h3>'.
        '<img src="img/cinema.png" alt="image cinema et theatre" class="imgCinema"><br/>'.
        "Numéro Ticket : ".idTicket()."<br/>".
        "La pièce commencera à : ".$this->_heureChoix." heures<br>".
        "Le: ".$this->_ticketDate."<br>".
        "L'entracte est prévue à ".$this->_entracte." heures<br>".
        "Tarif : ".$this->_tarif." €<br></div>";
    }
    
}





?>