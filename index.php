<?php
require_once("./inc/Page.class.php");







// html page
echo Page::htmlHeader();

echo Page::header();
echo Page::about();
echo Page::truckList();
echo Page::gallery();
echo Page::container();
echo Page::reviews();
echo Page::map();
echo Page::footer();

echo Page::htmlFooter();