<?php

// require("autoload.php");

// use \YYDH\Animal;
// use \YYDH\Human;
// use \Gondr\Human as H2;


// $h2 = new Human("YYDH",20);

// $h = new H2("Gondr",13);

// echo $h->getName();

// echo $h2->introduce();

// $a = new Animal();

// echo $a->name;

$arr = ['a'=>3, 'hello'=>"Hello world", 'c'=>20];

extract($arr);

echo $hello;