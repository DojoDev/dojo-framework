<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9eadebad2bfb9c45810f043861bd1564
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\' => 4,
        ),
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\' => 
        array (
            0 => __DIR__ . '/..' . '/son',
        ),
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9eadebad2bfb9c45810f043861bd1564::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9eadebad2bfb9c45810f043861bd1564::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
