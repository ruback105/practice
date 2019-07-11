<?php

namespace cests;

use \controllers\LoginController;
use \controllers\HeaderController;
use \controllers\LogoutContoller;
use \controllers\SectionController;

class ElectricityServiceCheckCest
{
    /*public function ElectricityServiceTest(\WebGuy $I)
    {
        //all controllers
        $loginController = new LoginController();
        $headerController = new HeaderController();
        $sectionController = new SectionController();
        $logoutController = new LogoutContoller();

        //login
        $loginController->openLoginForm($I);
        $loginController->seeLoginForm($I);
        $loginController->fillLoginDataForElectricity($I);
        $loginController->loginSubmit($I);

        //check if electricity dropdown ok and navigate to bill page
        $headerController->seeNavigationBar($I);
        $headerController->seeElectricityDropdown($I);
        $headerController->electricityServicesClick($I);

        //check electricity page ok
        $sectionController->seeElectricityObjects($I);

        //logout
        //$logoutController->logout($I);

    }*/
}