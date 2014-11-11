<?php
require_once "metadata/UserAppliance.class.php";

class UserApplianceModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }


    function replaceUserAppliance($userAppliance)
    {
        $this->db->exec("DELETE FROM user_appliances WHERE userID = '$userAppliance->id'");
        foreach($userAppliance->appliances as $applianceID)
        {
            $this->db->exec("INSERT INTO user_appliances (userID, applianceID) VALUES ('$userAppliance->id', '$applianceID')");
        }

        return $userAppliance;
    }

}