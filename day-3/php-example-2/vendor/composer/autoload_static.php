<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit433451ad48d908cd537f69d972882416
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit433451ad48d908cd537f69d972882416::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit433451ad48d908cd537f69d972882416::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit433451ad48d908cd537f69d972882416::$classMap;

        }, null, ClassLoader::class);
    }
}
