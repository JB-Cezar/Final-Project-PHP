<?php

require_once("./inc/SignInPage.php");
// require_once("./inc/SignUpPage.php");

echo SignInPage::htmlHeader();
// echo SignUpPage::htmlHeader();
echo SignInPage::signInMainContent();
// echo signUpPage::signUpMainContent();
echo SignInPage::htmlFooter();
// echo SignUpPage::htmlFooter();

