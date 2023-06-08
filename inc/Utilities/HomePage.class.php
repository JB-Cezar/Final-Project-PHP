<?php

class HomePage{
    //html presets
    public static function htmlHeader($title){
        $htmlHeader = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <title>'.$title.'</title>
        </head>
        <body>';
        return $htmlHeader;
    }
    
    public static function header($user=""){
        $header = '
        <header id="header">
            <article>
                <nav>
                    <a href="';
                    if(!isset($_SESSION["user"]) || $_GET["logged"]=="out"){
                        $header.= "index.php?logged=out";
                    }else{
                        $header.="index.php?logged=in";
                    }
                    $header.='">
                    <img src="https://cdn-icons-png.flaticon.com/512/10344/10344222.png" alt="logo">
                    </a>
                    <ul>
                        <li><a href="';
                        if(!isset($_SESSION["user"]) || $_GET["logged"]=="out"){
                            $header.= "about.php?logged=out";
                        }else{
                            $header.="about.php?logged=in";
                        }
                        $header.= '">ABOUT</a></li>
                        <li><a href="index.php#truckList">TRUCKS</a></li>
                        <li><a href="index.php#location">DINE IN</a></li>
                        <li><a href="#home-footer">CONTACT</a></li>
                    </ul>
                    <a href="';
                    if(!isset($_SESSION["user"]) || $_GET["logged"]=="out"){
                        $header.='signIn.php"';
                    }else{
                        $header.='profile.php"';
                    }
                    
                    $header.='class="signStatus">';

                    if(!isset($_SESSION["user"]) || $_GET["logged"]=="out"){
                        $header.='SIGN IN';
                    }else{
                        $header.=$user;
                    }
                    $header .= '</a>
                </nav>
            </article>
            <video src="./video/pexels-kelly-2941127-2048x1080-24fps.mp4" autoplay muted loop></video>
        </header>';
        return $header;
    }

    public static function about($title="",$description="",$link=""){
        $about = '
        <div class="about" id="about">
            <div class="welcome">
                <article>
                    <h1>
                        '.$title.'
                    </h1>
                    <p>
                        '.$description.'
                    </p>
                </article>
                <a href="about.php">'.$link.'</a>
            </div>
            <div class="best">
                <h2><span>Savor a Mobile Culinary Experience </span> Explore Our Diverse Food Truck Fleet!</h2>
                <div>
                    <figure>
                        <img src="./img/grocery-bag.png" alt="pic-1">
                        <figcaption>
                            <h3>Delivery</h3>
                            <p id="del-p">
                                Experience culinary convenience like never before with our exceptional food delivery service. From a wide array of mouthwatering dishes to prompt and reliable delivery, we bring the flavors you love right to your doorstep, ensuring a delightful and hassle-free dining experience.
                            </p>
                            <a href="#">Read more</a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/fast-food.png" alt="pic-2">
                        <figcaption>
                            <h3>Catering</h3>
                            <p>
                                Elevate your event with our food truck catering, serving up a delightful fusion of flavors and an unforgettable dining experience. Our expert team brings the culinary magic to you, offering a diverse menu, impeccable service, and a touch of excitement to make your occasion truly special.
                            </p>
                            <a href="#">Read more</a>
                        </figcaption>
                    </figure>
                    </div>
                </div>
        </div>';

        return $about;
    }

    public static function aboutDesc(){
        $aboutDes = '
        <div class="about-about">
            <div class="welcome">
            <article>
                <h1>
                    Welcome to Flavor Central! 
                </h1>
                <p>
                    Flavor Wheels is your culinary companion on the move, bringing an exciting world of flavors and tastes directly to your neighborhood. We are a passionate group of food enthusiasts dedicated to satisfying your cravings with our fleet of vibrant food trucks.
                </p>
            </article>
            <a href="#">READ MORE</a>
            </div>
            </div>
        ';
        return $aboutDes;
    }

    public static function searchBar(){
        $sb = '
        <div class="employee">
        <nav>
            <h3>
                Flavour Enthusiast
            </h3>
            <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                <input type="search" name="search-figure" id="search" placeholder="name, department">
                <input type="submit" value="Search">
                <input type="hidden" name="search" value="search">
            </form>
       </nav> 
        </div>
        ';
        return $sb;
    }

