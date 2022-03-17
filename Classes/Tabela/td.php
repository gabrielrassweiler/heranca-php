<?php

class classTd {
    private $aItens;

    public function __construct($aItens)
    {
        $this->aItens = $aItens;
    }

    public function __toString()
    {
        // Quando for Pessoas
        if (count($this->aItens) === 3) {        
            $retorno = '';
            foreach($this->aItens as $item) {
                $retorno .= "<tr>";
                $retorno .= "<td>$item[0]</td>";
                $retorno .= "<td>$item[1]</td>";
                $retorno .= "<td>$item[2]</td>";
                $retorno .= "<td><a href='#'><font color='#2a7f08'>Alterar</font></a></td>";
                $retorno .= "<td><a href='#'><font color='#f20808'>Remover</font></a></td>";
                $retorno .= "</tr>";
            }
    
            return $retorno;
        }
        
        // Quando for produto
        $retorno = '';
        foreach($this->aItens as $item) {
            $retorno .= "<tr>";
            $retorno .= "<td>$item[0]</td>";
            $retorno .= "<td>$item[1]</td>";
            $retorno .= "<td>$item[2]</td>";
            $retorno .= "<td>$item[3]</td>";
            $retorno .= "<td><a href='#'><font color='#2a7f08'>Alterar</font></a></td>";
            $retorno .= "<td><a href='#'><font color='#f20808'>Remover</font></a></td>";
            $retorno .= "</tr>";
        }

        return $retorno;
    }
}
