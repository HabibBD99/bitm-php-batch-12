<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33797d26e86f565b19d3561ee9a9459a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit33797d26e86f565b19d3561ee9a9459a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33797d26e86f565b19d3561ee9a9459a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33797d26e86f565b19d3561ee9a9459a::$classMap;

        }, null, ClassLoader::class);
    }
}
