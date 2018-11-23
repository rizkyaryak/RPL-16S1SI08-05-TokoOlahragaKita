<?php 
class Customer {
	private $idc;
	private $name;
	private $address;
	private $telp;
	private $email;
	
	function set Id($idc){
		$this->id = $idc;
	}
	
	function getIdc(){
		return $this->idc;
	}
	
	function set name($name){
		$this->name = $name;
	}
	
	function getName(){
		return $this->name;
	}

	function set address($address){
	$this->address = $address;
	}
	
	function getAddress(){
		return $this->address;
	}
	
	function set telp($telp){
	$this->telp = $telp;
	}
	
	function getTelp(){
		return $this->telp;
	}

	function set email($email){
	$this->email = $email;
	}
	
	function getEmail(){
		return $this->email;
	}
}
?>