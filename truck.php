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

ProductDAO::startDb();
echo Page::pageHeader("test");
echo Page::pageHead();
$newMenu = ProductDAO::getProductsByMenuId(2);
echo Page::truckPage($newMenu);
echo Page::pageEnd();
