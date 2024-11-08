<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c00e613b57c73aa904ba9b8fabd953f
{
    public static $files = array (
        '62b15e16680c158ea02516f33e41c943' => __DIR__ . '/..' . '/wpbones/wpbones/src/helpers.php',
        '5468d174c2f635ba339974cbcdde0362' => __DIR__ . '/../..' . '/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'A' => 
        array (
            'AIReviewScanner\\WPBones\\' => 24,
            'AIReviewScanner\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'AIReviewScanner\\WPBones\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpbones/wpbones/src',
        ),
        'AIReviewScanner\\' => 
        array (
            0 => __DIR__ . '/../..' . '/plugin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c00e613b57c73aa904ba9b8fabd953f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c00e613b57c73aa904ba9b8fabd953f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c00e613b57c73aa904ba9b8fabd953f::$classMap;

        }, null, ClassLoader::class);
    }
}
