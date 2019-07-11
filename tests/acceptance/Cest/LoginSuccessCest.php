<?php

namespace cests;

use controllers\LoginController;
use controllers\HeaderController;
use controllers\DashboardController;
use controllers\LogoutContoller;

class LoginSuccessCest
{
    /**
     * @tr-suite 7
     * @tr-case 46
     */
    public function LoginSuccessfulTest(\WebGuy $I)
    {
        //all controllers
        $loginController = new LoginController();
        $headerController = new HeaderController();
        $dashboardController = new DashboardController();
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

        //logout
        $logoutController->logout($I);

    }
}