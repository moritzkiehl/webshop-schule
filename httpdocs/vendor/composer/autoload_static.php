<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit452c83e415a9e8eb6cbb99b22be0badd
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MoritzKiehl\\Webshop\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MoritzKiehl\\Webshop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit452c83e415a9e8eb6cbb99b22be0badd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit452c83e415a9e8eb6cbb99b22be0badd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}