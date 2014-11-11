<?php
class Graph {
    var $saveID;
    var $userID;
    var $score;
    var $date;

    function __construct($saveID, $userID, $score, $date)
    {
        $this->saveID = $saveID;
        $this->userID = $userID;
        $this->score = $score;
        $this->date = $date;
    }
}

?>