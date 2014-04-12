<?php namespace Drupal\Laravel;

use Illuminate\Support\Facades\Facade;
use Illuminate\Container\Container;
use Illuminate\Config\Repository as Config;

class Application extends Container {
  private $app;


  public function __construct($path = ''){
    $this['path'] = $path;

    $this->app = $this;

    $this->registerConfig();

    $this->registerBaseBindings();

    $this->registerProviders();

    $this->registerFacedeApplication();

    $this->registerAliases();
  }

  private function getConfigLoader(){
    return new \Illuminate\Config\FileLoader(new \Illuminate\Filesystem\Filesystem, $this['path'].'/config');
  }

  private function registerBaseBindings(){
    if(!empty($this->app['config']['app.aliases']['Response'])){
      $this->app->singleton('request', function()
      {
          return \Illuminate\Http\Request::createFromGlobals();
      });
    }
    // Consider using UrlGenerator.
    /*
    $this->app->bindShared('url', function ($app)
    {
      return new \Illuminate\Routing\UrlGenerator();
    });*/
  }

  private function registerConfig($config = array()){
    $this->app->instance('config', $config = new Config(
      $this->app->getConfigLoader(), 'production'
    ));
  }

  /**
   * Register providers.
   */
  private function registerProviders(){
    $providers = $this['config']['app.providers'];
    $registered = array();
    foreach ($providers as $provider)
    {
        $instance = new $provider($this->app);
        $instance->register();
        $registered[] = $instance;
    }

    // Then boot them
    foreach ($registered as $instance)
    {
        $instance->boot();
    }
  }

  private function registerFacedeApplication(){
    Facade::setFacadeApplication($this->app);
  }

  private function registerAliases(){
    $aliases = $this['config']['app.aliases'];
    // Create alias
    foreach ($aliases as $key => $alias){
      class_alias($alias, $key);
    }
  }
}
