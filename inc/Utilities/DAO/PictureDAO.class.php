<?php

class PictureDAO{
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("Picture");
    }

    public static function insertPicture(Picture $newPicture) {

        $sql = "INSERT INTO picture (pictureId, picture, truck_id) VALUES (:pictureId, :picture, :truckId)";

        self::$db->query($sql);

        self::$db->bind(":pictureId",$newPicture->getPictureId());
        self::$db->bind(":picture",$newPicture->getPicture());
        self::$db->bind(":truckId",$newPicture->getTruckId());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }
    public static function getAllPicture(){
        $sql = "SELECT * FROM picture";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getPictureByPictureId( int $pictureId ) {

        $sql = "SELECT * FROM picture WHERE truckId=:truckId";

        self::$db->query($sql);

        self::$db->bind(":truckId",$pictureId);
        self::$db->execute();

        return self::$db->resultSet();
    }
}