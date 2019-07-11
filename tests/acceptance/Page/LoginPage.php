<?php

namespace pages;

class LoginPage
{
    //for successful login
    public static $username = "Skpk196@gmail.com";
    public static $usernameForElectricityCest = "janisjj";
    public static $usernameField = '#login_username';
    public static $password = "parole";
    public static $passwordForElectricityCest = "Janis!123";
    public static $passwordField = '#login_password';
    public static $submit = '#login_submit';
    public static $passwordForgetButton = "//a[@class='tet-link tet-color__tc600']";
    public static $internetButton = '#ibank_social_switch';

    //for unsuccessful login
    public static $fakeUsername = "example@example.com";
    public static $fakePassword = "12345";
    public static $errorBlock = "//span[@class='error-block input-error']";

}