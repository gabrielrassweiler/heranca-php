<?php

include 'classMetaCharset.php';
include 'classMetaHttp.php';
include 'classMetaName.php';
include 'classTitle.php';

class classHead {
    public function __toString()
    {
        $classMetaCharset = new classMetaCharset('UTF-8');
        $classMetaHttp = new classMetaHttp('X-UA-Compatible', 'IE=edge');
        $classMetaName = new classMetaName('viewport', 'width=device-width, initial-scale=1.0');
        $classMetaTitle = new classTitle('Trabalho');

        $retorno = "<head>";
        $retorno .= $classMetaCharset;
        $retorno .= $classMetaHttp;
        $retorno .= $classMetaName;
        $retorno .= $classMetaTitle;
        $retorno .= '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
        $retorno .= "</head>";

        return $retorno;
    }
}