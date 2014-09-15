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
        $query = "SELECT $lang FROM appliances NATURAL JOIN translation WHERE id =  $id" or die("Error in the consult.." . mysqli_error($this->db));

        //execute the query.
        $result = $this->db->query($query);

        while($row = mysqli_fetch_array($result))
        {
            $appliance = new Appliance($id, $row[$lang]);
            return $appliance;
        }

    }
} 