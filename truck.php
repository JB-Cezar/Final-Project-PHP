<?php

require_once("./inc/TruckPage.php");
require_once("./inc/Utilities/PDO.class.php");

echo TruckPage::htmlHeader();
echo TruckPage::header();
echo TruckPage::truckMainContent();
echo TruckPage::footer();
echo TruckPage::htmlFooter();