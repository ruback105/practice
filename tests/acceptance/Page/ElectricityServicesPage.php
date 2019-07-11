<?php


namespace pages;


class ElectricityServicesPage
{
        //check object header
        public static $objectAdress = "//div[@class='object_address']";
        public static $object = "//div[@class='object_opener']";
        public static $objectTypeInHeader = "//span[@class='text capitalise']";
        public static $objectPlan = "//div[@class='object_plan']";
        public static $buttonOpen = "//div[@class='button-open']";

        //check object container
        public static $objectTypeInContainer = "//div[@class='header plan-3']";
        public static $electricityTableDefault = "div[@class='eletricity-table default-large']";
        public static $errorButton = "//a[@class='button light']";
        public static $electricityTablePrice = "//div[@class='eletricity-table price-table']";

}