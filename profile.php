<?php

require_once("./inc/config.inc.php");
require_once("./inc/SignInPage.php");
require_once("./inc/Utilities/PDOClass.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/ProfilePage.class.php");


//html presets
echo SignInPage::htmlHeader();
echo ProfilePage::navProfile();
echo ProfilePage::profile();
//html presets
echo SignInPage::htmlFooter();