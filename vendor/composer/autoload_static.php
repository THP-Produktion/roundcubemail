<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91dc528632b4051bca58abfc257991fa
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Roundcube\\Composer' => 
            array (
                0 => __DIR__ . '/..' . '/roundcube/plugin-installer/src',
            ),
        ),
        'P' => 
        array (
            'PEAR' => 
            array (
                0 => __DIR__ . '/..' . '/pear/pear_exception',
            ),
        ),
        'N' => 
        array (
            'Net' => 
            array (
                0 => __DIR__ . '/..' . '/pear/net_idna2',
                1 => __DIR__ . '/..' . '/pear/net_smtp',
                2 => __DIR__ . '/..' . '/pear/net_socket',
            ),
        ),
        'M' => 
        array (
            'Mail' => 
            array (
                0 => __DIR__ . '/..' . '/pear/mail_mime',
            ),
        ),
        'C' => 
        array (
            'Crypt' => 
            array (
                0 => __DIR__ . '/..' . '/pear/crypt_gpg',
            ),
            'Console' => 
            array (
                0 => __DIR__ . '/..' . '/pear/console_commandline',
                1 => __DIR__ . '/..' . '/pear/console_getopt',
            ),
        ),
        'A' => 
        array (
            'Auth' => 
            array (
                0 => __DIR__ . '/..' . '/pear/auth_sasl',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/pear/pear-core-minimal/src',
    );

    public static $classMap = array (
        'Net_Sieve' => __DIR__ . '/..' . '/pear/net_sieve/Sieve.php',
        'SieveTest' => __DIR__ . '/..' . '/pear/net_sieve/tests/SieveTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91dc528632b4051bca58abfc257991fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91dc528632b4051bca58abfc257991fa::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit91dc528632b4051bca58abfc257991fa::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInit91dc528632b4051bca58abfc257991fa::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInit91dc528632b4051bca58abfc257991fa::$classMap;

        }, null, ClassLoader::class);
    }
}
