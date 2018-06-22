<?php

$server = "localhost";
$user = "root";
$pass = "";
$banco = "livros";


try {
    $conexao = new PDO("mysql:host=$server;dbname=$banco;", $user, $pass);    
} catch(PDOException $e) {
    echo $e->getMessage();
    exit;
}



// Pegar a p�gina atual por GET
$p = isset($_GET["p"]) ? $_GET["p"] : 1;
// Verifica se a vari�vel t� declarada, sen�o deixa na primeira p�gina como padr�o
if(isset($p)) {
$p = $p;
} else {
$p = 1;
}
// Defina aqui a quantidade m�xima de registros por p�gina.
$qnt = 10;
// O sistema calcula o in�cio da sele��o calculando: 
// (p�gina atual * quantidade por p�gina) - quantidade por p�gina
$inicio = ($p*$qnt) - $qnt;


$stmt = $conexao->prepare("SELECT * FROM livros LIMIT $inicio, $qnt");
$stmt->execute();

while( $f = $stmt->fetch() ) {
   echo utf8_encode($f["titulo"]) . '<br>';
}



// Depois que selecionou todos os nome, pula uma linha para exibir os links(pr�xima, �ltima...)
echo "<br />";

// Faz uma nova sele��o no banco de dados, desta vez sem LIMIT, 
// para pegarmos o n�mero total de registros
$stmt = $conexao->prepare("SELECT COUNT(*) AS total FROM livros");
$stmt->execute();
$total_registros = $stmt->fetch();
$total_registros = $total_registros['total'];

// O comando ceil() arredonda "para cima" o valor
$pags = ceil($total_registros/$qnt);

// N�mero m�ximos de bot�es de pagina��o
$max_links = 3;
// Exibe o primeiro link "primeira p�gina", que n�o entra na contagem acima(3)
echo "<a href=\"?p=1\" target=\"_self\">primeira pagina</a> ";
// Cria um for() para exibir os 3 links antes da p�gina atual
for($i = $p-$max_links; $i <= $p-1; $i++) {
// Se o n�mero da p�gina for menor ou igual a zero, n�o faz nada
// (afinal, n�o existe p�gina 0, -1, -2..)
if($i <=0) {
//faz nada
// Se estiver tudo OK, cria o link para outra p�gina
} else {
echo "<a href=\"?p=".$i."\" target=\"_self\">".$i."</a> ";
}
}
// Exibe a p�gina atual, sem link, apenas o n�mero
echo $p." ";
// Cria outro for(), desta vez para exibir 3 links ap�s a p�gina atual
for($i = $p+1; $i <= $p+$max_links; $i++) {

if($i > $pags)
{
//faz nada
}
// Se tiver tudo Ok gera os links.
else
{
echo "<a href=\"?p=".$i."\" target=\"_self\">".$i."</a> ";
}
}
// Exibe o link "�ltima p�gina"
echo "<a href=\"?p=".$pags."\" target=\"_self\">ultima pagina</a> ";
