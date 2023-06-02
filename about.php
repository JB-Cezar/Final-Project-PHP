<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entity/Employee.class.php");
require_once("./inc//Utility/Page.class.php");





echo Page::htmlHeader("About");
//html presets

echo Page::header();
echo Page::aboutDesc();
echo Page::searchBar();

echo Page::about();
echo Page::footer();

//html presets
echo Page::htmlFooter();
