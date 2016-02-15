<?php

class Router{
	private $defaultPage = 'home';

	public function get(){
		if ($this->detectAjax()){
			return $this->incrementCounter($_GET['id']);
		}
		if(isset($_GET['p'])){
			$page = $_GET['p'];
		} else {
			$page = $this->defaultPage;
		}
		require BASE . 'views/'.$page.'.php';
		}	

	public function detectAjax(){
		if(isset($_GET['ajax'])){
				return true;
		}
		return false;
	}

	public function incrementCounter($id){
		$C = new Counter();
		$newvalue = $C->increment($id);

		echo json_encode(['id'=>$id, 'count'=>$newvalue]);
	}
}