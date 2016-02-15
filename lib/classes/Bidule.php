<?php
class Bidule{
	private $truc= true;

	public $foo = 'tut';

	public function getTruc(){
		return $this->truc;
	}
	public function setTruc($val){
		$this->truc = $val;
	}
	public function faire(){
		$res= $this->getTruc();
	}

}