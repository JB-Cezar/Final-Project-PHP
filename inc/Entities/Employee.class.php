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
	private string $picture;

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function getEmployeeId() {
		return $this->employeeId;
	}

	/**
	 * Undocumented function
	 *
	 * @param integer $employeeId
	 * @return void
	 */
	public function setEmployeeId(int $employeeId) {
		$this->employeeId = $employeeId;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function getFirst_name() {
		return $this->first_name;
	}

	/**
	 * Undocumented function
	 *
	 * @param string $first_name
	 * @return void
	 */
	public function setFirst_name(string $first_name) {
		$this->first_name = $first_name;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function getLast_name() {
		return $this->last_name;
	}

	/**
	 * Undocumented function
	 *
	 * @param string $last_name
	 * @return void
	 */
	public function setLast_name(string $last_name) {
		$this->last_name = $last_name;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Undocumented function
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail(string $email) {
		$this->email = $email;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Undocumented function
	 *
	 * @param string $gender
	 * @return void
	 */
	public function setGender(string $gender) {
		$this->gender = $gender;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * Undocumented function
	 *
	 * @param string $username
	 * @return void
	 */
	public function setUsername(string $username) {
		$this->username = $username;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * Undocumented function
	 *
	 * @param string $password
	 * @return void
	 */
	public function setPassword(string $password) {
		$this->password = $password;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function getDepartment() {
		return $this->department;
	}

	/**
	 * Undocumented function
	 *
	 * @param string $department
	 * @return void
	 */
	public function setDepartment(string $department) {
		$this->department = $department;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function getSalary() {
		return $this->salary;
	}

	/**
	 * Undocumented function
	 *
	 * @param float $salary
	 * @return void
	 */
	public function setSalary(float $salary) {
		$this->salary = $salary;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function getPicture(){
		return $this->picture;
	}

	/**
	 * Undocumented function
	 *
	 * @param string $picture
	 * @return void
	 */
	public function setPicture(string $picture){
		$this->picture = $picture;
	}

}