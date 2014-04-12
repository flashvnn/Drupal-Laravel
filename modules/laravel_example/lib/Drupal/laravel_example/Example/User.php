<?php namespace Drupal\laravel_example\Example;

class User extends \Eloquent{
  protected $primaryKey = 'uid';

  public function nodes(){
    return $this->hasMany('\\Drupal\\laravel_example\\Example\\Node', 'nid');
  }
}
