<?php
require_once "./model/SettingsModel.class.php";
require_once "BaseController.php";

class SettingsController extends BaseController {

    function getSettingByPrefName($prefname)
    {
        $setting_model = new SettingsModel($this->db);
        return $setting_model->getSettingByPrefname($prefname);
    }
}