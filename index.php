<?php

require_once("./inc/config.inc.php");

require_once("./inc/Entities/UserData.class.php");
require_once("./inc/Utilities/PDOClass.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");

require_once("./inc/Utilities/HomePage.class.php");

session_start();

if(!isset($_SESSION["user"])){
    session_destroy();
}

// html page
echo HomePage::htmlHeader("Final-Project");

if(isset($_SESSION["user"])){
    echo HomePage::header($_SESSION["user"]->getName());
}else{
    echo HomePage::header();
}

echo HomePage::truckListV2();
echo HomePage::about("Welcome to Flavor Central!", "Flavor Wheels is your culinary companion on the move, bringing an exciting world of flavors and tastes directly to your neighborhood. We are a passionate group of food enthusiasts dedicated to satisfying your cravings with our fleet of vibrant food trucks.","READ MORE");

echo HomePage::gallery();
echo HomePage::reviews();
echo HomePage::container();
echo HomePage::map();

if(!empty($_POST)){
    echo HomePage::footer(HomePage::contact());

    $to = $_POST["email"];
    $subject = "Welcome to FLAVOUR WHEELS!";

    $message = "<b>Important Message introducing to FLAVOUR WHEELS</b>\n";
    $message .= "<p>
    1.The average person spends about six months of their life waiting for red traffic lights to turn green.<br>
    2.The worlds oldest piece of chewing gum is over 9,000 years old.<br>
    3.The most commonly lost item in the world is socks.<br>
    4.A group of cats is called a clowder, while a group of kittens is called a kindle.<br>
    5.The shortest war in history lasted only 38 to 45 minutes. It took place between Britain and Zanzibar in 1896.<br>
    6.A sneeze travels at an average speed of 100 miles per hour.<br>
    7.The dot over the letter i is called a tittle.<br>
    8.The average person will walk past 36 murderers in their lifetime.<br>
    9.The scientific term for brain freeze is sphenopalatine ganglioneuralgia.<br>
    10.Bananas are berries, while strawberries are not.<br>
    11.The average person swallows about eight spiders in their sleep throughout their lifetime (although this is widely believed to be a myth).<br>
    12.The sentence The quick brown fox jumps over the lazy dog contains every letter of the alphabet.<br>
    13.The longest English word without a vowel is rhythm.<br>
    14.The average human produces about 25,000 quarts of saliva in their lifetime.<br>
    15.Penguins have an organ above their eyes that converts seawater into freshwater.<br></p>";

    $message .= "<p><em>Thank you for wasting your time reading this</em></p>";

    $header = "From:mianare.99.anaya@gmail.com \n";
    $header .= "MIME-Version: 1.0\n";
    $header .= "Content-type: text/html\n";

    $email = mail($to,$subject,$message,$header);
    if(!$email){
        echo HomePage::notsent();
    }

}else{
    echo HomePage::footer(HomePage::contact());
}
