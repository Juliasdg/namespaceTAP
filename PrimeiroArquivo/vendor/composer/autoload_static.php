<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43c7b864b4f6442cd94e921783c3262a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit43c7b864b4f6442cd94e921783c3262a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43c7b864b4f6442cd94e921783c3262a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit43c7b864b4f6442cd94e921783c3262a::$classMap;

        }, null, ClassLoader::class);
    }
}
