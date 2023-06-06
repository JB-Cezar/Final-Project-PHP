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
require_once("./inc/TruckPage.php");


echo TruckPage::htmlHeader();
echo TruckPage::header();
echo TruckPage::truckMainContent();
echo TruckPage::footer();
echo TruckPage::htmlFooter();