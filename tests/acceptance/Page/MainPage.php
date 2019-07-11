<?php

namespace pages;

class MainPage
{
    //navigation bar check
    public static $tetLogo = "//a[@class='navbar-brand']";
    public static $profile = "//a[@class='nav-link dropdown-toggle profile-switcher']";
    public static $logout = "//li[@class='nav-item logout']";
    public static $myNews = "//a[@class='nav-link d-none d-lg-block']";
    public static $language = "//a[@class='nav-link dropdown-toggle d-none d-sm-block']";

    //1.līmeņa izvelnes check
    public static $izvelne = "//li[@class='nav-item has-childs ng-tns-c2-2 ng-star-inserted']";
    public static $eshop = "//a[@href='https://www.lattelecomveikals.lv/']";

    //bill dropdown check
    public static $billNoBubble = "//a[contains(@class, 'nav-link has-bubble')]";
    public static $myBills = "//a[@href='/mytet/bills']";
    public static $billAutoPay = "//a[@href='https://mans-pretest.lattelecom.lv/myltc/Mans_Lattelecom/Mani_rekini/Automatiskais_maksajums/']";
    public static $billTypes = "//a[@href='/mytet/bills/reporting-mediums']";
    public static $billCheckButton = "//a[@class='tet-button tet-button--small tet-ripple js-tet-ripple tet-button--outlined']";

    //electricity dropdown check
    public static $electricityDropdownButton = "//a[@data-type='electricity']";
    public static $electricityServices = "//a[@href='https://mans-pretest.lattelecom.lv/myltc/Mans_Lattelecom/pakalpojumi/Elektribas_produkti/']";
    public static $meterReadings = "//a[@href='https://mans-pretest.lattelecom.lv/myltc/Mans_Lattelecom/Elektriba/Skaititaju_radijumi/']";
    public static $electricityOverview = "//a[@href='https://mans-pretest.lattelecom.lv/myltc/Mans_Lattelecom/Elektriba/Paterina_parskats/']";

    //dashboard check
    public static $suggestionBlock = "//div[@class='col-lg-6'][2]";
    public static $fastBlock = "//div[@class='row ng-star-inserted'][2]";
    public static $helpBlock = "//div[@id='help-block']";
    public static $billBlock = "//div[@class='content-block with-header'][1]";




}