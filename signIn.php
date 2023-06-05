<?php

require_once("./inc/config.inc.php");
require_once("./inc/SignInPage.php");

echo SignInPage::htmlHeader();
echo SignInPage::signInMainContent();
echo SignInPage::htmlFooter();

