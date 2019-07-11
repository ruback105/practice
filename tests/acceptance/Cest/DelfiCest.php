<?php
//
//use PageObject\Delfi\MainPage as mainObj;
//use PageObject\Delfi\TastyPage as tastyObj;
//use PageObject\Delfi\findRec as recObj;
//use PageObject\Delfi\ingCheck as ingObj;
//
//class DelfiCest
//{
//    public function ingTest(\WebGuy $I)
//    {
//        //navigating to tasty
//        $mainPage = new mainObj;
//        $I->amOnUrl($mainPage::$URL);
//
//        try {
//          $I->click('Pieņemt un turpināt');
//        } catch (\Exception $e) {
//        }
//
//        $I->click($mainPage::$tasty);
//
//        //navigating to recipes
//        $tastyPage = new tastyObj;
//        $I->scrollTo($tastyPage::$rec, 0, -100);
//        $I->click($tastyPage::$rec);
//        $I->click('Visas receptes');
//
//        //choosing recipe
//        $recPage = new recObj;
//        $I->scrollTo($recPage::$recipe, 0, -100);
//        $I->click($recPage::$recClick);
//
//        //ckeck if ingredient has recipe
//        $ingPage = new ingObj;
//        $I->scrollTo($ingPage::$recName, 0, -100);
//        $temp = $I->grabTextFrom($ingPage::$recName);
//        $I->scrollTo($ingPage::$ingFind, 0, -100);
//        $array = $I->grabMultiple($ingPage::$ingFind, 'href');
//
//        foreach ($array as $elem) {
//         $I->amOnUrl($elem);
//         $I->seeInSource($temp);
//        }
//
//    }
//
//}
