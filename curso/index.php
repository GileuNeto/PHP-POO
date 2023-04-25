<pre>
<?php 

require_once "Video.php";
require_once "Usuario.php";
require_once "Visualizacao.php";

$v[0] = new Video("Aula 01 de POO");
$v[1] = new Video("Aula 12 de Php");
$v[2] = new Video("Aula 15 de HTML.5");

$g[0] = new Usuario("Eduardo", 19, "M", "edu@gmail.com");
$g[1] = new Usuario("Creuza", 12, "F", "creuzinha@gmail.com");
$g[1] = new Usuario("Luan", 26, "M", "luangameplays@gmail.com");

$vis[0] = new Visualizacao($g[0], $v[2]);
$vis[1] = new Visualizacao($g[0], $v[1]);

$vis[0]->avaliar();
$vis[1]->avaliarPorc(85);

print_r($v);
print_r($g);


print_r($vis);

?>
</pre>