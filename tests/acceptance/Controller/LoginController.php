<?php

namespace controllers;

use Codeception\Exception\ModuleException;
use Codeception\Step\Argument\PasswordArgument;
use \pages\MansTetPage;
use \pages\LoginPage;

class LoginController
{

    public function openLoginForm(\WebGuy $I)
    {
        $I->amOnUrl(MansTetPage::$URL);
        $I->see('Autorizācija');
        $I->see("Pieslēgties", MansTetPage::$submit);
        $I->click(MansTetPage::$submit);
    }

    public function seeLoginForm(\WebGuy $I)
    {
        $I->see("E-pasts vai lietotājvārds");
        $I->see("Parole");
        $I->see("Aizmirsu paroli", LoginPage::$passwordForgetButton);
        $I->see("Ienākt", LoginPage::$submit);
        $I->see("Pieslēgties ar internetbanku", LoginPage::$internetButton);
    }

    public function fillLoginData(\WebGuy $I)
    {
        $I->fillField(LoginPage::$usernameField, LoginPage::$username);
        $I->fillField(LoginPage::$passwordField, new PasswordArgument(LoginPage::$password));
    }

    public function fillLoginDataForElectricity(\WebGuy $I)
    {
        $I->fillField(LoginPage::$usernameField, LoginPage::$usernameForElectricityCest);
        $I->fillField(LoginPage::$passwordField, new PasswordArgument(LoginPage::$passwordForElectricityCest));
    }

    public function fillFakeLogin(\WebGuy $I)
    {
        $I->fillField(LoginPage::$usernameField, LoginPage::$fakeUsername);
    }

    public function fillFakePassword(\WebGuy $I)
    {
        $I->fillField(LoginPage::$passwordField, new PasswordArgument(LoginPage::$fakePassword));
    }

    public function loginSubmit(\WebGuy $I)
    {
        $I->click(LoginPage::$submit);
    }

    public function incompleteLoginDataNotification(\WebGuy $I)
    {
        $I->seeElementInDOM("//script[@src='/assets/js/form.scripts.js']");
    }

    public function incorrectLoginDataNotification(\WebGuy $I)
    {
        $I->see("Nepareizs lietotājvārds un/vai parole");
    }
}