<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcff0c86ff3163fbc5524d03a9021cf6f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcff0c86ff3163fbc5524d03a9021cf6f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcff0c86ff3163fbc5524d03a9021cf6f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
