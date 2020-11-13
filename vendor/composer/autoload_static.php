<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1a657890fa9a721048ab1fde01a8290
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1a657890fa9a721048ab1fde01a8290::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1a657890fa9a721048ab1fde01a8290::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf1a657890fa9a721048ab1fde01a8290::$classMap;

        }, null, ClassLoader::class);
    }
}
