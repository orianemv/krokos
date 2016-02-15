<?php 

require '../vendor/autoload.php';
require 'functions.php';
require 'classes/Bidule.php';
require 'classes/Router.php';
require 'classes/models/counter.php';


db(); //config acces bdd
$r = new Router();
$r->get(); // si p -> $page



// $foo= new Bidule(); 

// echo ($foo->getTruc());
// d($foo->getTruc($foo));

// $foo->setTruc(false);
// echo '$foo->getTruc() after setting to false';

// d($foo->getTruc());
// d($foo->foo);

// $bar = new Bidule();

// d($foo === $bar);
// d($foo->foo === $bar->foo);
// d($foo->getTruc() === $bar->getTruc());

// $foo->foo = 'huhu';

// d($bar->foo);


// die();
// require '../views/home.php';