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

    public static function truckMainContent(){
        $truckMainContent = '<main class="truck-main">';
        $truckMainContent.= self::truckTopRow();
        $truckMainContent.= self::truckAboutRow();
        $truckMainContent.= self::truckMenuRow();
        $truckMainContent.= self::truckInfoRow();
        $truckMainContent.= '</main>';

        return $truckMainContent;
    }
    public static function truckTopRow(){
        $row = '
        <section class="truck-top">
            <aside>
                <h1>Truck name</h1>
                <p>~ mexican food ~</p>
            </aside>
            <img class="logo" src="/img/truck-mexic/Mexican_03.jpg" alt="mexican">
            <figure>
                <img src="/img/truck-mexic/tacos-01.jpg" alt="">
                <img src="/img/truck-mexic/tacos-01.jpg" alt="">
                <img src="/img/truck-mexic/tacos-01.jpg" alt="">
                <img src="/img/truck-mexic/tacos-01.jpg" alt="">
            </figure>
        </section>
        ';
        return $row;
    }
    public static function truckAboutRow(array $truck){
        $row = '
        <section class="truck-about">
            <section>
                <h2>About us</h2>
                <p>
                    '.$truck['description'].'
                </p>
            </section>
        </section>
        ';
        return $row;
    }
    public static function truckMenuRow(array $menu,$picture,$product){
        $row='
        <section class="truck-menu">
            <h2>'.$menu['menuName'].'</h2>
            <article>
                <figure>
                    <img src="'.$picture['picture'].'">
                    <figcaption>
                        <aside class="price">
                            <h3>'.$product['productName'].'</h3>
                            <p>'.$product['price'].'</p>
                        </aside>
                        <p>
                        '.$product['description'].'
                        </p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="/img/truck-mexic/tacos-02.jpg" alt="tacos-02">
                    <figcaption>
                        <aside>
                            <h3>Tacos</h3>
                            <p>$15</p>
                        </aside>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nemo reprehenderit, cum iste tenetur assumenda?
                        </p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="/img/truck-mexic/tacos-03.jpg" alt="tacos-01">
                    <figcaption>
                        <aside>
                            <h3>Tacos</h3>
                            <p>$15</p>
                        </aside>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nemo reprehenderit, cum iste tenetur assumenda?
                        </p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="/img/truck-mexic/salada-01.jpg" alt="salada-01">
                    <figcaption>
                        <aside>
                            <h3>Tacos</h3>
                            <p>$15</p>
                        </aside>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nemo reprehenderit, cum iste tenetur assumenda?
                        </p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="/img/truck-mexic/quesadilla-01.jpg" alt="quesadilla-01">
                    <figcaption>
                        <aside>
                            <h3>Tacos</h3>
                            <p>$15</p>
                        </aside>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nemo reprehenderit, cum iste tenetur assumenda?
                        </p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="/img/truck-mexic/nachos-01.jpg" alt="tacos-01">
                    <figcaption>
                        <aside>
                            <h3>Tacos</h3>
                            <p>$15</p>
                        </aside>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nemo reprehenderit, cum iste tenetur assumenda?
                        </p>
                    </figcaption>
                </figure>
            </article>
        </section>
        ';
        return $row;
    }
    public static function truckInfoRow(array $truckInfo){
        $row='
        <section class="truck-info">
            <section>
                <article class="location">
                    <h2>Location</h2>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d325.31634149957466!2d-123.1204656!3d49.2852886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486714e32658949%3A0xb0eb86b45e1c7e00!2sMr.%20Shawarma%20Vancouver%20Shawarma%20and%20Cheesesteak%2C%20Burger%2C%20and%20Falafel!5e0!3m2!1sen!2sca!4v1685243852156!5m2!1sen!2sca" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </article>
                <article class="info">
                    <aside>
                        <h2> Opening</h2>
                        <p>8:00~16:00</p>
                    </aside>
                    <aside>
                        <h2>Day off</h2>
                        <p>Sunday</p>
                    </aside>
                    <aside class="truck-contact">
                        <h2>Contact</h2>
                        <a href="tel">000-000-0000</a>
                        <a href="#">Email@mail.com</a>
                    </aside>
                </article>
            </section>
        </section>
        ';
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