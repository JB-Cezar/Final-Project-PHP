<?php

class Picture{

    private int $pictureId;
    private string $picture;
    private int $truckId;

    public function getPictureId(){
        return $this->picId;
    }

    public function setPictureId(int $picId){
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