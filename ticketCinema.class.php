<?php

// récupération de la classe mère afin de construire les filles
require_once "ticket.class.php";

//création de la fille Cinema en fonction de la mère Ticket
final class Cinema extends Ticket {

    //data
    public $_nom;
    public $_heureChoix;
    public $_salle;
    public $_ageMin;


    //création du constructeur Cinema en fonction du parent Ticket
    public function __construct ($ticketDate, $placeChoix, $tarif, $nom, $heureChoix, $salle, $ageMin)
    {
        parent::__construct($ticketDate, $placeChoix, $tarif) ; // utilisation du constructeur provenant de la classe mère
        // en d'autres termes on profite du constructeur qu'on a déjà écrit dans la classe mère et on l'enrichit ici
        $this->_nom = $nom ;
        $this->_heureChoix = $heureChoix ;
        $this->_salle = $salle ;
        $this->_ageMin = $ageMin ;
    }

    // création de l'affichage ticket concernant le cinema
    public function displayFilm(){
        echo '<div class="ticketContain"><img src="img/ciseaux.png" alt="ciseau image decoupe" class="ciseaux"><h3>'.$this->_nom.'</h3>'.
        '<img src="img/cinema.png" alt="image cinema et theatre" class="imgCinema"><br/>'.
        "Numéro Ticket : ".idTicket()."<br/>".
        "Séance de : ".$this->_heureChoix." heures<br/>".
        "Du: ".$this->_ticketDate."<br/>".
        "Salle: ".$this->_salle."<br/>".
        "Vous etes situés ".$this->_placeChoix."<br/>".
        "Film pour plus de : ".$this->_ageMin." ans<br/>".
        "Tarif : ".$this->_tarif." €<br/></div>";
    }
    
}
