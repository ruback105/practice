<?php
//
//use PageObject\Ortus\LoginPage as obj;
//use \Codeception\Step\Argument\PasswordArgument;
//use PageObject\Ortus\MainPage as mainObj;
//
//class OrtusCest
//{
//    public function markTest(\WebGuy $I)
//    {
//        //login
//        $login = new obj;
//        $obj = new mainObj;
//
//        $I->amOnUrl($login::$URL);
//        $I->fillField($login::$usernameField, $login::$usenname);
//        $I->fillField($login::$passwordField, new PasswordArgument($login::$password));
//        $I->click($login::$submit);
//        $I->see('Artūrs Puško');
//
//        //look for lessons
//        $I->click('Studentiem');
//        $I->click('Studiju informācija');
//        $I->click('Mācības');
//        $I->scrollTo($obj::$table, 0, -100);
//        $lessons = $I->grabMultiple($obj::$allLessons);
//        $marks = $I->grabMultiple($obj::$allMarks);
//
//        //print all lessons
//        $i = 1;
//        foreach ($lessons as $lesson) {
//            if (($i + 2) % 3 == 0)
//            {
//                echo $lesson . '  ' . $marks[$i-1]. "\n";
//            }
//            $i++;
//        }
//
//    }
//}
