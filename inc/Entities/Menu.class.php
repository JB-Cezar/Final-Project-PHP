<?php

class Menu{

    private int $menuId;
    private string $menuName;

    public function getMenuId(): int{
        return $this->menuId;
    }

    public function setMenuId(int $menuId){
        $this->menuId = $menuId;
    }

    public function getmenuName(): string{
        return $this->menuName;
    }

    public function setmenuName(string $menuName){
        $this->menuName = $menuName;
    }
}