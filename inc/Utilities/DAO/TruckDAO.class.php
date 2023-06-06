<?php

class TruckDAO{

    private static $db;

    public static function startDb() {
        self::$db = new PDOService("Truck");
    }

    public static function insertTruck(Truck $newTruck) {

        $sql = "INSERT INTO truck(truckId, truckName, category, dayOff, openHour, closeHour, description, email, phoneNumber, address, logo, menuId) VALUES (:truckId, :truckName, :category, :dayOff, :openHour, :closeHour, :description, :email, :phoneNumber, :address, :logo, :menuId)";

        self::$db->query($sql);

        self::$db->bind(":truckId",$newUser->getTruckId());
        self::$db->bind(":truckName",$newUser->getTruckName());
        self::$db->bind(":category",$newUser->getCategory());
        self::$db->bind(":dayOff",$newUser->getDayOff());
        self::$db->bind(":openHour",$newUser->getOpenHour());
        self::$db->bind(":closeHour",$newUser->getCloseHour());
        self::$db->bind(":description",$newUser->getDescription());
        self::$db->bind(":email",$newUser->getEmail());
        self::$db->bind(":phoneNumber",$newUser->getPhoneNumber());
        self::$db->bind(":address",$newUser->getAddress());
        self::$db->bind(":logo",$newUser->getLogo());
        self::$db->bind(":menuId",$newUser->getMenuId());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getAllTruck(){
        $sql = "SELECT * FROM truck";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getTruckByTruckName( string $truckName ) {
        $sql = "SELECT * FROM truck WHERE truckName=:truckName";

        self::$db->query($sql);

        self::$db->bind(":truckName",$username);
        self::$db->execute();

        return self::$db->singleResult();
    }
}