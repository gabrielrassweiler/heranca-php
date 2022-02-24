<?php

include './Classes/HtmlPadrao/classHead.php';
include './Classes/Tabela/table.php';

class html {
    function __toString(){
        $classHead = new classHead();
        $classTable = new classTable();

        $retorno = "<!DOCTYPE html>";
        $retorno .= "<html lang='pt-BR'>";

        $retorno .= $classHead;
        $retorno .= $classTable;

        $retorno .= "</html>";

        return $retorno;
    }
}
