<?php
require_once "./model/UserApplianceModel.class.php";
require_once "BaseController.php";

class UserApplianceController extends BaseController {

    function replaceUserAppliance($user_appliance)
    {
        $userApplianceModel = new UserApplianceModel($this->db);

        return $userApplianceModel->replaceUserAppliance($user_appliance);

    }
}