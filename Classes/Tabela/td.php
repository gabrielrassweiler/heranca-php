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

        return $retorno;
    }
}
