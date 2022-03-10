<?php

include 'tr.php';

class classTable {
    public function __toString()
    {
        $classTr = new classTr();

        $retorno = "<table class='table table-striped'>";
        $retorno .= $classTr;
        $retorno .= "</table>";

        return $retorno;
    }
}
