<?php

class UserDAO{

    private static $db;

    public static function startDb(){
        self::$db = new PDOServices("User");
    }

    public static function insertUser(User $newUse){
        $sql = "INSERT INTO users(id,name,password,email) VALUES(:id,:name,:password,:email)";

        self::$db->query($sql);

        self::$db->bind(":id", $newUse->getId());
        self::$db->bind(":name", $newUse->getName());
        self::$db->bind(":password", $newUse->getPassword());
        self::$db->bind(":email", $newUse->getEmail());

        self::$db->execute();

        return self::$db->lastInsertId();
    }

    public static function getAllUsers(){
        $sql="SELECT * FROM users";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getUserByEmail(string $email){
        $sql="SELECT * FROM users WHERE email=:email";

        self::$db->query($sql);
        self::$db->bind(":email", $email);
        self::$db->execute();

        return self::$db->sigleResult();
    }
}