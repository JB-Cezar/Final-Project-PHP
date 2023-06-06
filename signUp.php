<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/UserData.class.php");
require_once("./inc/Utilities/PDOClass.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/Utilities/LoginVerification.class.php");
require_once("./inc/SignUpPage.php");

session_start();
LoginVerification::verify();
UserDAO::initDB();

echo signUpPage::htmlHeader();
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
    if(!empty($_POST)){
        $newAccount = new UserData();
        $newAccount->setName($_POST["name"]);
        $newAccount->setEmail($_POST["email"]);
        $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
        $newAccount->setPassword($password);
        UserDAO::insertUser($newAccount);
        header("Location: signIn.php");
        exit();
    }
    echo signUpPage::signUpMainContent();
    echo signUpPage::htmlFooter();
}


