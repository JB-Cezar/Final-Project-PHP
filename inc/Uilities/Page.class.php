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
            <link rel="stylesheet" href="/css/style.css">
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
                <video src="/video/pexels-kelly-2941127-2048x1080-24fps.mp4" autoplay muted loop></video>
            </header>
        ';
        return $htmlHeader;
    }
    public static function topRow() : string{
        $row = '

        ';
        return $row;
    }
    public static function pageEnd() : string {
        $htmlPageEnd = '
        </body>
        </html>
        ';
        return $htmlPageEnd;
    }
    public static function truckPage($newProduct, $employees) {
        $htmlTruckPage = '
            <main class="truck-main">
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
                <section class="truck-about">
                    <section>
                        <h2>About us</h2>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit nemo culpa, quod dolorum recusandae est unde? Quidem eveniet itaque quibusdam dolor ab commodi suscipit placeat quasi ullam illum veniam necessitatibus dignissimos, ipsum error amet aliquam enim soluta, doloribus provident eius!
                        </p>
                    </section>
                </section>
                <section class="truck-menu">
                <h2>Menu</h2>
                <article>'.
                    self::menuRow($newProduct).
                '</article>
            </section>
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
                <section class="truck-employee">
                    <h2> We are waiting for you</h2>
                    <ul>
                    '.self::employeesSection($employees).'
                    </ul>
                </section>
            </main>
        ';
        return $htmlTruckPage;
    }
    public static function menuTable($newProduct){
        $menu ='
            <section class="truck-menu">
                <h2>Menu</h2>
                <article>'.
                    self::menuRow($newProduct).
                '</article>
            </section>
        ';
        return $menu;
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
    public static function employeesSection($employees){
        $row = '';

        foreach($employees as $employee){
            $row .='
                <li>
                    <img src="/img/truck-mexic/churro-01.jpg" alt="">
                    <aside>
                        <h4>'.$employee->getFristName() . $employee->getLastName().'</h4><br/>
                        <h4>'.$employee->getGender().'</h4>
                    </aside>
                    <h5>'.$employee->getDepartament().'</h5>
                    <a href="">'.$employee->getEmail().'</a>
                </li>
            ';
        }
        return $row;
    }
}