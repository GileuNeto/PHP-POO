<pre>
    <?php 
        require_once "Visitante.php";
        require_once "Aluno.php";
        require_once "Bolsista.php";


        $v1 = new Visitante("x",0,"x");
        $v1->setNome("Eduardo");
        $v1->setIdade("19");
        $v1->setSexo("M");

        $a1 = new Aluno("x",0,"x");
        $a1->setNome("Pedro");
        $a1->setMatricula(11111);
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informatica");
        $a1->pagarMensalidade(100);

        $b1 = new Bolsista("x",0,"x");
        $b1->setNome("Jubileu");
        $b1->setMatricula(11112);
        $b1->setIdade(15);
        $b1->setSexo("M");
        $b1->setBolsa(12.5);
        $b1->setCurso("EletroMecanica");
        $b1->pagarMensalidade(100);

        print_r($v1);
        print_r($a1);
        print_r($b1);



    ?>
</pre>
