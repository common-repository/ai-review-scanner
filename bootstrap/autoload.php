<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any classes "manually". Feels great to relax.
|
*/

require_once __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Plugin Static class
|--------------------------------------------------------------------------
|
| We will use this static class to keep global the plugin information
|
*/

final class AIReviewScanner
{
    public const TEXTDOMAIN = 'ai-review-scanner';
    public static $plugin;
    public static $start;
}

AIReviewScanner::$plugin = require_once __DIR__ . '/plugin.php';
AIReviewScanner::$start = microtime(true);

// Commodity function to get the plugin instance
if (!function_exists('AIReviewScanner')) {
    /**
     * Return the instance of plugin.
     *
     * @return Plugin
     */
    function AIReviewScanner()
    {
        return AIReviewScanner::$plugin;
    }
}
