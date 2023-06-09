<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/UserData.class.php");
require_once("./inc/Utilities/PDOClass.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/Utilities/SignInPage.php");
require_once("./inc/Utilities/HomePage.class.php");


if(!empty($_POST)){
    UserDAO::initDB();
    $userEmail = $_POST["email"];
    $checkUser = UserDAO::getUserByEmail($userEmail);
    if((gettype($checkUser) =="object") && (get_class($checkUser)=="UserData")){
        if($checkUser->verifyPass($_POST["password"])){
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["user"] = $checkUser;
            header("Location:profile.php");
            exit();
        }else{
            echo SignInPage::loginError();
        }
    }
}




echo SignInPage::htmlHeader();
echo SignInPage::signInMainContent();
echo SignInPage::htmlFooter();

