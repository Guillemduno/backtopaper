<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6dda3db1bcf3472b5f78432b8bc4a4ef
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

        spl_autoload_register(array('ComposerAutoloaderInit6dda3db1bcf3472b5f78432b8bc4a4ef', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6dda3db1bcf3472b5f78432b8bc4a4ef', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6dda3db1bcf3472b5f78432b8bc4a4ef::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
