<?php
require_once "./model/ApplianceModel.class.php";
require_once "BaseController.php";

class ApplianceController extends BaseController {

    function getAppliance($userID, $lang = 'en')
    {
        $appliance = new ApplianceModel($this->db);
        return $appliance->getAppliance($userID, $lang);
    }

    function getAppliances($userID, $lang = 'en')
    {
        $appliance = new ApplianceModel($this->db);
        return $appliance->getAppliances($userID,$lang);
    }
} 