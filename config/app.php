<?php

/**
 * App configuration for Laravel module.
 * You can remove some options alias if you don't use.
 */



return array(
  'locale' => 'en',
  'fallback_locale' => 'en',
  'providers' => array(
    'Drupal\Laravel\CookieExtraServiceProvider',
    'Illuminate\Events\EventServiceProvider',
    'Illuminate\Filesystem\FilesystemServiceProvider', //used with File alias
    'Illuminate\Database\DatabaseServiceProvider',// used with DB alias
    'Illuminate\Translation\TranslationServiceProvider',//used with Request, Cookie alias.
    'Illuminate\Validation\ValidationServiceProvider',//used with Validator alias.

    'Drupal\Laravel\YAML\YAMLServiceProvider',//used with View alias.
    'Drupal\Laravel\ViewServiceProvider',//used with View alias.
  ),
  'aliases' => array(
    // Helper classes (option)
    'Arrays'    => 'Underscore\Types\Arrays',
    'Functions' => 'Underscore\Types\Functions',
    'Object'    => 'Underscore\Types\Object',
    'String'    => 'Underscore\Types\String',
    'Parse'     => 'Underscore\Parse',
    'Carbon'    => 'Carbon\Carbon',
    'Str'       => 'Illuminate\Support\Str',

    'YAML'      => 'Drupal\Laravel\YAML\Facades\YAML',

    'ClassLoader'     => 'Illuminate\Support\ClassLoader',
    // Facades classes.
    //
    // Container (require)
    'App'       => 'Illuminate\Support\Facades\App',
    'Event'     => 'Illuminate\Support\Facades\Event',
    // File (require)
    'File'      => 'Illuminate\Support\Facades\File',
     // DB (option)
    'DB'        => 'Illuminate\Support\Facades\DB',
    'Eloquent'  => 'Illuminate\Database\Eloquent\Model',
    'Schema'    => 'Illuminate\Support\Facades\Schema',
    // Request (option)
    'Request'   => 'Illuminate\Support\Facades\Request',
    'Cookie'    => 'Illuminate\Support\Facades\Cookie',
    'Input'     => 'Illuminate\Support\Facades\Input',
    'Response'  => 'Illuminate\Support\Facades\Response',

    // Validator (option)
    'Validator' => 'Illuminate\Support\Facades\Validator',
    //View (option)
    'ViewRender'      => 'Illuminate\Support\Facades\View',
  ),
);
