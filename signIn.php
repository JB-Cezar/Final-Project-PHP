<?php

require_once("./inc/SignInPage.php");
require_once("./inc/SignUpPage.php");
// require_once("./inc/TruckPage.php");

echo SignInPage::htmlHeader();
echo SignInPage::signInMainContent();
echo SignInPage::htmlFooter();

