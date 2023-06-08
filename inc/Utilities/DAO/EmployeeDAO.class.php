<?php

class EmployeeDAO{

    private static $db;

    public static function startDb() {
        self::$db = new PDOService("Employee");
    }

    public static function insertEmployee(Employee $newUser) {

        $sql = "INSERT INTO employee(employeeId,first_name,last_name,email,gender,username,password,department,salary,picture,truckId) VALUES(:employeeId,:first_name,:last_name,:email,:gender,:username,:password,:department,:salary,:picture,:truckId)";

        self::$db->query($sql);

        self::$db->bind(":employeeId",$newUser->getEmployeeId());
        self::$db->bind(":first_name",$newUser->getFirstName());
        self::$db->bind(":last_name",$newUser->getLastName());
        self::$db->bind(":email",$newUser->getEmail());
        self::$db->bind(":gender",$newUser->getGender());
        self::$db->bind(":username",$newUser->getUsername());
        self::$db->bind(":password",$newUser->getPassword());
        self::$db->bind(":department",$newUser->getDepartment());
        self::$db->bind(":salary",$newUser->getSalary());
        self::$db->bind(":picture",$newUser->getPicture());
        self::$db->bind(":truckId",$newUser->getTruckId());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getAllEmployee(){
        $sql = "SELECT * FROM employee";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getEmployeeByUsername( string $username ) {
        $sql = "SELECT * FROM employee WHERE username=:user";

        self::$db->query($sql);

        self::$db->bind(":user",$username);
        self::$db->execute();

        return self::$db->singleResult();
    }
    public static function getEmployeeByTruckId($truckId){
        $sql = "SELECT * FROM employee WHERE truckId = :truckId";
        self::$db->query($sql);
        self::$db->bind(":truckId",$truckId);
        self::$db->execute();

        return self::$db->resultSet();
    }
}