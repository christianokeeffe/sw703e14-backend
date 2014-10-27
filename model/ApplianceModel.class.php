<?php
require_once "metadata/Appliance.class.php";

class ApplianceModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function getAppliance($id, $lang)
    {
        $result = $this->db->exec("SELECT $lang FROM appliances NATURAL JOIN translation WHERE id =  $id");
        return new Appliance($id, $result[0][$lang]);
    }

    function getAppliances($userID, $lang){
            $results = $this->db->exec(
            "SELECT appliances.id, name.$lang AS name, appliances.type AS type, appliances.energyConsumption, appliances.energyLabel, appliances.price
        FROM appliances
        INNER JOIN user_appliances
        ON appliances.id=user_appliances.applianceID  AND user_appliances.userID = $userID
        INNER JOIN translation AS name
        ON name.id = appliances.name
        INNER JOIN appliance_type
        ON appliances.type = appliance_type.typeID;");

            $appliances = array();

            foreach($results as $result)
            {
                $appliances[count($appliances)] = new Appliance($result["id"], $result["name"], $result["price"], $result["energyLabel"], $result["energyConsumption"], $result["type"], "");
            }
            return $appliances;
        }

        function getAllAppliances($lang){
            $results = $this->db->exec("SELECT appliances.id, name.$lang AS name, appliances.energyConsumption, appliances.energyLabel, appliances.price, type, selType.$lang
            FROM appliances
            INNER JOIN translation AS name
            ON name.id = appliances.name
			INNER JOIN (SELECT typeID, id, en, da FROM smartgrid.appliance_type INNER JOIN translation as name on name.id = appliance_type.typeID) AS selType ON selType.typeID = appliances.type");

            $appliances = array();

            foreach($results as $result)
            {
                $appliances[count($appliances)] = new Appliance($result["id"], $result["name"], $result["price"], $result["energyLabel"], $result["energyConsumption"], $result["type"], $result[$lang]);
            }
            return $appliances;
        }

        function getAllAppliancesByID($type,$lang){
            $allAppliances  = $this->getAllAppliances($lang);

            $appliances = array();
            foreach($allAppliances as $appliance)
            {
                if($appliance->type == $type)
                {
                    $appliances[count($appliances)] = new Appliance($appliance->id, $appliance->name, $appliance->price, $appliance->energyLabel, $appliance->energyConsumption, $appliance->type, $appliance->typeString);
                }
            }
            return $appliances;
        }
} 