<?php

namespace pages;

class BillPage
{
    public static $billBlock = "//div[@class='content-block last ng-star-inserted']";
    public static $bill = "//div[@class='bill ng-star-inserted']";
    public static $billMonthAndNumber = "//div[@class='col-8 col-md-3']";
    public static $billMonth = "//span[@class='date d-block']";
    public static $billNumber = "//span[@class='number d-block']";
    public static $billInspect = "//a[@class='view d-none d-md-inline-block ng-star-inserted']";
    public static $billStatusOK = "//span[@class='duedate d-block paid ng-star-inserted']";
    public static $billStatusNOK = "//span[@class='duedate d-block unpaid ng-star-inserted']";
    public static $billPrice = "//span[@class='price d-inline-block ng-star-inserted']";
    public static $billArePaid = "//header[@class='border-0 ng-star-inserted']";
    public static $payButton = "//a[@class='tet-button tet-button--small ng-star-inserted']";
    public static $billOK = "//section[@class='text-center all-paid ng-star-inserted']";
    public static $billUnpaid = "Neapmaksātie rēķini";


}