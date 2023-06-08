<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Employee.class.php");
require_once("./inc/Entities/Menu.class.php");
require_once("./inc/Entities/Picture.class.php");
require_once("./inc/Entities/Product.class.php");
require_once("./inc/Entities/Truck.class.php");
require_once("./inc/Utilities/DAO/MenuDAO.class.php");
require_once("./inc/Utilities/DAO/PictureDAO.class.php");
require_once("./inc/Utilities/DAO/ProductDAO.class.php");
require_once("./inc/Utilities/DAO/TruckDAO.class.php");
require_once("./inc/Utilities/DAO/EmployeeDAO.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/Page.class.php");
require_once("./inc/Utilities/HomePage.class.php");

$number = 1;

$option = $_GET['option']; //$_GET['opcao']

switch ($option) {
    case 1:
        $number = 1;
        break;
    case 2:
        $number = 2;
        break;
    case 3:
        $number = 3;
        break;
    case 4:
        $number = 4;
        break;
    case 5:
        $number = 5;
        break;
    case 6:
        $number = 6;
        break;
    default:
        $number = 1;
        break;
}

MenuDAO::startDb();
PictureDAO::startDb();
ProductDAO::startDb();
TruckDAO::startDb();

echo Page::pageHeader("Food Truck");
echo HomePage::header();
$newProduct = ProductDAO::getProductsByMenuId($number);
$newTruck = TruckDAO::getTruckById($number);
$newPicture = PictureDAO::getPictureByPictureId($number);
echo Page::truckPage($newProduct,$newTruck,$newPicture);
echo HomePage::footer();
echo Page::pageEnd();