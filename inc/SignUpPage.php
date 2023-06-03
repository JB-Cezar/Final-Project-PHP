<?php

class signUpPage{

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
    public static function signUpMainContent(){
        $signUpMainContent = '<main class="sign-main">';
        $signUpMainContent.=self::sectionUp();
        $signUpMainContent .= '</main>';

        return $signUpMainContent;
    }
    public static function sectionUp(){
        $section = '
        <section>'.self::signUpLeftRow().self::signUpRightRow().'
        </section>
        ';
        return $section;
    }
    public static function signUpLeftRow(){
        $row='
        <section class="sign-left">
                <h2>Sign up</h2>
                <form action="">
                    <input type="text" name="name" id="name" required placeholder="Your name">
                    <input type="email" name="email" id="email" required placeholder="Email">
                    <input type="password" name="password" id="password" required placeholder="Password">
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password">
                    <input type="submit" value="Get Started!">
                    <ul>
                        <li>
                            <i class="fa-brands fa-square-facebook"></i>
                        </li>
                        <li>
                            <i class="fa-brands fa-square-twitter"></i>
                        </li>
                        <li>
                            <i class="fa-brands fa-linkedin"></i>
                        </li>
                        <li>
                            <i class="fa-brands fa-square-instagram"></i>
                        </li>
                    </ul>
                </form>
            </section>
        ';
        return $row;
    }
    public static function signUpRightRow(){
        $row='
        <section class="signUp-right">
                <section>
                    <article>
                        <h3>One of us?</h3>
                        <p>
                            If you already have an account , just sign in.
                        </p>
                    </article>
                    <aside>
                        <a href="signIn.html">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                            Sign in</a>
                    </aside>
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