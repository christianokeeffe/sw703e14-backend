<?php
class Game {
    var $userID;
    var $saveID;
    var $savings;
    var $score;
    var $date;
    var $dishes;
    var $cleanClothes;
    var $hygiene;
    var $wetClothes;
    var $carBattery;


    function __construct($saveID, $userID, $date, $savings, $score, $dishes, $cleanClothes, $hygiene, $wetClothes, $carBattery)
    {
        $this->saveID = $saveID;
        $this->userID = $userID;
        $this->date = $date;
        $this->savings = $savings;
        $this->score = $score;
        $this->dishes = $dishes;
        $this->cleanClothes = $cleanClothes;
        $this->hygiene = $hygiene;
        $this->wetClothes = $wetClothes;
        $this->carBattery = $carBattery;

    }
}

?>