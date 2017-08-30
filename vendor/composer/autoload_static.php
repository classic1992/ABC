<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b05235d4e2c1c2870dbc838d29986ca
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Stormpath\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Cache\\' => 10,
        ),
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
        'C' => 
        array (
            'Cache\\Taggable\\' => 15,
            'Cache\\Hierarchy\\' => 16,
            'Cache\\Adapter\\Void\\' => 19,
            'Cache\\Adapter\\Redis\\' => 20,
            'Cache\\Adapter\\PHPArray\\' => 23,
            'Cache\\Adapter\\Memcached\\' => 24,
            'Cache\\Adapter\\Common\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Stormpath\\' => 
        array (
            0 => __DIR__ . '/..' . '/stormpath/sdk/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
        'Cache\\Taggable\\' => 
        array (
            0 => __DIR__ . '/..' . '/cache/taggable-cache',
        ),
        'Cache\\Hierarchy\\' => 
        array (
            0 => __DIR__ . '/..' . '/cache/hierarchical-cache',
        ),
        'Cache\\Adapter\\Void\\' => 
        array (
            0 => __DIR__ . '/..' . '/cache/void-adapter',
        ),
        'Cache\\Adapter\\Redis\\' => 
        array (
            0 => __DIR__ . '/..' . '/cache/redis-adapter',
        ),
        'Cache\\Adapter\\PHPArray\\' => 
        array (
            0 => __DIR__ . '/..' . '/cache/array-adapter',
        ),
        'Cache\\Adapter\\Memcached\\' => 
        array (
            0 => __DIR__ . '/..' . '/cache/memcached-adapter',
        ),
        'Cache\\Adapter\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/cache/adapter-common',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static $classMap = array (
        'BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/Exceptions/BeforeValidException.php',
        'ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/Exceptions/ExpiredException.php',
        'JWT' => __DIR__ . '/..' . '/firebase/php-jwt/Authentication/JWT.php',
        'SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/Exceptions/SignatureInvalidException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b05235d4e2c1c2870dbc838d29986ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b05235d4e2c1c2870dbc838d29986ca::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2b05235d4e2c1c2870dbc838d29986ca::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2b05235d4e2c1c2870dbc838d29986ca::$classMap;

        }, null, ClassLoader::class);
    }
}