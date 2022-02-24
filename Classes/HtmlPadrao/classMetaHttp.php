<?php

class classMetaHttp {
    private $http;
    private $content;

    public function __construct($http, $content)
    {
        $this->http = $http;
        $this->content = $content;
    }

    public function __toString()
    {
        return "<meta http-equiv='" . $this->http . "' content= '" . $this->content . "'>";
    }
}