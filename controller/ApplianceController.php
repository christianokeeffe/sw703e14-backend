<?php
require_once "/model/ApplianceModel.class.php";
require_once "BaseController.php";

class ApplianceController extends BaseController {

    function getAppliance($id, $lang = 'en')
    {
        $appliance = new ApplianceModel($this->db);
        return $appliance->getAppliance($id, $lang);
    }

    function getAppliances($lang = 'en')
    {
        $appliance = new ApplianceModel($this->db);
        return $appliance->getAppliances($lang);
    }
} 