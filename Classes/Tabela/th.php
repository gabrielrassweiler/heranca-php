<?php

class classTh {
    private $aColunas;

    public function __construct($aColunas)
    {
        $this->aColunas = $aColunas;
    }

    public function __toString()
    {
        $retorno = '';
        foreach($this->aColunas as $coluna) {
            $retorno .= "<th scope='col'>$coluna</th>";
        }

        return $retorno;
    }
}
