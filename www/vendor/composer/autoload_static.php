<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit816136e4093f0c8751b599ac524a314c
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Room\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Room\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit816136e4093f0c8751b599ac524a314c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit816136e4093f0c8751b599ac524a314c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit816136e4093f0c8751b599ac524a314c::$classMap;

        }, null, ClassLoader::class);
    }
}
