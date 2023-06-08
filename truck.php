<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Employee.class.php");
require_once("./inc/Entities/Menu.class.php");
require_once("./inc/Entities/Picture.class.php");
require_once("./inc/Entities/Product.class.php");
require_once("./inc/Entities/Truck.class.php");
require_once("./inc/Entities/User.class.php");
require_once("./inc/Uilities/PDOService.class.php");
require_once("./inc/Uilities/DAO/MenuDAO.class.php");
require_once("./inc/Uilities/DAO/ProductDAO.class.php");
require_once("./inc/Uilities/DAO/EmployeeDAO.class.php");
require_once("./inc/Uilities/DAO/PictureDAO.class.php");
require_once("./inc/Uilities/DAO/TruckDAO.class.php");
require_once("./inc/Uilities/DAO/UserDAO.class.php");
require_once("./inc/Uilities/Page.class.php");

$number = 1; 

$option = 2; //$_GET['opcao']

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
        $number = 7; 
        break;
    default:
        $number = 1; 
        break;
}

ProductDAO::startDb();
EmployeeDAO::startDb();
echo Page::pageHeader("test");
echo Page::pageHead();
$employees = EmployeeDAO::getEmployeeByTruckId($number);
$newProduct = ProductDAO::getProductsByMenuId($number);
echo Page::truckPage($newProduct, $employees);
echo Page::pageEnd();
