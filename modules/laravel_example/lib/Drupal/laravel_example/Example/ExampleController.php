<?php
/**
 * @file
 * Contains an example controller.
 */

namespace Drupal\laravel_example\Example;
use Drupal\page_controller\Controller\PageController;

/*\Event::listen('illuminate.query', function($query)
{
    dpm($query);
});*/

/**
 * Class ExampleController
 *
 * @package Drupal\laravel_example\Example
 */
class ExampleController extends PageController {
  /**
   * Example view callback.
   */
  public function myPageControllerViewCallback($arg1, $arg2) {

    return drupal_get_form('form_example_tutorial_2');
  }
}
