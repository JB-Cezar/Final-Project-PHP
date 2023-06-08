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

        return self::$db->resultSet();
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

    public static function updateUser(UserData $user){
        $sql = "UPDATE userdata SET name=:name,address=:address,email=:email,phone=:phone,password=:password,picture=:picture,gender=:gender WHERE userID=:userID";

        self::$db->query($sql);
        self::$db->bind(":userID",$user->getId());
        self::$db->bind(":name",$user->getName());
        self::$db->bind(":address",$user->getAddress());
        self::$db->bind(":email",$user->getEmail());
        self::$db->bind(":phone",$user->getPhone());
        self::$db->bind(":password",$user->getPassword());
        self::$db->bind(":picture",$user->getPicture());
        self::$db->bind(":gender",$user->getGender());

        self::$db->execute();
        return self::$db->lastInsertedId();
    }
}