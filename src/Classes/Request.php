<?php

namespace Site\Classes;

class Request 
{

  private $post;
  private $get;

  public function __construct($post = [], $get = [])
  {
    $this->post = $post;
    $this->get = $get;
  }

  public function query()
  {
    return $this->get;
  }

  public function request() 
  {
    return $this->post;
  }

  public function getParam($key, $default = '') 
  {
    return isset($this->get[$key]) ? $this->get[$key] : $default;
  }

  public function postParam($key, $default = '') 
  {
    return isset($this->post[$key]) ? $this->post[$key] : $default;
  }

}