<?php

class Product{

    /**
     * Undocumented variable
     *
     * @var int $menuId;
     * @var string $picture
     * @var string $name;
     * @var string $price;
     * @var string $description;
     * @var string $gf;
     * @var string $vg;
     */
    private int $productId;
    private string $productName;
    private float $price;
    private string $description;
    private string $picture;
    private int $menuId;

    public function getProductId():int{
        return $this->productId;
    }

    public function setProductId(int $productId){
        $this->productId = $productId;
    }

    public function getPic():string{
        return $this->pic;
    }

    public function setPic(string $pic){
        $this->pic = $pic;
    }

    public function getProductName():string{
        return $this->productName;
    }

    public function setProductName(string $productName){
        $this->productName = $productName;
    }

    public function getPrice():float{
        return $this->price;
    }

    public function setPrice(float $price){
        $this->price = $price;
    }

    public function getDescription():string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getMenuId():int{
        return $this->menuId;
    }

    public function setMenuId(int $menuId){
        $this->menuId = $menuId;
    }
}