<?php

class MenuDAO{

    private static $db;

    public static function startDb(){
        self::$db = new PDOService("Menu");
    }


    public static function insertMenu(Menu $newMenu){
        $sql = "INSERT INTO menu(menuId,menuName) VALUES(:menuId, :menuName)";

        self::$db->query($sql);

        self::$db->bind(":menuId", $newMenu->getMenuId());
        self::$db->bind(":menuName", $newMenu->getmenuName());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getAllMenu(){
        $sql = "SELECT * FROM menu";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getMenuByName( string $name ) {
        $sql = "SELECT * FROM users WHERE menuName=:menuName";

        self::$db->query($sql);

        self::$db->bind(":menuName",$username);
        self::$db->execute();

        return self::$db->singleResult();
    }
}