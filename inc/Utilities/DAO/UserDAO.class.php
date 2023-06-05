<?php

class UserDAO{

    private static $db;

    public static function initDB(){
        self::$db = new PDOClass("UserData");
    }

    public static function getAll(){
        $sql = "SELECT * FROM userdata";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->getResultSet();
    }

    public static function getUserByEmail(string $email){
        $sql = "SELECT * FROM userdata WHERE email=:email";

        self::$db->query($sql);
        self::$db->bind(":email",$email);
        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function insertUser(UserData $user){
        $sql = "INSERT INTO userdata(name,email,password) VALUES(:name,:email,:password)";

        self::$db->query($sql);

        self::$db->bind(":name",$user->getName());
        self::$db->bind(":email",$user->getEmail());
        self::$db->bind(":password",$user->getPassword());
        self::$db->execute();

        return self::$db->lastInsertedId();
    }
}