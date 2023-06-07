<?php

class TruckPage{

    public static function htmlHeader(){
        $htmlHeader = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <link rel="stylesheet" href="/css/style.css">
            <title>final-project</title>
        </head>
        <body>';
        return $htmlHeader;
    }
    public static function header(){
        $header = '
        <header id="header">
            <article>
                <nav>
                    <a href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/10344/10344222.png" alt="logo">
                    </a>
                    <ul>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="#truckList">TRUCKS</a></li>
                        <li><a href="#location">DINE IN</a></li>
                        <li><a href="calendar.php">CALENDAR</a></li>
                        <li><a href="#home-footer">CONTACT</a></li>
                    </ul>
                    <a href="#">PICK-UP & DELIVERY</a>
                </nav>
            </article>
            <video src="./video/pexels-kelly-2941127-2048x1080-24fps.mp4" autoplay muted loop></video>
        </header>';
        return $header;
    }

    public static function truckMainContent($newTruck,$newMenu, $newPicture, $newProduct){
        $truckMainContent = '<main class="truck-main">';
        $truckMainContent.= self::truckTopRow($newTruck,$newPicture);
        $truckMainContent.= self::truckAboutRow($newTruck);
        $truckMainContent.= self::truckMenuRow($newProduct,$newTruck);
        $truckMainContent.= self::truckInfoRow($newTruck);
        $truckMainContent.= '</main>';

        return $truckMainContent;
    }
    public static function truckTopRow(array $newTruck,$newPicture){
        $row = '';
        foreach($newTruck as $truck){
            $row .= '
            <section class="truck-top">
                <aside>
                    <h1>'.$truck->getTruckName().'</h1>
                    <p>'.$truck->getCategory().'</p>
                </aside>
                <img class="'.$truck->getLogo().'" alt="mexican">
                '.self::truckPic($newPicture).'

            </section>
            ';
        }
        return $row;
    }
    public static function truckPic(array $newPicture){
        $row = '';
        foreach($newPicture as $picture){
            $row .= '
            <figure>
                <img src="'.$picture->getPicture().'" alt="">
            </figure>
            ';
        }
        return $row;
    }
    public static function truckAboutRow( array $newTruck){
        $row = '';
        foreach($newTruck as $description){
            $row .= '
            <section class="truck-about">
                <section>
                    <h2>About us</h2>
                    <p>
                        '.$description->getDescription().'
                    </p>
                </section>
            </section>
            ';
        }
        return $row;
    }
    public static function truckMenuRow(array $newTruck,$newProduct){
        $row = '';
        foreach($newTruck as $category){
            $row .='
            <section class="truck-menu">
                <h2>'.$category->getCategory().'</h2>
                <article>
                    '. self::menuRow($newProduct).'
                </article>
            </section>
            ';
        }
        return $row;
    }

    public static function menuRow( array $newProduct){
        $rowList ='';
        foreach($newProduct as $singleProduct){
            $rowList .= '
                <figure>
                    <img src="'.$singleProduct->getPic().'" alt="'.$singleProduct->getProductName().'">
                    <figcaption>
                        <aside class="price">
                            <h3>'.$singleProduct->getProductName().'</h3>
                            <p>'.$singleProduct->getPrice().'</p>
                        </aside>
                        <p>
                            '.$singleProduct->getDescription().'
                        </p>
                    </figcaption>
                </figure>
            ';
        }
        return $rowList;
    }
    public static function truckInfoRow(array $newTruck){
        $row = '';
        foreach($newTruck as $information){
            $row='
            <section class="truck-info">
                <section>
                    <article class="location">
                        <h2>Location</h2>
                        <address>'.$information->getAddress().'</address>
                    </article>
                    <article class="info">
                        <aside>
                            <h2> Open</h2>
                            <p>'.$information->getOpenHour().'</p>
                            <h2> close</h2>
                            <p>'.$information->getCloseHour().'</p>
                        </aside>
                        <aside>
                            <h2>Day off</h2>
                            <p>'.$information->getDayOff().'</p>
                        </aside>
                        <aside class="truck-contact">
                            <h2>Contact</h2>
                            <a href="tel">'.$information->getPhoneNumber().'</a>
                            <a href="#">'.$information->getEmail().'</a>
                        </aside>
                    </article>
                </section>
            </section>
            ';
        }
        return $row;
    }

    public static function footer(){
        $footer = '
        <footer id="home-footer">
        <ul>
            <li><a href="#">Accessibility</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
        </ul>
        <a href="#header">
            <img src="./img/food-truck.png" alt="logo-2">
        </a>
        <ul class="social-media">
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
        </ul>
        </footer>';
        return $footer;
    }

    public static function htmlFooter(){
        $htmlFooter = '</body>
        </html>';
        return $htmlFooter;
    }


}