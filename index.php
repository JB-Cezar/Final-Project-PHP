<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/UserData.class.php");
require_once("./inc/Utilities/PDOClass.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc//Utility/Page.class.php");

session_start();
if(!empty($_GET)){
    if($_GET["logged"]=="out"){
        session_destroy();
    }
}

// html page
echo Page::htmlHeader("Final-Project");
if(isset($_SESSION["user"])){
    echo Page::header($_SESSION["user"]->getName());
}else{
    echo Page::header("SIGN IN");
}

// echo Page::truckList();
echo Page::truckListV2();
echo Page::about("Welcome to Flavor Central!", "Flavor Wheels is your culinary companion on the move, bringing an exciting world of flavors and tastes directly to your neighborhood. We are a passionate group of food enthusiasts dedicated to satisfying your cravings with our fleet of vibrant food trucks.","READ MORE");

echo Page::gallery();
echo Page::reviews();
echo Page::container();
echo Page::map();
echo Page::footer();

echo Page::htmlFooter();