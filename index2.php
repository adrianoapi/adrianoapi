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


function paginacao( 
    $total_artigos = 0, 
    $artigos_por_pagina = 10, 
    $offset = 5
) {    
    // Obt�m o n�mero total de p�gina
    $numero_de_paginas = floor( $total_artigos / $artigos_por_pagina );
    
    // Obt�m a p�gina atual
    $pagina_atual = 1;
    
    // Atualiza a p�gina atual se tiver o par�metro pagina=n
    if ( ! empty( $_GET['pagina'] ) ) {
        $pagina_atual = (int) $_GET['pagina'];
    }
    
    // Vamos preencher essa vari�vel com a pagina��o
    $paginas = null;
    
    // Primeira p�gina
    $paginas .= " <a href='?pagina=0'>Home</a> ";
    
    // Faz o loop da pagina��o
    // $pagina_atual - 1 da a possibilidade do usu�rio voltar
    for ( $i = ( $pagina_atual - 1 ); $i < ( $pagina_atual - 1 ) + $offset; $i++ ) {
        
        // Eliminamos a primeira p�gina (que seria a home do site)
        if ( $i < $numero_de_paginas && $i > 0 ) {
            // A p�gina atual
            $p�gina = $i;
            
            // O estilo da p�gina atual
            $estilo = null;
            
            // Verifica qual dos n�meros � a p�gina atual
            // E cria um estilo extremamente simples para diferenciar
            if ( $i == @$parametros[1] ) {
                $estilo = ' style="color:red;" ';
            }
            
            // Inclui os links na vari�vel $paginas
            $paginas .= " <a $estilo href='?pagina=$p�gina'>$p�gina</a> ";
        }
        
    } // for

    $paginas .= " <a href='?pagina=$numero_de_paginas'>�ltima</a> ";
    
    // Retorna o que foi criado
    return $paginas;
    
}

$tabela = "livros";
$artigos_por_pagina = 9;

// P�gina atual onde vamos come�ar a mostrar os valores
$pagina_atual = ! empty( $_GET['pagina'] ) ? (int) $_GET['pagina'] : 0;
$pagina_atual = $pagina_atual * $artigos_por_pagina;

$stmt = $conexao->prepare("SELECT * FROM $tabela LIMIT $pagina_atual,$artigos_por_pagina");
$stmt->execute();

while( $f = $stmt->fetch() ) {
   echo utf8_encode($f["titulo"]) . '<br>';
}

// Pegamos o valor total de artigos em uma consulta sem limite
$total_artigos = $conexao->prepare("SELECT COUNT(*) AS total FROM $tabela");
$total_artigos->execute();
$total_artigos = $total_artigos->fetch();
$total_artigos = $total_artigos['total'];

// Exibimos a pagina��o
echo paginacao( $total_artigos, $artigos_por_pagina, 5 );