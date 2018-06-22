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
    // Obtém o número total de página
    $numero_de_paginas = floor( $total_artigos / $artigos_por_pagina );
    
    // Obtém a página atual
    $pagina_atual = 1;
    
    // Atualiza a página atual se tiver o parâmetro pagina=n
    if ( ! empty( $_GET['pagina'] ) ) {
        $pagina_atual = (int) $_GET['pagina'];
    }
    
    // Vamos preencher essa variável com a paginação
    $paginas = null;
    
    // Primeira página
    $paginas .= " <a href='?pagina=0'>Home</a> ";
    
    // Faz o loop da paginação
    // $pagina_atual - 1 da a possibilidade do usuário voltar
    for ( $i = ( $pagina_atual - 1 ); $i < ( $pagina_atual - 1 ) + $offset; $i++ ) {
        
        // Eliminamos a primeira página (que seria a home do site)
        if ( $i < $numero_de_paginas && $i > 0 ) {
            // A página atual
            $página = $i;
            
            // O estilo da página atual
            $estilo = null;
            
            // Verifica qual dos números é a página atual
            // E cria um estilo extremamente simples para diferenciar
            if ( $i == @$parametros[1] ) {
                $estilo = ' style="color:red;" ';
            }
            
            // Inclui os links na variável $paginas
            $paginas .= " <a $estilo href='?pagina=$página'>$página</a> ";
        }
        
    } // for

    $paginas .= " <a href='?pagina=$numero_de_paginas'>Última</a> ";
    
    // Retorna o que foi criado
    return $paginas;
    
}

$tabela = "livros";
$artigos_por_pagina = 9;

// Página atual onde vamos começar a mostrar os valores
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

// Exibimos a paginação
echo paginacao( $total_artigos, $artigos_por_pagina, 5 );