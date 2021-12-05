<?php

//création de la classe mère 

abstract class Ticket {

    protected $_ticketDate ;
    protected $_placeChoix;
    protected $_tarif;


    public function __construct($ticketDate, $placeChoix, $tarif){
        $this->_ticketDate = $ticketDate;
        $this->_placeChoix = $placeChoix;
        $this->_tarif = $tarif;

        return $ticketDate;

    }

}


?>