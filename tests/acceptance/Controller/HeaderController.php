<?php
namespace controllers;
use \pages\MainPage;
//include "tests\acceptance\pages\MainPage.php";

class HeaderController
{

    //first level menu is visible
    public function seeFirstLevelMenu(\WebGuy $I)
    {
        $I->scrollTo(MainPage::$tetLogo);
        $I->see("Rēķini", MainPage::$izvelne);
        $I->see("Pakalpojumi", MainPage::$izvelne);
        $I->see("Elektrība");
        $I->see("Lojalitātes programma", MainPage::$izvelne);
        $I->seeElement(MainPage::$eshop);
    }

    //navigation bar is visible
    public function seeNavigationBar(\WebGuy $I)
    {
        try {
            $I->waitForElement(MainPage::$tetLogo, 30);
        } catch (\Exception $e) {
        }
        $I->scrollTo(MainPage::$tetLogo);
        $I->seeElement(MainPage::$profile);
        $I->seeElement(MainPage::$myNews);
        $I->seeElement(MainPage::$language);

    }

    //bill dropdown is visible
    public function seeBillDropdown(\WebGuy $I)
    {
        $I->scrollTo(MainPage::$tetLogo);
        $I->dontSee("Rēķini", MainPage::$billNoBubble);
        $I->click("Rēķini", MainPage::$izvelne);
        $I->see(" Mani rēķini ", MainPage::$myBills);
        $I->see(" Automātiskā rēķinu apmaksa "/*, MainPage::$billAutoPay*/);
        $I->see(" Rēķinu saņemšanas veidi ", MainPage::$billTypes);

    }

    //navigating to bill page
    public function myBillClick(\WebGuy $I)
    {
        $I->click(MainPage::$myBills);
    }

    //electricity dropdown is visible
    public function seeElectricityDropdown(\WebGuy $I)
    {
        $I->scrollTo(MainPage::$tetLogo);
        $I->click("Elektrība");
        $I->see("Elektrības pakalpojumi", MainPage::$electricityServices);
        $I->see("Skaitītāju rādījumi", MainPage::$meterReadings);
        $I->see("Elektrības pārskats", MainPage::$electricityOverview);
    }

    //navigate to electricity page
    public function electricityServicesClick (\WebGuy $I) {
        $I->click(MainPage::$electricityServices);
    }
}