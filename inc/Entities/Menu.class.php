<?php

class Menu{

    private int $menuId;
    private string $name;

    public function getMenuId(): int{
        return $this->menuId;
    }

    public function setMenuId(int $menuId){
        $this->menuId = $menuId;
    }

    public function getName(): string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }
}