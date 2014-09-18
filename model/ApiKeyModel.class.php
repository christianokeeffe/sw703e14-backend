<?php
require_once "/model/metadata/ApiKey.class.php";

class ApiKeyModel {
    var $db;

    function __construct($db_link)
    {
        $this->db = $db_link;
    }

    function getApiKey($public)
    {
        $results = $this->db->exec("SELECT * FROM api_keys WHERE public = '$public'");

        foreach($results as $row)
        {
            return new ApiKey($row["id"], $row["public"], $row["private"]);
        }
        return new ApiKey(null, null, null);
    }
} 