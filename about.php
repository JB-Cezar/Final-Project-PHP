<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entity/Employee.class.php");
require_once("./inc/Utility/PDO.class.php");
require_once("./inc/Utility/EmployeeDAO.class.php");
require_once("./inc/Utility/EmpList.class.php");
require_once("./inc/Utility/Page.class.php");

EmployeeDAO::startDB();

$limit = 12;

echo Page::htmlHeader("About");
//html presets

echo Page::header();
echo Page::aboutDesc();
echo Page::searchBar();
echo Page::figureContainer(EmployeeDAO::getAllEmployees(),$limit);
echo Page::about();
echo Page::footer();

//html presets
echo Page::htmlFooter();
