<?php

class Picture{

    private int $picId;
    private string $picture;
    private int $truckId;

    public function getPicId(){
        return $this->picId;
    }

    public function setPicId(int $picId){
        $this->picId = $picId;
    }

    public function getPicture(){
        return $this->picture;
    }

    public function setPicture(string $picture){
        $this->picture = $picture;
    }

    public function getTruckId(){
        return $this->truckId;
    }

    public function setTruckId(int $truckId){
        $this->truckId = $truckId;
    }
}