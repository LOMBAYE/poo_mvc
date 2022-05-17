<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit625f4401a1d925f0a86edf39792ae69e
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

        spl_autoload_register(array('ComposerAutoloaderInit625f4401a1d925f0a86edf39792ae69e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit625f4401a1d925f0a86edf39792ae69e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit625f4401a1d925f0a86edf39792ae69e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}