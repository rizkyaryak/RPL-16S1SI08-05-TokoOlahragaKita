<?php 
class User {
	private $id;
	private $name;
	
	function set Id($id){
		$this->id = $id;
	}
	
	function getId(){
		return $this->id;
	}
}
>