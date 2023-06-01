<?php

class Truck{

    private int $truckId;
    private int $menuId;
    private string $truckName;
    private string $category;
    private string $dayOff;
    private int $openHour;
    private int $closeHour;
    private string $description;
    private string $email;
    private string $phoneNumber;
    private string $address;
    private string $logo;

    public function getTruckId():int{
        return $this->truckId;
    }

    public function setTruckId(int $truckId){
        $this->truckId = $truckId;
    }

    public function getMenuId():int{
        return $this->menuId;
    }

    public function setMenuId(int $menuId){
        $this->menuId = $menuId;
    }

    public function getTruckName():string{
        return $this->truckName;
    }

    public function setTruckName(string $truckName){
        $this->truckName = $truckName;
    }

    public function getCategory():string{
        return $this->category;
    }

    public function setCategory(string $category){
        $this->category = $category;
    }

    public function getDayOff():string{
        return $this->dayOff;
    }

    public function setDayOff(string $dayOff){
        $this->dayOff = $dayOff;
    }

    public function getOpenHour():int{
        return $this->openHour;
    }

    public function setOpenHour(int $openHour){
        $this->openHour = $openHour;
    }

    public function getCloseHour():int{
        return $this->closeHour;
    }

    public function setCloseHour(int $closeHour){
        $this->closeHour = $closeHour;
    }

    public function getDescription():string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getPhoneNumber():string{
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber){
        $this->phoneNumber = $phoneNumber;
    }

    public function getAddress():string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getLogo():string{
        return $this->logo;
    }

    public function setLogo(string $logo){
        $this->logo = $logo;
    }
}