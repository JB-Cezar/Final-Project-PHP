<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entity/Employee.class.php");
require_once("./inc/Entities/UserData.class.php");
require_once("./inc/Utility/PDO.class.php");
require_once("./inc/Utility/EmployeeDAO.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/Utility/EmpList.class.php");
require_once("./inc/Utility/Page.class.php");

EmployeeDAO::startDB();
$empList = new EmpList();
$empList->setEmpList(EmployeeDAO::getAllEmployees());
$limit = 15;

session_start();
if(!empty($_GET) && isset($_SESSION["user"])){
    if($_GET["logged"]=="out"){
        session_destroy();
    }
}


echo Page::htmlHeader("About");
//html presets

if(isset($_SESSION["user"])){
    echo Page::header($_SESSION["user"]->getName());
}else{
    echo Page::header();
}
echo Page::aboutDesc();
echo Page::searchBar();
if(!empty($_GET['search'])){
    $empList->setEmpList(EmployeeDAO::findEmployees($_GET['search-figure']));
}

echo Page::figureContainer($empList->getEmpList(),$limit);
echo Page::about();
echo Page::footer();

//html presets
echo Page::htmlFooter();
