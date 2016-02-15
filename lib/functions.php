<?php


function db(){
	ORM::configure('mysql:host=localhost;dbname=fake');
	ORM::configure('username', 'root');
	ORM::configure('password', 'simplonco');
	ORM::configure('return_result_sets', true);
	ORM::configure('error_mode', PDO::ERRMODE_WARNING);
}
function assets(){
	return 'http://oriane.dev/krokodile/public/';
}

function d($var){
	echo '<pre>';
	var_dump($var);
	echo '</pre>'; //<pre> permet de rendre le corps plus  lisible
}

function dd($var){
	d($var);
	die();
}