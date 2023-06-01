<?php
require_once("./inc/Page.class.php");







// html page
echo Page::htmlHeader("Final-Project");

echo Page::header();
// echo Page::truckList();
echo Page::truckListV2();
echo Page::about("Welcome to Flavor Central!",'"Food Trucks" is your culinary companion on the move, bringing an exciting world of flavors and tastes directly to your neighborhood. We are a passionate group of food enthusiasts dedicated to satisfying your cravings with our fleet of vibrant food trucks.',"READ MORE");

echo Page::gallery();
echo Page::reviews();
echo Page::container();
echo Page::map();
echo Page::footer();

echo Page::htmlFooter();