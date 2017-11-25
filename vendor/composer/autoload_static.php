<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54c64aa3fff50a07b50e941ee15525a3
{
    public static $files = array (
        '5a6c01c6b890a6f9e22f6a75f33535c3' => __DIR__ . '/..' . '/loilo/fuse/src/Bitap/matched_indices.php',
        'cb0217d87bec02191ba2d2597c16f1a7' => __DIR__ . '/..' . '/loilo/fuse/src/Bitap/pattern_alphabet.php',
        '07e8a1a5effbc28d6b452bec2948bb65' => __DIR__ . '/..' . '/loilo/fuse/src/Bitap/regex_search.php',
        'd28900056f66e13fa4e269caa8a4cd1c' => __DIR__ . '/..' . '/loilo/fuse/src/Bitap/score.php',
        '7679d68ce06dec48d343f560108145d2' => __DIR__ . '/..' . '/loilo/fuse/src/Bitap/search.php',
        'ae18f0d7f1399203de0fc444e860fdd9' => __DIR__ . '/..' . '/loilo/fuse/src/Helpers/deep_value.php',
        '59ff57762b50378bb54688b7561c609b' => __DIR__ . '/..' . '/loilo/fuse/src/Helpers/is_list.php',
    );

    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kevinfiol\\fuzzget\\' => 18,
        ),
        'F' => 
        array (
            'Fuse\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kevinfiol\\fuzzget\\' => 
        array (
            0 => __DIR__ . '/..' . '/kevinfiol/fuzzget/src',
        ),
        'Fuse\\' => 
        array (
            0 => __DIR__ . '/..' . '/loilo/fuse/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54c64aa3fff50a07b50e941ee15525a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54c64aa3fff50a07b50e941ee15525a3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
