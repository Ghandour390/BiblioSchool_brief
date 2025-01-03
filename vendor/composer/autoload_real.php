<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbefa9c52fbb5de5a3f64f38230fd9abd
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

        spl_autoload_register(array('ComposerAutoloaderInitbefa9c52fbb5de5a3f64f38230fd9abd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbefa9c52fbb5de5a3f64f38230fd9abd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbefa9c52fbb5de5a3f64f38230fd9abd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
