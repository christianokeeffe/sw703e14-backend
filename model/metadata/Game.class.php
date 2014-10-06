<?php
class User {
    var $userID;
    var $saveID;
    var $savings;
    var $score;
    var $date;


    function __construct($saveID, $userID, $date, $savings, $score)
    {
        $this->saveID = $saveID;
        $this->userID = $userID;
        $this->date = $date;
        $this->savings = $savings;
        $this->score = $score;
    }
}

?>