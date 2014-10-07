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
        "SELECT appliances.id, $lang, appliances.price, appliances.energyLabel, appliances.energyConsumption, appliance_type.type
		FROM appliances
		INNER JOIN user_appliances
			ON appliances.id = user_appliances.userID AND user_appliances.userID = $userID
		INNER JOIN translation 
			ON translation.id = appliances.name
		INNER JOIN appliance_type 
			ON appliances.type = appliance_type.typeID");
		
		$appliances = array();
        
        foreach($results as $result)
        {
            $appliances[count($appliances)] = new Appliance($result["id"], $result[$lang], $result["price"], $result["energyLabel"], $result["energyConsumption"]. $result["type"]);
        }
		
        $appliances[0]= "SELECT appliances.id, $lang, appliances.price, appliances.energyLabel, appliances.energyConsumption, appliance_type.type
        FROM appliances
        INNER JOIN user_appliances
            ON appliances.id = user_appliances.userID AND user_appliances.userID = $userID
        INNER JOIN translation 
            ON translation.id = appliances.name
        INNER JOIN appliance_type 
            ON appliances.type = appliance_type.typeID";
		return $appliances;
	}
} 