<?php
namespace WebApp\Tools;

class InitApp
{
    public function __construct()
    {
        \WebApp\Controllers\Example::index();
    }
}