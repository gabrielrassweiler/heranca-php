<?php

class classMetaCharset {
    private $charset;

    public function __construct($charset)
    {
        $this->charset = $charset;
    }

    public function __toString()
    {
        return "<meta charset='" . $this->charset . "'>";
    }
}