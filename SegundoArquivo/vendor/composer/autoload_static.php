<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4537a9262b1f960fa6b064867f493a78
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4537a9262b1f960fa6b064867f493a78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4537a9262b1f960fa6b064867f493a78::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4537a9262b1f960fa6b064867f493a78::$classMap;

        }, null, ClassLoader::class);
    }
}
