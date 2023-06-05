<?php


require_once("./inc/SignUpPage.php");

echo SignUpPage::htmlHeader();
echo signUpPage::signUpMainContent();
echo SignUpPage::htmlFooter();

