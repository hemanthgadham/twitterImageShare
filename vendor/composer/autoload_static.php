<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit047b46491ed559cc408fd8c7fb2dde6b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit047b46491ed559cc408fd8c7fb2dde6b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit047b46491ed559cc408fd8c7fb2dde6b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}