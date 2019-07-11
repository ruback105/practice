<?php
namespace Controller;
use Page\MainPage;


class LogoutContoller
{
    public function logout(\WebGuy $I)
    {
        $I->scrollTo(MainPage::$tetLogo);
        $I->click(MainPage::$profile);
        $I->click(MainPage::$logout);
    }
}