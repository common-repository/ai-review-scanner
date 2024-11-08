<?php

namespace AIReviewScanner\Ajax;

if (! defined('ABSPATH')) {
    exit;
}

use AIReviewScanner\WPBones\Foundation\WordPressAjaxServiceProvider as ServiceProvider;

class ArsAjax extends ServiceProvider
{

  /**
   * List of the ajax actions executed by both logged and not logged users.
   * Here you will used a methods list.
   *
   * @var array
   */
  protected $trusted = [
    'trusted'
  ];

  /**
   * List of the ajax actions executed only by logged in users.
   * Here you will used a methods list.
   *
   * @var array
   */
  protected $logged = [
    'logged'
  ];

  /**
   * List of the ajax actions executed only by not logged-in user, usually from frontend.
   * Here you will use a methods list.
   *
   * @var array
   */
  protected $notLogged = [
    'notLogged'
  ];

  /**
   * The capability required to execute the action.
   * Of course, this is only for logged-in users.
   *
   * @var string
   */
  protected $capability = '';

  /**
   * The nonce key used to verify the request.
   *
   * @var string
   */
  protected $nonceKey = 'nonce';

  /**
   * The nonce hash used to verify the request.
   *
   * @var string
   */
  protected $nonceHash = '';

  public function trusted()
  {
    $response = "You have clicked Ajax Trusted";

    wp_send_json( $response );
  }

  public function logged()
  {
    $response = "You have clicked Ajax Logged";

    wp_send_json( $response );
  }

  public function notLogged()
  {
    $response = "You have clicked Ajax notLogged";

    wp_send_json( $response );
  }

}
