<?php 
    include "html.php";
    include "Conexao/index.php";

    // Cria conexao com o banco
    $conexao = new conexao();

    // Html com todo o conteudo na pagina
    $html = new html();
    echo $html;
?>