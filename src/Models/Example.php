<?php 

namespace WebApp\Models;

class Example
{
    private String $test;

    /**
     * Constructor of class
     * @param String $teste 
     */
    public function __construct(String $teste)
    {
        $this->test = $teste;
    }


    /**
     * Return the test value
     * @return String
     */
    public function getTest() : String
    {
        return $this->test;
    }
}