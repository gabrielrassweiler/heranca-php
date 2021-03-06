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
        $retorno .= "<th scope='col'>Alterar</th>";
        $retorno .= "<th scope='col'>Remover</th>";

        return $retorno;
    }
}
