<?php

include 'tr.php';

class classTable {
    public function __toString()
    {
        $classTr = new classTr();

        $retorno = "<table>";
        $retorno .= $classTr;
        $retorno .= "</table>";

        return $retorno;
    }
}
