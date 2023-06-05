<?php

class SignInPage{

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

    public static function signInMainContent(){
        $signInMainContent = '<main class="sign-main">';
        $signInMainContent.=self::section();
        $signInMainContent .= '</main>';

        return $signInMainContent;
    }
    public static function section(){
        $section = '
        <section>'.self::signInLeftRow().self::signInRightRow().'
        </section>
        ';
        return $section;
    }
    public static function signInLeftRow(){
        $row = '
        <section class="sign-left" id="sign-left">
                <h2>Sign In</h2>
                <form action="'.$_SERVER["PHP_SELF"].'" method="POST">
                    <input type="email" name="email" id="email" required placeholder="Email">
                    <input type="password" name="password" id="password" required placeholder="Password">
                    <input type="submit" value="Sign In">
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
    public static function signInRightRow(){
        $row = '
        <section class="signIn-right">
                <section>
                    <article>
                        <h3>New here?</h3>
                        <p>
                            If you do not have an account , sign up here!
                        </p>
                    </article>
                    <aside>
                        <a href="signUp.php">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                            Sign Up</a>
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