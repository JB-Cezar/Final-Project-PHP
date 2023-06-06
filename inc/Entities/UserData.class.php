<?php

class UserData{
    private int $id = 0;
    private string $name = "";
	private string $address = "";
    private string $email = "";
	private int $phone = 0;
    private string $password = "";
	private string $picture = "";
	private string $gender = "";

	public function getId() {
		return $this->id;
	}

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getName() {
		return $this->name;
	}

	public function setName(string $name) {
		$this->name = $name;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress(string $address) {
		$this->address = $address;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail(string $email) {
		$this->email = $email;
	}

	public function getPhone() {
		return $this->phone;
	}

	public function setPhone(int $phone) {
		$this->phone = $phone;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword(string $password) {
		$this->password = $password;
	}

	public function getPicture() {
		return $this->picture;
	}

	public function setPicture(string $picture) {
		$this->picture = $picture;
	}

	public function getGender() {
		return $this->gender;
	}

	public function setGender(string $gender) {
		$this->gender = $gender;
	}


	public function verifyPass(string $passVerif){
		return password_verify($passVerif, $this->getPassword());
	}

	// public function verifyEmail(string $emailVerif){
	// 	$status = false;
	// 	if($emailVerif === $this->getEmail()){
	// 		$status = true;
	// 	}
	// 	return $status;
	// }
}