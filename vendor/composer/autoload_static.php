<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbdd0e08fc6fb4cea76c27bb51fa416ae
{
    public static $files = array (
        'cd4bb0ee0f09227889f016ae97965c66' => __DIR__ . '/..' . '/jiny/database/src/Helpers/Helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jiny\\Database\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jiny\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/jiny/database/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbdd0e08fc6fb4cea76c27bb51fa416ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbdd0e08fc6fb4cea76c27bb51fa416ae::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}