    public static function figureContainer($empList,$limit){
        $fg = '
            <div id="EmpContainer"><div>';
            $counter = 1;
            foreach($empList as $emp){
                if($counter <=$limit){
                    $fg.=self::EmpContent($emp);
                    $counter++;
                }  
            }    
            $fg .= '</div></div>';
        return $fg;
    }

    public static function EmpContent($emp){
        $html = '
        <figure class="emp-figure">
            <img src="'.$emp->getPicture().'" alt="'.$emp->getEmployeeId().'">
            <figcaption>
                <h4>'.$emp->getFirst_name().' '.$emp->getLast_name().'</h4>
                <h5>'.$emp->getDepartment().'</h5>
            </figcaption>
        </figure>

        ';
        return $html;
    }

    public static function truckListV2(){
        $truckListV2 = '
        <div id="truckList">
        <a href="truck.php?option=2">
            <figure>
                <img src="./img/coxinha.png" alt="truck-1">
                <figcaption>
                    Brazilian
                </figcaption>
            </figure>
        </a>
        <a href="truck.php?option=6">
            <figure>
                <img src="./img/bandeja-paisa.png" alt="truck-2">
                <figcaption>
                    Colombian
                </figcaption>
            </figure>
        </a>
        <a href="truck.php?option=5">
            <figure>
                <img src="./img/ramen.png" alt="truck-3">
                <figcaption>
                    Japanese
                </figcaption>
            </figure>
        </a>
        <a href="truck.php?option=3">
            <figure>
                <img src="./img/samosa.png" alt="truck-4">
                <figcaption>
                    Indian
                </figcaption>
            </figure>
        </a>
        <a href="truck.php?option=1">
            <figure>
                <img src="./img/taco.png" alt="truck-5">
                <figcaption>
                    Mexican
                </figcaption>
            </figure>
        </a>
        <a href="truck.php?option=4">
            <figure>
                <img src="./img/bibimbap.png" alt="truck-6">
                <figcaption>
                    Korean
                </figcaption>
            </figure>
        </a>
        </div>
        ';
        return $truckListV2;
    }

    public static function gallery(){
        $gallery = '
        <div class="gallery" id="gallery">
            <article>
                
            </article>
            <div>
                <h2>
                    Capturing Satisfied Smiles
                </h2>
                <aside>
                    <article>
                        <img src="https://images.pexels.com/photos/5920742/pexels-photo-5920742.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="gallery-2">
                        <img src="https://images.pexels.com/photos/5920765/pexels-photo-5920765.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="gallery-3">
                    </article>
                    <article>
                        <img src="https://images.pexels.com/photos/5920772/pexels-photo-5920772.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="gallery-4">
                        <img src="https://images.pexels.com/photos/5920769/pexels-photo-5920769.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="gallery-5">
                    </article>
                </aside>
            </div>
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
        <div id="location" class="map" style="width:100%; overflow:hidden; height=300px">
            <iframe src="https://www.google.com/maps/d/embed?mid=1jxPweOU1xO7hv1tnYIW9lDqufD_h2lY&ehbc=2E312F" width="100%" height="600px" frameborder="0" style="border:0; margin-top: -150px;"></iframe>
        </div>';
        return $map;
    }

    public static function contact(){
        $contact = '
        <form action="'.$_SERVER["PHP_SELF"].'" method="POST" id="newsletter">
            <input type="email" name="email" placeholder="Email address">
            <input type="submit" name="submit" value="Register to our newsletter">
        </form>';
        return $contact;
    }

    public static function notsent(){
        $notSent = '<div class="newsError">
        <p>Registration unsuccesful</p>
        </div>';
        return $notSent;
    }

    public static function footer($contact=""){
        $footer = '
        <footer id="home-footer">';

        $footer.= $contact;
        $footer.='
        <div>
        <ul>
            <li><a href="#">Accessibility</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
        </ul>
        <a href="#">
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
        </div>
        </footer>';
        return $footer;
    }


    
    //html presets
    public static function htmlFooter(){
        $htmlFooter = '
        </body>
        </html>';
        return $htmlFooter;
    }
}