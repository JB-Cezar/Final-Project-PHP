<?php

class EmployeeDAO{

    private static $db;

    public static function startDB(){
        self::$db = new PDOClass("Employee");
    }

    public static function getAllEmployees(){
        $sql = "SELECT * FROM employee";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getEmployeeById($id){
        $sql = "SELECT * FROM employee WHERE employeeId=:employeeId";

        self::$db->query($sql);
        self::$db->bind(":employeeId",$id);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function deleteEmployee(int $id){
        $sql = "DELETE FROM employee WHERE employeeId=:employeeId";

        self::$db->query($sql);
        self::$db->bind(":employeeId",$id);
        self::$db->execute();

        return self::$db->countRow();
    }

    public static function insertEmployee(Employee $employee){
        $sql = "INSERT INTO employee(first_name,last_name,email,gender,username,password,department,salary) VALUES(:first_name,:last_name,:email,:gender,:username,:password,:department,:salary)";

        self::$db->query($sql);
        self::$db->bind(":first_name",$employee->getFirst_name());
        self::$db->bind(":last_name",$employee->getLast_name());
        self::$db->bind(":email",$employee->getEmail());
        self::$db->bind(":gender",$employee->getGender());
        self::$db->bind(":username",$employee->getUsername());
        self::$db->bind(":password",$employee->getPassword());
        self::$db->bind(":department",$employee->getDepartment());
        self::$db->bind(":salary",$employee->getSalary());
        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function updateEmployee(Employee $employee){
        $sql = "UPDATE employee SET first_name=:first_name,last_name=:last_name,email=:email,gender=:gender,username=:username,password=:password,department=:department,salary=:salary WHERE employeeId=:employeeId";

        self::$db->query($sql);
        self::$db->bind(":employeeId",$employee->getEmployeeId());
        self::$db->bind(":first_name",$employee->getFirst_name());
        self::$db->bind(":last_name",$employee->getLast_name());
        self::$db->bind(":email",$employee->getEmail());
        self::$db->bind(":gender",$employee->getGender());
        self::$db->bind(":username",$employee->getUsername());
        self::$db->bind(":password",$employee->getPassword());
        self::$db->bind(":department",$employee->getDepartment());
        self::$db->bind(":salary",$employee->getSalary());
        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function findEmployees(string $input){
        $sql = "SELECT * FROM employee WHERE employeeId LIKE :id OR first_name LIKE :fName OR last_name LIKE :lName OR department LIKE :department ORDER BY employeeId";

        self::$db->query($sql);
        self::$db->bind(":id","%$input%");
        self::$db->bind(":fName","%$input%");
        self::$db->bind(":lName","%$input%");
        self::$db->bind(":department","%$input%");
        
        self::$db->execute();

        return self::$db->resultSet();
    }

    
}