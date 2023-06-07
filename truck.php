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
require_once("./inc/Utilities/PDOService.class.php");
// require_once("./inc/Utilities/TruckPage.php");
require_once("./inc/Utilities/Page.class.php");

MenuDAO::startDb();
PictureDAO::startDb();
ProductDAO::startDb();
TruckDAO::startDb();

// echo TruckPage::htmlHeader();
// echo TruckPage::header();
// echo TruckPage::truckMainContent();
// echo TruckPage::footer();
// echo TruckPage::htmlFooter();

echo Page::pageHeader("Food Truck");
echo Page::pageHead();
$newProduct = ProductDAO::getProductsByMenuId(3);
$newTruck = TruckDAO::getTruckById(3);
$newPicture = PictureDAO::getPictureByPictureId(3);
echo Page::truckPage($newProduct,$newTruck,$newPicture);
echo Page::pageEnd();