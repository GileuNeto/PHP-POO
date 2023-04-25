
<pre>
<?php 

require_once "Aluno.php";
require_once "Professor.php";
require_once "Fucionario.php";



$p1 = new Pessoa("x",0,"x");
$p2 = new Aluno("x",0,"x");
$p3 = new Professor("x",0,"x");
$p4 = new Fucionario("x",0,"x");

$p1->setNome("Teste01");
$p2->setNome("Maria");
$p3->setNome("Claudio");
$p4->setNome("Fabiana");

$p2->setCurso("informatica");
$p2->setMatricula(true);
$p2->setIdade(19);
$p2->fazerAnivesario();
$p2->setSexo("F");

$p3->setEspecialidade("Historia");
$p3->mudarEspecialidade("Filosofia");
$p3->setSalario(2000);
$p3->receberAumento(500);
$p3->setIdade(26);
$p3->setSexo("M");

$p4->setsetor("Diretora");
$p4->mudarTrabalho("Supervisora");
$p4->setIdade(35);
$p4->setSexo("F");


print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

?>
</pre>