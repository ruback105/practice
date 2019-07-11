<?php

namespace controllers;

use pages\MainPage;

class DashboardController
{
    //dashboard is visible
    public function seeDashboard(\WebGuy $I)
    {
        $I->scrollTo(MainPage::$billBlock);
        $I->scrollTo(MainPage::$suggestionBlock);
        $I->scrollTo(MainPage::$fastBlock);
        $I->scrollTo(MainPage::$helpBlock);
    }

    //check if bills are paid
    public function billDashboardCheck(\WebGuy $I)
    {
        $I->scrollTo(MainPage::$billBlock);
        try {
            $I->see(" Paldies, visi rēķini ir samaksāti! ");
        } catch (\Exception $e) {

        }
        $I->seeElement(MainPage::$billCheckButton);
    }
}