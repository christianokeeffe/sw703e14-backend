<?php
require_once "./model/SettingsModel.class.php";
require_once "BaseController.php";

class SettingsController extends BaseController {

    function getSettings($userID)
    {
        $setting_model = new SettingsModel($this->db);
        return $setting_model->getSettings($userID);
    }

    function setSetting($userID, $setting, $value)
    {
        $setting_model = new SettingsModel($this->db);
        return $setting_model->setSetting($userID, $setting, $value);
    }
}