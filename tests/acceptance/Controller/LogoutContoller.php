<?php
namespace controllers;
use \pages\MainPage;

//include "tests\acceptance\pages\MainPage.php";

class LogoutContoller
{
    public function logout(\WebGuy $I)
    {
        $I->scrollTo(MainPage::$tetLogo);
        $I->click(MainPage::$profile);
        $I->click(MainPage::$logout);
    }
}