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

    public function findEmployee(string $input){
        $newList = [];
        foreach($this->empList as $employee){
            if(
                str_contains($employee->getEmployeeId(),$input) ||
                str_contains(strtolower($employee->getFirst_name()),$input) ||
                str_contains(strtolower($employee->getLast_name()),$input) ||
                str_contains(strtolower($employee->getDepartment()),$input)
            ){
                $newList[] = $employee;
            }
        }
        return $newList;
    }
}