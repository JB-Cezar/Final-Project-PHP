<?php
require_once("./inc/Page.class.php");







// html page
echo Page::htmlHeader("Final-Project");

echo Page::header();
// echo Page::truckList();
echo Page::truckListV2();
echo Page::about();

echo Page::gallery();
echo Page::reviews();
echo Page::container();
echo Page::map();
echo Page::footer();

echo Page::htmlFooter();