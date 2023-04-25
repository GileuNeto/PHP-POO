<?php 
require_once "Mamifero.php";
//Classe lobo, herda mamifero pois é uma subClasse 
class Lobo extends Mamifero{
    function emitirSom()
    {
        echo "<p>Auuuuuuuuuu</p>";
    }
}