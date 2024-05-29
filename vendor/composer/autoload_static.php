<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite566aecb3c1fe363afb07d8470ae9bab
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'T' => 
        array (
            'Tongtrankien1605\\FpolyBaseWeb3014\\' => 34,
        ),
        'R' => 
        array (
            'Rakit\\Validation\\' => 17,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Cache\\' => 10,
        ),
        'D' => 
        array (
            'Doctrine\\Deprecations\\' => 22,
            'Doctrine\\DBAL\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'Tongtrankien1605\\FpolyBaseWeb3014\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Rakit\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/validation/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Doctrine\\Deprecations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/deprecations/lib/Doctrine/Deprecations',
        ),
        'Doctrine\\DBAL\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/dbal/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite566aecb3c1fe363afb07d8470ae9bab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite566aecb3c1fe363afb07d8470ae9bab::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite566aecb3c1fe363afb07d8470ae9bab::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite566aecb3c1fe363afb07d8470ae9bab::$classMap;

        }, null, ClassLoader::class);
    }
}