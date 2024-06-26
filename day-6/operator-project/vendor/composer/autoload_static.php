<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e81859dd9e3ca7796bb0a47a27aeb7e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e81859dd9e3ca7796bb0a47a27aeb7e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e81859dd9e3ca7796bb0a47a27aeb7e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e81859dd9e3ca7796bb0a47a27aeb7e::$classMap;

        }, null, ClassLoader::class);
    }
}
