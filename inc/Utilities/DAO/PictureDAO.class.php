<?php

class PictureDAO{
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("Picture");
    }

    public static function insertPicture(Picture $newPicture) {

        $sql = "INSERT INTO picture (pictureId, picture, truck_id) VALUES (:pictureId, :picture, :truckId)";

        self::$db->query($sql);

        self::$db->bind(":pictureId",$newPicture->getPicId());
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

    public static function getPictureByPitureId( int $pictureId ) {

        $sql = "SELECT * FROM picture WHERE pictureId=:pictureId";

        self::$db->query($sql);

        self::$db->bind(":pictureId",$pictureId);
        self::$db->execute();

        return self::$db->singleResult();
    }
}