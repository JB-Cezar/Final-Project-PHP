<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/UserData.class.php");
require_once("./inc/Utilities/PDOClass.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/Utilities/ProfilePage.class.php");
require_once("./inc/Utilities/SignInPage.php");
require_once("./inc/Utilities/HomePage.class.php");

session_start();
UserDAO::initDB();
date_default_timezone_set("America/Vancouver");
$picSrc = "user_img/";

if(!empty($_POST)){
    $updateAcc = new UserData();
    $updateAcc->setId($_SESSION["user"]->getId());
    if (!empty($_POST["name"])) {
        $updateAcc->setName($_POST["name"]);
    } else {
        $updateAcc->setName($_SESSION["user"]->getName());
    }
    
    if (!empty($_POST["address"])) {
        $updateAcc->setAddress($_POST["address"]);
    } else {
        $updateAcc->setAddress($_SESSION["user"]->getAddress());
    }
    
    if (!empty($_POST["email"])) {
        $updateAcc->setEmail($_POST["email"]);
    } else {
        $updateAcc->setEmail($_SESSION["user"]->getEmail());
    }
    
    
    if (!empty($_POST["phone"])) {
        $updateAcc->setPhone($_POST["phone"]);
    } else {
        $updateAcc->setPhone($_SESSION["user"]->getPhone());
    }
    
    if (!empty($_POST["gender"])) {
        $updateAcc->setGender($_POST["gender"]);
    } else {
        $updateAcc->setGender($_SESSION["user"]->getGender());
    }

    $pass = password_hash($_POST["password"],PASSWORD_DEFAULT);

    if (!empty($_POST["password"])) {
        $updateAcc->setPassword($pass);
    } else {
        $updateAcc->setPassword($_SESSION["user"]->getPassword());
    }

    if(!empty($_FILES)){
        $imgLink = explode(".",$_FILES["profilePic"]["name"]);
        $ms = floor(microtime(true)*1000);
        $currentDate = date("H-i-s-$ms-Y-m-d");
        $imgString = ''.$currentDate.'-'.$_SESSION["user"]->getName().'';
    
        $fileName = $imgString.".".$imgLink[count($imgLink)-1];
        $picContainer = $picSrc . $fileName;
    
        move_uploaded_file($_FILES["profilePic"]["tmp_name"],$picContainer);
        $updateAcc->setPicture($picContainer);
    
    }
    
    UserDAO::updateUser($updateAcc);
    header("Location: signIn.php");
    exit();
}



//html presets
echo SignInPage::htmlHeader();
echo ProfilePage::navProfile(
    $_SESSION["user"]->getAddress()
);
echo ProfilePage::profile(
    $_SESSION["user"]->getPicture(),
    $_SESSION["user"]->getName()
);
echo HomePage::footer();
//html presets
echo SignInPage::htmlFooter();