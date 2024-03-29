<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9174f9b60d5a000b5cfa0142d2e24ffb
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
        'F' => 
        array (
            'FrameworkAULA\\' => 14,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
        'FrameworkAULA\\' => 
        array (
            0 => __DIR__ . '/..' . '/frameworkAULA',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9174f9b60d5a000b5cfa0142d2e24ffb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9174f9b60d5a000b5cfa0142d2e24ffb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
