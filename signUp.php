<?php

require_once("./inc/config.inc.php");
require_once("./inc/SignUpPage.php");


echo signUpPage::htmlHeader();
//password length
if(strlen($_POST["password"]) < 8){ //pass length confirmation
    echo signUpPage::errorPassLength();
    echo signUpPage::signUpMainContent();
    echo signUpPage::htmlFooter();
    exit();
}else if($_POST["password"]!==$_POST["confirm-password"]){ //pass confirmation
    echo signUpPage::errorPass();
    echo signUpPage::signUpMainContent();
    echo signUpPage::htmlFooter();
    exit();
}else{
    echo signUpPage::signUpMainContent();
    echo signUpPage::htmlFooter();
}


print_r($_POST);

