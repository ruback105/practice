<?php

namespace cests;

use \controllers\LoginController;

class LoginUnsuccessCest
{
    /**
     * @tr-suite 7
     * @tr-case 49
     */
    public function LoginUnsuccessfulTest(\WebGuy $I)
    {
        //all controllers
        $loginController = new LoginController();

        //login submit without data
        $loginController->openLoginForm($I);
        $loginController->seeLoginForm($I);
        $loginController->loginSubmit($I);
        $loginController->incompleteLoginDataNotification($I);

        //login submit with fake login
        $loginController->fillFakeLogin($I);
        $loginController->loginSubmit($I);
        $loginController->incompleteLoginDataNotification($I);

        //login submit with fake login and password
        $loginController->fillFakePassword($I);
        $loginController->loginSubmit($I);
        $loginController->incorrectLoginDataNotification($I);

    }
}