<?php

class classTd {
    private $aItens;

    public function __construct($aItens)
    {
        $this->aItens = $aItens;
    }

    public function __toString()
    {
        $retorno = '';
        foreach($this->aItens as $item) {
            $retorno .= "<td>$item</td>";
        }
        $retorno .= "<td><a href='#'><font color='#2a7f08'>Alterar</font></a></td>";
        $retorno .= "<td><a href='#'><font color='#f20808'>Remover</font></a></td>";

        return $retorno;
    }
}
