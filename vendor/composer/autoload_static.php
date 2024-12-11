<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98648ecdcb3baae6565841331918a7dc
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98648ecdcb3baae6565841331918a7dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98648ecdcb3baae6565841331918a7dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98648ecdcb3baae6565841331918a7dc::$classMap;

        }, null, ClassLoader::class);
    }
}