<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e57ae68342173f156bcefbaae932e0d
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Logic\\' => 6,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Logic\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e57ae68342173f156bcefbaae932e0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e57ae68342173f156bcefbaae932e0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3e57ae68342173f156bcefbaae932e0d::$classMap;

        }, null, ClassLoader::class);
    }
}