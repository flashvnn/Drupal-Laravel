<?php namespace Drupal\laravel_example\Example;

class Node extends \Eloquent{
  protected $primaryKey = 'nid';
  protected $table = 'node';


  public function user()
  {
    return $this->hasOne('\\Drupal\\laravel_example\\Example\\User', 'uid');
  }
}
