<?php
require_once "/model/ApplianceModel.class.php";

class ApplianceController {
    var $db;

    function __construct($db_link)
    {
        $this->db = $db_link;
    }

    function getAppliance($id, $lang)
    {
        $appliance = new ApplianceModel($this->db);
        return $appliance->getAppliance($id, $lang);
    }
} 