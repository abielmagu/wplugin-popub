<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf281434579ef2575f805b11eb0502c17
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PopubPlugin\\' => 12,
        ),
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PopubPlugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf281434579ef2575f805b11eb0502c17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf281434579ef2575f805b11eb0502c17::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf281434579ef2575f805b11eb0502c17::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
