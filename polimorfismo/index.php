<pre>
<?php

require_once "Mamifero.php";
require_once "Reptil.php";
require_once "Ave.php";
require_once "Peixe.php";
require_once "Cachorro.php";
require_once "Canguru.php";
require_once "Arara.php";
require_once "Cobra.php";
require_once "Tartaruga.php";

$m = new Mamifero();
$r = new Reptil();
$a = new Ave();
$c = new Canguru();
$d = new Cachorro();
$t= new Tartaruga();

$m->setPeso(33.5);
$m->locomover();
$r->locomover();
$a->locomover();

$c->locomover();
$d->locomover();
$t->locomover();

$d->emitirSom();

?>
</pre>