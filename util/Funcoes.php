<?php

class Funcoes
{

    public static function formatarDataBR($data)
    {
        return date('d/m/Y', strtotime($data));
    }

    public static function explodeUrl($dado)
    {
        $url = explode("/", $dado);
        return $url[4];
    }
}
