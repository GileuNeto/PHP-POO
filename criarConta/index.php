<pre>
<?php

require_once "ContaBanco.php";

$p1 = new ContaBanco(); //jubileu
$p2 = new ContaBanco(); //creuza
$p1->setNumConta(111);
$p1->abrirconta("CC");
$p1->setDono("Jubileu");
$p2->setNumConta(222);
$p2->abrirconta("CP");
$p2->setDono("Creuza");




print_r($p1);
print_r($p2);
?>
</pre>