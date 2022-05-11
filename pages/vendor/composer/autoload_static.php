<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0e0b1d2f05ea88b2bc366649c82aa69
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0e0b1d2f05ea88b2bc366649c82aa69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0e0b1d2f05ea88b2bc366649c82aa69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0e0b1d2f05ea88b2bc366649c82aa69::$classMap;

        }, null, ClassLoader::class);
    }
}
