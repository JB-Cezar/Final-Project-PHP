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

	public function getEmployeeId() {
		return $this->employeeId;
	}

	public function setEmployeeId(int $employeeId) {
		$this->employeeId = $employeeId;
	}

	public function getFirst_name() {
		return $this->first_name;
	}

	public function setFirst_name(string $first_name) {
		$this->first_name = $first_name;
	}

	public function getLast_name() {
		return $this->last_name;
	}

	public function setLast_name(string $last_name) {
		$this->last_name = $last_name;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail(string $email) {
		$this->email = $email;
	}

	public function getGender() {
		return $this->gender;
	}

	public function setGender(string $gender) {
		$this->gender = $gender;
	}

	public function getUsername() {
		return $this->username;
	}

	public function setUsername(string $username) {
		$this->username = $username;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword(string $password) {
		$this->password = $password;
	}

	public function getDepartment() {
		return $this->department;
	}

	public function setDepartment(string $department) {
		$this->department = $department;
	}

	public float getSalary() {
		return $this->salary;
	}

	public function setSalary(float $salary) {
		$this->salary = $salary;
	}

}