<?php

include "th.php";
include "td.php";

class classTr {
    public function __toString()
    {
        $classTh = new classTh(['Coluna', 'Outra', 'Alterar', 'Remover']);
        $classTd = new classTd(['Teste', 'Teste']);

        $retorno = "<tr>";
        $retorno .= $classTh;
        $retorno .= "</tr>";
        $retorno .= "<tr>";
        $retorno .= $classTd;
        $retorno .= "</tr>";

        return $retorno;
    }
}
