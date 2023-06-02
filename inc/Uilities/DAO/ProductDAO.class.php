<?php

class ProductDAO{
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("Product");
    }

    public static function insertUser(User $newUser) {
  
        $sql = "INSERT INTO product(productId, productName, price, description, picture, menuId) VALUES (:productId, :productName, :price, :description, :picture, :menuId)";

        self::$db->query($sql);

        self::$db->bind(":productId",$newUser->getProductId());
        self::$db->bind(":productName",$newUser->getProductName());
        self::$db->bind(":price",$newUser->getPrice());
        self::$db->bind(":description",$newUser->getDescription());
        self::$db->bind(":picture",$newUser->getPicture());
        self::$db->bind(":menuId",$newUser->getMenuId());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getAllProducts(){
        $sql = "SELECT * FROM produc";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getProductByProductName( string $productName ) {
        $sql = "SELECT * FROM product WHERE productName=:productName";

        self::$db->query($sql);

        self::$db->bind(":productName",$productName);
        self::$db->execute();

        return self::$db->singleResult();
    }
}