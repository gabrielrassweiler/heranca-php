<?php

include './Classes/HtmlPadrao/classHead.php';
include './Classes/Tabela/table.php';

class html {
    public function __toString() {
        $classHead = new classHead();
        $classTable = new classTable();

        $retorno = "<!DOCTYPE html>";
        $retorno .= "<html lang='pt-BR' style='background-color: #eaeaea;'>";

        $retorno .= $classHead;
        $retorno .= '<body style="margin: 100px 300px; align-items: center">';
        $retorno .= $this->criaMenu();
        $retorno .= $classTable;
        $retorno .= '</body>';

        $retorno .= "</html>";

        return $retorno;
    }

    public function criaMenu()
    {
        return '
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="?pagina=lista_pessoa">Pessoas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pagina=lista_produto">Produtos</a>
                </li>
            </ul>
        ';
    }
}
