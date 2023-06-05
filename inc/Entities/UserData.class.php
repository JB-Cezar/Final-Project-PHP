<?php

class UserData{
    private int $id = 0;
    private string $name = "";
    private string $email = "";
    private string $password = "";

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

	public function getEmail() {
		return $this->email;
	}

	public function setEmail(string $email) {
		$this->email = $email;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword(string $password) {
		$this->password = $password;
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