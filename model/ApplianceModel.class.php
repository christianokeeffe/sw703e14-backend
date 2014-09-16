<?php
require_once "/model/metadata/Appliance.class.php";

class ApplianceModel {
    var $db;

    function __construct($db_link)
    {
        $this->db = $db_link;
    }

    function getAppliance($id, $lang)
    {
        $result = $this->db->exec("SELECT $lang FROM appliances NATURAL JOIN translation WHERE id =  $id");
        return new Appliance($id, $result[0][$lang]);
    }

    function getAppliances($lang)
    {
        $results = $this->db->exec("SELECT id, $lang FROM appliances NATURAL JOIN translation");

        $appliances = array();
        foreach($results as $result)
        {
            $appliances[count($appliances)] = new Appliance($result["id"], $result[$lang]);
        }

        return $appliances;
    }
} 