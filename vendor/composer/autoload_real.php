<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd373122604f43dee6cf3a24d827a7ca1
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

        spl_autoload_register(array('ComposerAutoloaderInitd373122604f43dee6cf3a24d827a7ca1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd373122604f43dee6cf3a24d827a7ca1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd373122604f43dee6cf3a24d827a7ca1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
