<?php

include 'classMetaCharset.php';
include 'classMetaHttp.php';
include 'classMetaName.php';

class classHead {
    public function __toString()
    {
        $classMetaCharset = new classMetaCharset('UTF-8');
        $classMetaHttp = new classMetaHttp('X-UA-Compatible', 'IE=edge');
        $classMetaName = new classMetaName('viewport', 'width=device-width, initial-scale=1.0');

        $retorno = "<head>";
        $retorno .= $classMetaCharset;
        $retorno .= $classMetaHttp;
        $retorno .= $classMetaName;
        $retorno .= "</head>";

        return $retorno;
    }
}