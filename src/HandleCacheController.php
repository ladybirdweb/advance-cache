<?php

namespace CacheDriver;

use App\Http\Controllers\Controller;

class HandleCacheController extends Controller
{
    public static $configFile;

    public function __construct()
    {
        $this::$configFile = parse_ini_file(__DIR__.'/constant.ini');
    }

    public function modify(array $options)
    {
        $config = '';
        foreach (array_merge($options, self::$configFile) as $key => $option) {
            $config .= "$key=$option\n";
        }
        file_put_contents(__DIR__.'/constant.ini', $config);
    }

    public static function value($constant, $default = null)
    {
        $value = array_key_exists($constant, self::$configFile);

        throw_if(!$value && !$default, "Undefined constant $constant");

        return $value ? self::$configFile[$constant] : $default;
    }
}