<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit56d8814e63a7297ca80840e5ff9dc534
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit56d8814e63a7297ca80840e5ff9dc534', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit56d8814e63a7297ca80840e5ff9dc534', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit56d8814e63a7297ca80840e5ff9dc534::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
