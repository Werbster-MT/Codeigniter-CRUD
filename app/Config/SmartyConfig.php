<?php

namespace Config;

class SmartyConfig {
    // Defines Smarty config pages.
    public static $dirsConfig = [
        'templateDir' => APPPATH . 'Views',
        'compileDir' => APPPATH . 'Templates_c',
        'cacheDir' => APPPATH . 'Cache',
        'configDir' => APPPATH . 'Config'
    ];

    // Defines the files extension php or tpl
    public static $fileExtension = 'php';
}