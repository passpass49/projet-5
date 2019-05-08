<?php
namespace Blog\config;
/**
 * The autoloading class.
 */
class Autoloader
{
    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }
    public static function autoload($class)
    {
        $class = str_replace('Blog', '', $class);
        $class = str_replace('\\', '/', $class);
        include ''.$class.'.php';
    }
}

