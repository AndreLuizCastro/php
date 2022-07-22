<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitff7d636668cf5b5c9f1dea1f9bcbb9a2
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitff7d636668cf5b5c9f1dea1f9bcbb9a2', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitff7d636668cf5b5c9f1dea1f9bcbb9a2', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitff7d636668cf5b5c9f1dea1f9bcbb9a2::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
