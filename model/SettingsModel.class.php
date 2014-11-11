<?php
require_once "metadata/Setting.class.php";

class SettingsModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function verifySettings($userID, $settings)
    {
        $arr = array(
            array(
                "prefname" => "allow_discharge",
                "value" => "false",
                "found" => false
            ),
            array(
                "prefname" => "dischargeVal",
                "value" => "80",
                "found" => false
            )
        );

        foreach($settings as $setting)
        {
            $i = 0;
            while($i < count($arr) && $arr[$i]['prefname'] != $setting->prefname)
            {
                $i++;
            }
            if($i< count($arr))
            {
                $arr[$i]['found'] = true;
            }
        }

        $error = false;
        for($i = 0; $i < count($arr); $i++)
        {
            if($arr[$i]['found'] != true)
            {
                $error = true;
                $this->db->exec("INSERT INTO settings (userID,prefname,value) VALUES ($userID,'".$arr[$i]['prefname']."','".$arr[$i]['value']."')");
            }
        }

        if($error)
        {
            return $this->getSettings($userID);
        }
        else
        {
            return $settings;
        }
    }

    function formatResult($results)
    {
        $settings = array();
        foreach($results as $result)
        {
            $settings[count($settings)] = new Setting($result['id'],$result['userID'],$result['prefname'],$result['value']);
        }

        return $settings;
    }

    function getSettings($userID)
    {
        $results = $this->db->exec("SELECT * FROM settings WHERE userID = '$userID'");

        return $this->verifySettings($userID,$this->formatResult($results));
    }

    function setSetting($userID, $setting, $value)
    {
        $results = $this->db->exec("UPDATE settings SET value = '$value' WHERE userID = '$userID' && prefname = '$setting'");

        return true;
    }
}