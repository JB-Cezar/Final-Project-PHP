<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/UserData.class.php");
require_once("./inc/Utilities/PDOClass.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/Utilities/LoginVerification.class.php");
require_once("./inc/Utilities/SignUpPage.php");
require_once("./inc/Utilities/HomePage.class.php");

session_start();
LoginVerification::verify();
UserDAO::initDB();

if(!empty($_POST)){
    if(strlen($_POST["password"]) < 8){
        echo signUpPage::errorPassLength();
    }else if($_POST["password"]!==$_POST["confirm-password"]){
        echo signUpPage::errorPass();
    }else{
        $newAccount = new UserData();
        $newAccount->setName($_POST["name"]);
        $newAccount->setEmail($_POST["email"]);
        $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
        $newAccount->setPassword($password);
        UserDAO::insertUser($newAccount);
        header("Location: signIn.php");
        exit();
    }
}

echo signUpPage::htmlHeader();
echo signUpPage::signUpMainContent();
echo signUpPage::htmlFooter();

