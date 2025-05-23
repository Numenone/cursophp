<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit515f1b42c3d9a11d32bbdee0e3128e2b
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit515f1b42c3d9a11d32bbdee0e3128e2b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit515f1b42c3d9a11d32bbdee0e3128e2b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit515f1b42c3d9a11d32bbdee0e3128e2b::$classMap;

        }, null, ClassLoader::class);
    }
}
