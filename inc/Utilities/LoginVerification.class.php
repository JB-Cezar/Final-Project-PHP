<?php

class LoginVerification{

    private static $login;

    public static function verify(){
        self::$login = false;
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION["active"])){
            self::$login = true;
        }else{
            session_destroy();
            header("Location:signIn.php");
        }
        return self::$login;
    }
}