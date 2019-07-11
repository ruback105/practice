<?php


namespace controllers;


use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;
use pages\ElectricityServicesPage;
use pages\BillPage;
use PHPUnit\Framework\Exception;

class SectionController
{

    public function seeBillSection(\WebGuy $I)
    {

        try {
            $I->see("Neapmaksātie rēķini");
            $I->seeElement(BillPage::$billArePaid);
            $I->seeElement(BillPage::$billOK);
            $I->scrollTo(BillPage::$bill);
            $allBills = $I->grabMultiple(BillPage::$bill);
            $allBillMonthAndNUmber = $I->grabMultiple(BillPage::$billMonthAndNumber);
            $allBillPrice = $I->grabMultiple(BillPage::$billPrice);
            $allBillInspect = $I->grabMultiple(BillPage::$billInspect);
            $allBillStatusNOK = $I->grabMultiple(BillPage::$billStatusOK);

            $i = 0;
            foreach ($allBills as $oneBill) {
                $I->see($oneBill);
                $array = explode(" ", $allBillMonthAndNUmber[$i]);
                $I->see(BillPage::$payButton);
                $I->see($array[0] . " " . $array[1]);
                $I->see($array[2]);
                $I->see($allBillPrice[$i]);
                $I->see($allBillInspect[$i]);
                $I->see($allBillStatusNOK[$i]);
                $i++;
            }

        } catch (Exception $e) {
            $I->comment("There are no unpaid bill");
        }

        try {
            $I->see("Samaksātie rēķini");
            $I->seeElement(BillPage::$billArePaid);
            $I->seeElement(BillPage::$billOK);
            $I->scrollTo(BillPage::$bill);
            $allBills = $I->grabMultiple(BillPage::$bill);
            $allBillMonthAndNUmber = $I->grabMultiple(BillPage::$billMonthAndNumber);
            $allBillPrice = $I->grabMultiple(BillPage::$billPrice);
            $allBillInspect = $I->grabMultiple(BillPage::$billInspect);
            $allBillStatusOK = $I->grabMultiple(BillPage::$billStatusOK);

            $i = 0;
            foreach ($allBills as $oneBill) {
                $I->see($oneBill);
                $array = explode(" ", $allBillMonthAndNUmber[$i]);
                $I->dontSee(BillPage::$payButton);
                $I->see($array[0] . " " . $array[1]);
                $I->see($array[2]);
                $I->see($allBillPrice[$i]);
                $I->see($allBillInspect[$i]);
                $I->see($allBillStatusOK[$i]);
                $i++;
            }
        } catch (Exception $e) {

        }
    }

    public function seeElectricityObjects(\WebGuy $I)
    {
            $I->waitForText("Mani produkti");
            // $allObjects = $I->grabMultiple(ElectricityServicesPage::$object);
            $allButtonOpen = $I->grabMultiple(ElectricityServicesPage::$buttonOpen);
            $allAdresses = $I->grabMultiple(ElectricityServicesPage::$objectAdress);
            $allObjectTypesInHeader = $I->grabMultiple(ElectricityServicesPage::$objectTypeInHeader);
            $allObjectPlan = $I->grabMultiple(ElectricityServicesPage::$objectPlan);
            $allElectricityTables = $I->grabMultiple(ElectricityServicesPage::$electricityTableDefault);
            $allElectricityTablesPrice = $I->grabMultiple(ElectricityServicesPage::$electricityTablePrice);
            $allErrorButtons = $I->grabMultiple(ElectricityServicesPage::$errorButton);

            $i = 0;
            foreach ($allButtonOpen as $button) {
                $I->see($allAdresses[$i]);
                $I->see($allObjectTypesInHeader[$i]);
                $I->see($allObjectPlan[$i]);
                $I->click($button[1]);
                $i++;
            }

    }

}