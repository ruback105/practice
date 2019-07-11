<?php

namespace cests;

use controllers\LoginController;
use controllers\HeaderController;
use controllers\DashboardController;
use controllers\LogoutContoller;
use controllers\SectionController;

class BillVisibilityCest
{
    /**
     * @tr-suite 7
     * @tr-case 48
     */
    public function openLoginForm(\WebGuy $I)
    {

        //all controllers
        $loginController = new LoginController();
        $headerController = new HeaderController();
        $dashboardController = new DashboardController();
        $sectionController = new SectionController();
        $logoutController = new LogoutContoller();

        //login
        $loginController->openLoginForm($I);
        $loginController->seeLoginForm($I);
        $loginController->fillLoginData($I);
        $loginController->loginSubmit($I);

        //assert main page elements are visible
        $headerController->seeNavigationBar($I);
        $headerController->seeFirstLevelMenu($I);
        $dashboardController->seeDashboard($I);
        $dashboardController->billDashboardCheck($I);

        //check if bill dropdown ok and navigate to bill page
        $headerController->seeBillDropdown($I);
        $headerController->myBillClick($I);

        //check paid bills
        $headerController->seeNavigationBar($I);
        $sectionController->seeBillSection($I);

        //logout
        $logoutController->logout($I);
    }


}