<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a925aa27d7e2f5676c9e8edbab0c8cc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'H' => 
        array (
            'Hubs\\' => 5,
        ),
        'G' => 
        array (
            'Geeks\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Hubs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/srcTest',
        ),
        'Geeks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a925aa27d7e2f5676c9e8edbab0c8cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a925aa27d7e2f5676c9e8edbab0c8cc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
