<?php

class ProductDAO{
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("Product");
    }

    public static function insertUser(Product $newProduct) {

        $sql = "INSERT INTO product(productId, productName, price, description, picture, menuId) VALUES (:productId, :productName, :price, :description, :picture, :menuId)";

        self::$db->query($sql);

        self::$db->bind(":productId",$newProduct->getProductId());
        self::$db->bind(":productName",$newProduct->getProductName());
        self::$db->bind(":price",$newProduct->getPrice());
        self::$db->bind(":description",$newProduct->getDescription());
        self::$db->bind(":picture",$newProduct->getPic());
        self::$db->bind(":menuId",$newProduct->getMenuId());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getAllProducts(){
        $sql = "SELECT * FROM product";
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
    public static function getProductsByMenuId($menuId){
        $sql = "SELECT * FROM product WHERE menuId = :menuId";
        self::$db->query($sql);
        self::$db->bind(":menuId",$menuId);
        self::$db->execute();

        return self::$db->resultSet();
    }
}