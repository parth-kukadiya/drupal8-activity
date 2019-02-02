<?php
/**
 * @file providing the service that say hello world and hello 'given name'.
 *
 */
namespace  Drupal\activity;

class NodeDisplay {
  
  protected $render_text;
  
  public function __construct() {
  
    $this->render_text = 'Hello World!';
  
  }
  
  public function sayHello($name = ''){
  
    if (empty($name)) {
  
      return $this->render_text;
  
    }
  
    else {
  
      return "Hello " . $name . "!";
    }
  
  }
}