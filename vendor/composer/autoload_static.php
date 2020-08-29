<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c4458dc87f3f83b2bab7ecef747012a
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c4458dc87f3f83b2bab7ecef747012a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c4458dc87f3f83b2bab7ecef747012a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
