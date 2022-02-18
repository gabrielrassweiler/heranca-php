<?php

include 'classHead.php';

class html {
    function __toString(){
        $classHead = new classHead();

        $retorno = "<!DOCTYPE html>";
        $retorno .= "<html lang='pt-BR'>";
        $retorno .= $classHead;
        $retorno .= "</html>";

        return $retorno;
    }
}
