<?php

namespace AIReviewScanner\WPBones\Foundation\Log;

if (!defined('ABSPATH')) {
  exit();
}

class Log
{
  /**
   * Singleton instance.
   *
   * @var null
   */
  private static $instance = null;

  public static function getLog()
  {
    if (is_null(self::$instance)) {
      self::$instance = AIReviewScanner()->log();
    }

    return self::$instance;
  }

  public static function __callStatic($name, $arguments)
  {
    self::getLog();

    return call_user_func_array([self::$instance, $name], $arguments);
  }
}
