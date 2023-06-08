<?php

require_once("./inc/config.inc.php");

require_once("./inc/Entities/UserData.class.php");
require_once("./inc/Utilities/PDOClass.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");

require_once("./inc/Utilities/HomePage.class.php");

session_start();

if(!isset($_SESSION["user"])){
    session_destroy();
}

// html page
echo HomePage::htmlHeader("Final-Project");
if(isset($_SESSION["user"])){
    echo HomePage::header($_SESSION["user"]->getName());
}else{
    echo HomePage::header();
}

// echo HomePage::truckList();
echo HomePage::truckListV2();
echo HomePage::about("Welcome to Flavor Central!", "Flavor Wheels is your culinary companion on the move, bringing an exciting world of flavors and tastes directly to your neighborhood. We are a passionate group of food enthusiasts dedicated to satisfying your cravings with our fleet of vibrant food trucks.","READ MORE");

echo HomePage::gallery();
echo HomePage::reviews();
echo HomePage::container();
echo HomePage::map();
echo HomePage::footer();

echo HomePage::htmlFooter();