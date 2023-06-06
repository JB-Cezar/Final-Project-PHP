<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/UserData.class.php");
require_once("./inc/Utilities/PDOClass.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/ProfilePage.class.php");
require_once("./inc/SignInPage.php");

session_start();
UserDAO::initDB();

if(!empty($_POST)){
    $updateAcc = new UserData();
    $updateAcc->setId($_SESSION["user"]->getId());
    $updateAcc->setName($_POST["name"]);
    $updateAcc->setAddress($_POST["address"]);
    $updateAcc->setEmail($_POST["email"]);
    $updateAcc->setPhone($_POST["phone"]);

    $pass = password_hash($_POST["password"],PASSWORD_DEFAULT);
    $updateAcc->setPassword($pass);
    $updateAcc->setPicture("askdjsakldsa.jpg");
    $updateAcc->setGender($_POST["gender"]);


    UserDAO::updateUser($updateAcc);
}

var_dump($_SESSION["user"]);
//html presets
echo SignInPage::htmlHeader();
echo ProfilePage::navProfile();
echo ProfilePage::profile();
//html presets
echo SignInPage::htmlFooter();