<?php

namespace Site\Classes;

use Site\Controller\PersonController;
use Site\Classes\Config;

class Bootstrap
{

  private $controller;
  private $action;

  private $routes = [
    '/'               => 'person_index',
    'add'             => 'person_add',
    'list'            => 'person_list',
    'adult/\d+'       => 'person_adult',
    'child/\d+'       => 'person_child',
    'delete/\w+/\d+'  => 'person_delete'
  ];

  public function __construct($request)
  {
    $uri = empty( $request->getParam(Config::URL_PARAM) ) ? '/' : $request->getParam(Config::URL_PARAM);
    foreach ( $this->routes as $key => $value ) {
      if ( preg_match("#^$key$#", $uri) ) {
        $uriParams = explode('_', $value);
        $this->action = $uriParams[1];
				$this->controller = new PersonController($request);
        $split = explode('/', $uri);
        $param = isset($split[1]) ? $split[1] : $split[0];
        if ( isset($split[2]) ) {
          $param = ['id' => $split[2], 'args' => $split[1]];
        }
				call_user_func([$this->controller, $this->action . 'Action'], $param);
      }
    }
  }
}