<?php
require_once "metadata/Setting.class.php";

class SettingsModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function getSettingByPrefname($prefname)
    {
        $result = $this->db->exec("SELECT * FROM settings WHERE prefname = '$prefname'");

        return new Setting($result[0]['id'],$result[0]['userID'],$result[0]['prefname'],$result[0]['value']);
    }
}