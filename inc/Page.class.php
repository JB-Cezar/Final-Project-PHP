<?php

class Page{
    //html presets
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
            <title>final-project</title>
        </head>
        <body>';
        return $htmlHeader;
    }

    public static function header(){
        $header = '
        <header>
            <article>
                <nav>
                    <a href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/10344/10344222.png" alt="logo">
                    </a>
                    <ul>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#trucks">TRUCKS</a></li>
                        <li><a href="#location">DINE IN</a></li>
                        <li><a href="calendar.php">CALENDAR</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                    <a href="#">PICK-UP & DELIVERY</a>
                </nav>
            </article>
            <video src="./video/pexels-kelly-2941127-2048x1080-24fps.mp4" autoplay muted loop></video>
        </header>';
        return $header;
    }

    public static function about(){
        $about = '
        <div class="about" id="about">

        </div>';

        return $about;
    }

    public static function truckList(){
        $truckList = '
        <div id="trucks" class="trucks">
            <a href="#">
                <div class="brazil">
                    Brazilian
                </div>
            </a>
            <a href="#">
                <div class="colombia">
                    Colombian
                </div>
            </a>
            <a href="#">
                <div class="japan">
                    Japanese
                </div>
            </a>
        </div>';
        return $truckList;
    }

    public static function gallery(){
        $gallery = '
        <div class="gallery" id="gallery">
            <h2>Gallery</h2>
        </div>';
        return $gallery;
    }

    public static function reviews(){
        $reviews = '
        <div class="reviews" id="reviews">
        <h2>Reviews from our customers</h2>
        <div class="review">
            
            <figure>
                <img src="./img/328503072_699077365045368_5332669083217987917_n.png" alt="person1">
                <figcaption>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    
                </figcaption>
            </figure>
            <aside>
                <p>
                    I like to eat humans! I like to play with humans! Humans are tasty!I like to eat humans! I like to play with humans! Humans are tasty!I like to eat humans! I like to play with humans! Humans are tasty!I like to eat humans! I like to play with humans! Humans are tasty!
                </p>
                <p id="person">
                    - Chefsaurio
                </p>
            </aside>
        </div>
        <div id="revNav">
            <i class="fa-solid fa-chevron-left" id="leftA"></i>
            <i class="fa-solid fa-chevron-right" id="rightA"></i>
        </div>

        </div>';

        return $reviews;
    }

    public static function container(){
        $container = '
        <div class="container">
        
        </div>';
        return $container;
    }

    public static function map(){
        $map = '
        <div id="location" class="map">
            <h2>DINE IN</h2>
        </div>';
        return $map;
    }

    public static function footer(){
        $footer = '
        <footer id="contact">
            <h2>CONTACT</h2>
        </footer>';
        return $footer;
    }


    
    //html presets
    public static function htmlFooter(){
        $htmlFooter = '</body>
        </html>';
        return $htmlFooter;
    }
}