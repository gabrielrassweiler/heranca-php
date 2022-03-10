<?php

include './Classes/HtmlPadrao/classHead.php';
include './Classes/Tabela/table.php';

class html {
    public function __toString() {
        $classHead = new classHead();
        $classTable = new classTable();

        $retorno = "<!DOCTYPE html>";
        $retorno .= "<html lang='pt-BR'>";

        $retorno .= $classHead;
        $retorno .= '<body style="width: 1000px; margin-top: 50px; margin-left: 600px">';
        $retorno .= $this->criaMenuLateral();
        $retorno .= $classTable;
        $retorno .= '</body>';

        $retorno .= "</html>";

        return $retorno;
    }

    public function criaMenuLateral()
    {
        return '
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?pagina=lista_pessoa">Pessoas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pagina=lista_produto">Produtos</a>
                </li>
            </ul>
        ';
    }
}
