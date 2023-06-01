<?php

require_once("./inc/Page.class.php");





echo Page::htmlHeader("About");
//html presets
echo Page::header();
echo Page::aboutDesc();

echo Page::about();
echo Page::footer();
//html presets
echo Page::htmlFooter();
