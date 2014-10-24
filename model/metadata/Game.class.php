<?php
class Game {
    var $userID;
    var $saveID;
    var $savings;
    var $score;
    var $date;
    var $dishes;
    var $laundry;
    var $hygiene;


    function __construct($saveID, $userID, $date, $savings, $score, $dishes, $laundry, $hygiene)
    {
        $this->saveID = $saveID;
        $this->userID = $userID;
        $this->date = $date;
        $this->savings = $savings;
        $this->score = $score;
        $this->dishes = $dishes;
        $this->laundry = $laundry;
        $this->hygiene = $hygiene;
    }
}

?>