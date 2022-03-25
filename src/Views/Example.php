<?php 

namespace WebApp\Views;

class Example
{
    /**
     * Echo values in html
     * @param String $teste
     */
    static function index(String $test)
    {
        echo "<h1>String: ".$test."</h1>";
    }
}