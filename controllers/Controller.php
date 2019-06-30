<?php
namespace Controllers;

class Controller
{
    protected function render($pathView)
    {
        $pathTemplate = dirname(__DIR__).'\views\\';
        ob_start();
        include $pathTemplate . 'template\header.php';
        include dirname(__DIR__).'\views\\'.$pathView.'.php';
        include $pathTemplate . 'template\footer.php';
        ob_end_flush();

    }

}