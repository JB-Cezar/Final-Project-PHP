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
require_once("./inc/Uilities/Page.class.php");

echo Page::pageHeader("test");
echo Page::pageHeade();
echo Page::mainContent();
echo Page::pageEnd();
