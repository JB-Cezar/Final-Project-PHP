<?php

class TruckDAO{

    private static $db;

    public static function startDb() {
        self::$db = new PDOService("Truck");
    }

    public static function insertTruck(Truck $newTruck) {

        $sql = "INSERT INTO truck(truckId, truckName, category, dayOff, openHour, closeHour, description, email, phoneNumber, address, logo, menuId) VALUES (:truckId, :truckName, :category, :dayOff, :openHour, :closeHour, :description, :email, :phoneNumber, :address, :logo, :menuId)";

        self::$db->query($sql);

        self::$db->bind(":truckId",$newTruck->getTruckId());
        self::$db->bind(":truckName",$newTruck->getTruckName());
        self::$db->bind(":category",$newTruck->getCategory());
        self::$db->bind(":dayOff",$newTruck->getDayOff());
        self::$db->bind(":openHour",$newTruck->getOpenHour());
        self::$db->bind(":closeHour",$newTruck->getCloseHour());
        self::$db->bind(":description",$newTruck->getDescription());
        self::$db->bind(":email",$newTruck->getEmail());
        self::$db->bind(":phoneNumber",$newTruck->getPhoneNumber());
        self::$db->bind(":address",$newTruck->getAddress());
        self::$db->bind(":logo",$newTruck->getLogo());
        self::$db->bind(":menuId",$newTruck->getMenuId());

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

        self::$db->bind(":truckName",$truckName);
        self::$db->execute();

        return self::$db->singleResult();
    }
    public static function getTruckById($truckId){
        $sql = "SELECT * FROM truck WHERE truckId = :truckId";
        self::$db->query($sql);
        self::$db->bind(":truckId",$truckId);
        self::$db->execute();

        return self::$db->resultSet();
    }
}