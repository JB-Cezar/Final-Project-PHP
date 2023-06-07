<?php

class Page{

    public static function pageHeader(string $title):string{
        $htmlHeader = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.$title.'</title>
            <link rel="stylesheet" href="./css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head>
        <body>
        ';
        return $htmlHeader;
    }

    public static function pageHead(){
        $htmlHeader = '
            <header>
                <article>
                    <nav>
                        <img src="https://cdn-icons-png.flaticon.com/512/10344/10344222.png" alt="logo">
                        <ul>
                            <li><a href="#">Home <small>|</small></a></li>
                            <li><a href="#">About <small>|</small></a></li>
                            <li><a href="#">Sign Up <small>|</small></a></li>
                            <li><a href="#">Location <small>|</small></a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <a href="#">DELIVERY</a>
                    </nav>
                </article>
                <video src="video/pexels-kelly-2941127-2048x1080-24fps.mp4" autoplay muted loop></video>
            </header>
        ';
        return $htmlHeader;
    }
    public static function pageEnd() : string {
        $htmlPageEnd = '
        </body>
        </html>
        ';
        return $htmlPageEnd;
    }
    public static function truckPage($newProduct,$newTruck,$newPicture){
        $htmlTruckPage = '
            <main class="truck-main">
                '.self::truckTop($newTruck,$newPicture).'
                <section class="truck-about">
                   '.self::aboutTruckRow($newTruck).'
                </section>
                <section class="truck-menu">
                <h2>Menu</h2>
                <article>
                '.self::menuRow($newProduct).'
                </article>
            </section>
            '.self::truckInfoRow($newTruck).'
            </main>
        ';
        return $htmlTruckPage;
    }
    public static function truckTop(array $newTruck, $newPicture){
        $row = '';
        foreach($newTruck as $name){
            $row .='
            <section class="truck-top">
                    <aside>
                        <h1>'.$name->getTruckName().'</h1>
                        <p>~ '.$name->getCategory().' ~</p>
                    </aside>
                    <img class="'.$name->getLogo().'" alt="'.$name->getCategory().'">
                    <figure>
                    '.self::truckPicture($newPicture).'
                    </figure>
                </section>
            ';
        }
        return $row;
    }

    public static function truckPicture(array $newPicture){
        $row = '';
        foreach ($newPicture as $pic) {
            $row .= '
                <img src="'.$pic->getPicture().'" alt="">
            ';
        }
        return $row;
    }

    public static function aboutTruckRow(array $newTruck){
        $row = '';
        foreach($newTruck as $description){
            $row .= '
            <section>
                <h2>About us</h2>
                <p>
                   '.$description->getDescription().'
                </p>
            </section>
            ';
        }
        return $row;
    }


    public static function menuRow(array $newProduct){
        $rowList ='';
        foreach($newProduct as $singleProduct){
            $rowList .= '
                <figure>
                    <img src="'.$singleProduct->getPic().'" alt="'.$singleProduct->getProductName().'">
                    <figcaption>
                        <aside class="price">
                            <h3>'.$singleProduct->getProductName().'</h3>
                            <h4>$'.$singleProduct->getPrice().'</h4>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d325.31634149957466!2d-123.1204656!3d49.2852886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486714e32658949%3A0xb0eb86b45e1c7e00!2sMr.%20Shawarma%20Vancouver%20Shawarma%20and%20Cheesesteak%2C%20Burger%2C%20and%20Falafel!5e0!3m2!1sen!2sca!4v1685243852156!5m2!1sen!2sca" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </article>
                    <article class="info">
                        <aside>
                            <h2> Open</h2>
                            <p>'.$information->getOpenHour().':00</p>
                            <h2> close</h2>
                            <p>'.$information->getCloseHour().':00</p>
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
}