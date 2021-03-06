<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18ab9e3e3481e77ae3844a8e24b01880
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laminas\\Ldap\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laminas\\Ldap\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-ldap/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18ab9e3e3481e77ae3844a8e24b01880::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18ab9e3e3481e77ae3844a8e24b01880::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
