<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3a28e97b83c577dc7e1d38c8400c1b3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite3a28e97b83c577dc7e1d38c8400c1b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3a28e97b83c577dc7e1d38c8400c1b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite3a28e97b83c577dc7e1d38c8400c1b3::$classMap;

        }, null, ClassLoader::class);
    }
}