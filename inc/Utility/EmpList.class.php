<?php

class EmpList{

    private $empList = [];

    /**
     * Undocumented function
     *
     * @param array $newEmpList
     * @return void
     */
    public function setEmpList(array $newEmpList){
        $this->empList = $newEmpList;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getEmpList(){
        return $this->empList;
    }
}