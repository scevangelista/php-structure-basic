<?php 
namespace WebApp\Controllers;

use WebApp\Models\Example as ExampleModel;
use WebApp\Views\Example as ExampleView;

class Example
{
    /**
     * Test the application
     */
    public static function index() 
    {
        $exampleTest = new ExampleModel('Text Example');
        ExampleView::index($exampleTest->getTest());
    }
}