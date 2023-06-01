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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head>
        <body>
        ';
        return $htmlHeader;
    }
    public static function pageHeade(string $title):string{
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
    public static function mainContent(): string{
        $mainContent = '<main>';
        $mainContent .= self::servicesRow();
        $mainContent .= '</main>';
        return $mainContent;
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
    public static function menuTable($newMenu){
        $menu ='
            <section class="truck-menu">
                <h2>Menu</h2>
                <article>'.
                    self::menuRow($newMenu)
                .'</article>
            </section>
        ';
    }
    public static function menuRow(array $newMenu){
        $rowList ='';

        foreach($newMenu as $singleMenu){
            $rowList .= '
            <figure>
                <img src="'.$singleMenu->getPicture().'" alt="'.$singleMenu->getName().'">
                <figcaption>
                    <aside class="price">
                        <h3>'.$singleMenu->getName().'</h3>
                        <p>'.$singleMenu->getPrice().'</p>
                    </aside>
                        <p>
                            '.$singleMenu->getDescription().'
                        </p>
                    <aside>
                        <small>'.$singleMenu->getGf().'</small>
                        <small>'.$singleMenu->getVg().'</small>
                    </aside>
                </figcaption>
            </figure>
            ';
        }
    }
}