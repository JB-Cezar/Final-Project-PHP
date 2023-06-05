<?php

require_once("./inc/TruckPage.php");

echo TruckPage::htmlHeader();
echo TruckPage::header();
echo TruckPage::truckMainContent();
echo TruckPage::footer();
echo TruckPage::htmlFooter();