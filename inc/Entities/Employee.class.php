<?php

class Eployee{

    private int $employeeId;
    private string $fristName;
    private string $lastName;
    private string $email;
    private string $gender;
    private string $username;
    private string $password;
    private string $departament;
    private float $salary;
    private int $truckId;

    public function getEmployeeId(): int{
        return $this->employeeId;
    }

    public function setEmployeeId(int $employeeId){
        $this->employeeId = $employeeId;
        return $this;
    }

    public function getFristName(): string{
        return $this->fristName;
    }

    public function setFristName(string $fristName){
        $this->fristName = $fristName;
        return $this;
    }

    public function getLastName(): string{
        return $this->lastName;
    }

    public function setLastName(string $lastName){
        $this->lastName = $lastName;
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

    public function getDepartament(): string{
        return $this->departament;
    }

    public function setDepartament(string $departament){
        $this->departament = $departament;
        return $this;
    }

    public function getSalary(): float{
        return $this->salary;
    }

    public function setSalary(float $salary){
        $this->salary = $salary;
        return $this;
    }

    public function getTruckId(): int{
        return $this->truckId;
    }

    public function setTruckId(int $truckId){
        $this->truckId = $truckId;
        return $this;
    }
}