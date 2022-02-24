<?php

include "th.php";
include "td.php";

class classTr {
    public function __toString()
    {
        $classTh = new classTh(['Coluna', 'Outra']);
        $classTd = new classTd(['Teste']);

        $retorno = "<tr>";
        $retorno .= $classTh;
        $retorno .= "</tr>";
        $retorno .= "<tr>";
        $retorno .= $classTd;
        $retorno .= "</tr>";

        return $retorno;
    }
}
