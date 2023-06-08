<?php

class Employee{

    private int $employeeId;
    private string $first_name;
    private string $last_name;
    private string $email;
    private string $gender;
    private string $username;
    private string $password;
    private string $department;
    private float $salary;
    private string $picture;
    private int $truckId;

    public function getEmployeeId(): int{
        return $this->employeeId;
    }

    public function setEmployeeId(int $employeeId){
        $this->employeeId = $employeeId;
        return $this;
    }

    public function getFirstName():string{
        return $this->first_name;
    }

    public function setFirstName(string $first_name){
        $this->first_name = $first_name;
        return $this;
    }

    public function getLastName(): string{
        return $this->last_name;
    }

    public function setLastName(string $last_name){
        $this->last_name = $last_name;
        return $this;
    }

    public function getEmail(): string{
        return $this->email;
    }

    public function setEmail(string $email){
        $this->email = $email;
        return $this;
    }

    public function getGender(): string{
        return $this->gender;
    }

    public function setGender(string $gender){
        $this->gender = $gender;
        return $this;
    }

    public function getUsername(): string{
        return $this->username;
    }

    public function setUsername(string $username){
        $this->username = $username;
        return $this;
    }

    public function getPassword(): string{
        return $this->password;
    }

    public function setPassword(string $password){
        $this->password = $password;
        return $this;
    }

    public function getDepartment(): string{
        return $this->department;
    }

    public function setDepartment(string $department){
        $this->department = $department;
        return $this;
    }

    public function getSalary(): float{
        return $this->salary;
    }

    public function setSalary(float $salary){
        $this->salary = $salary;
        return $this;
    }
    public function getPicture(): string{
        return $this->picture;
    }
    public function setPicture(string $picture){
        $this->picture = $picture;
        return $this;
    }

    public function getTruckId(): int{
        return $this->truckId;
    }
