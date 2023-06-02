<?php

class Page{
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

    public static function header(){
        $header = '
        <header id="header">
            <article>
                <nav>
                    <a href="index.php">
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
                <a href="#">'.$link.'</a>
            </div>
            <div class="best">
                <h2><span>Savor a Mobile Culinary Experience </span> Explore Our Diverse Food Truck Fleet!</h2>
                <div>
                    <figure>
                        <img src="./img/grocery-bag.png" alt="pic-1">
                        <figcaption>
                            <h3>Delivery</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit cumque quis modi libero ipsum consectetur provident et hic doloremque perferendis.
                            </p>
                            <a href="#">This link</a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/fast-food.png" alt="pic-2">
                        <figcaption>
                            <h3>Catering</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit cumque quis modi libero ipsum consectetur provident et hic doloremque perferendis.
                            </p>
                            <a href="#">This link</a>
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
            <form action="'.$_SERVER["PHP_SELF"].'" method="POST">
                <input type="search" name="search" id="search" placeholder="Search">
                <input type="submit" name="submit-search" value="Search">
            </form>
       </nav> 
        </div>
        ';
        return $sb;
    }

    public static function truckListV2(){
        $truckListV2 = '
        <div id="truckList">
        <a href="#">
            <figure>
                <img src="./img/coxinha.png" alt="truck-1">
                <figcaption>
                    Brazilian
                </figcaption>
            </figure>
        </a>
        <a href="#">
            <figure>
                <img src="./img/bandeja-paisa.png" alt="truck-2">
                <figcaption>
                    Colombian
                </figcaption>
            </figure>
        </a>
        <a href="#">
            <figure>
                <img src="./img/ramen.png" alt="truck-3">
                <figcaption>
                    Japanese
                </figcaption>
            </figure>
        </a>
        <a href="#">
            <figure>
                <img src="./img/samosa.png" alt="truck-4">
                <figcaption>
                    Indian
                </figcaption>
            </figure>
        </a>
        <a href="#">
            <figure>
                <img src="./img/taco.png" alt="truck-5">
                <figcaption>
                    Mexican
                </figcaption>
            </figure>
        </a>
        <a href="#">
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


    
    //html presets
    public static function htmlFooter(){
        $htmlFooter = '
        </body>
        </html>';
        return $htmlFooter;
    }
}