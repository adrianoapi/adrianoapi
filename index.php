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



// Pegar a página atual por GET
$p = isset($_GET["p"]) ? $_GET["p"] : 1;
// Verifica se a variável tá declarada, senão deixa na primeira página como padrão
if(isset($p)) {
$p = $p;
} else {
$p = 1;
}
// Defina aqui a quantidade máxima de registros por página.
$qnt = 10;
// O sistema calcula o início da seleção calculando: 
// (página atual * quantidade por página) - quantidade por página
$inicio = ($p*$qnt) - $qnt;


$stmt = $conexao->prepare("SELECT * FROM livros LIMIT $inicio, $qnt");
$stmt->execute();

while( $f = $stmt->fetch() ) {
   echo utf8_encode($f["titulo"]) . '<br>';
}



// Depois que selecionou todos os nome, pula uma linha para exibir os links(próxima, última...)
echo "<br />";

// Faz uma nova seleção no banco de dados, desta vez sem LIMIT, 
// para pegarmos o número total de registros
$stmt = $conexao->prepare("SELECT COUNT(*) AS total FROM livros");
$stmt->execute();
$total_registros = $stmt->fetch();
$total_registros = $total_registros['total'];

// O comando ceil() arredonda "para cima" o valor
$pags = ceil($total_registros/$qnt);

// Número máximos de botões de paginação
$max_links = 3;
// Exibe o primeiro link "primeira página", que não entra na contagem acima(3)
echo "<a href=\"?p=1\" target=\"_self\">primeira pagina</a> ";
// Cria um for() para exibir os 3 links antes da página atual
for($i = $p-$max_links; $i <= $p-1; $i++) {
// Se o número da página for menor ou igual a zero, não faz nada
// (afinal, não existe página 0, -1, -2..)
if($i <=0) {
//faz nada
// Se estiver tudo OK, cria o link para outra página
} else {
echo "<a href=\"?p=".$i."\" target=\"_self\">".$i."</a> ";
}
}
// Exibe a página atual, sem link, apenas o número
echo $p." ";
// Cria outro for(), desta vez para exibir 3 links após a página atual
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
// Exibe o link "última página"
echo "<a href=\"?p=".$pags."\" target=\"_self\">ultima pagina</a> ";
