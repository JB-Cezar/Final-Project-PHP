<?php

require_once("./inc/config.inc.php");

require_once("./inc/Entities/Employee.class.php");
require_once("./inc/Entities/UserData.class.php");

require_once("./inc/Utilities/PDOClass.class.php");
require_once("./inc/Utilities/DAO/EmployeeDAO.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/Utilities/EmpList.class.php");
require_once("./inc/Utilities/HomePage.class.php");

EmployeeDAO::startDB();
$empList = new EmpList();
$empList->setEmpList(EmployeeDAO::getAllEmployees());
$limit = 15;

session_start();

if(!isset($_SESSION["user"])){
    session_destroy();
}


echo HomePage::htmlHeader("About");
//html presets

if(isset($_SESSION["user"])){
    echo HomePage::header($_SESSION["user"]->getName());
}else{
    echo HomePage::header();
}
echo HomePage::aboutDesc();
echo HomePage::searchBar();
if(!empty($_GET['search'])){
    $empList->setEmpList(EmployeeDAO::findEmployees($_GET['search-figure']));
}

echo HomePage::figureContainer($empList->getEmpList(),$limit);
echo HomePage::about();
echo HomePage::footer();

//html presets
echo HomePage::htmlFooter();
