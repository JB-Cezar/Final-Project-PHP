<?php

class EmployeeDAO{

    private static $db;

    public static function startDb() {
        self::$db = new PDOService("Employee");
    }

    public static function insertUser(User $newUser) {

        $sql = "INSERT INTO employee(employeeId,fristName,lastName,email,gender,username,password,departament,salary,truckId) VALUES(:employeeId,:fristName,:lastName,:email,:gender,:username,:password,:departament,:salary,:truckId)";

        self::$db->query($sql);

        self::$db->bind(":employeeId",$newUser->getEmployeeId());
        self::$db->bind(":fristName",$newUser->getFristName());
        self::$db->bind(":lastName",$newUser->getLastName());
        self::$db->bind(":email",$newUser->getEmail());
        self::$db->bind(":gender",$newUser->getGender());
        self::$db->bind(":username",$newUser->getUsername());
        self::$db->bind(":password",$newUser->getPassword());
        self::$db->bind(":departament",$newUser->getDepartament());
        self::$db->bind(":salary",$newUser->getSalary());
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
}