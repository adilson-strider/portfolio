<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit863f79d305b8f13f2b94e87b35f27b4e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit863f79d305b8f13f2b94e87b35f27b4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit863f79d305b8f13f2b94e87b35f27b4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit863f79d305b8f13f2b94e87b35f27b4e::$classMap;

        }, null, ClassLoader::class);
    }
}