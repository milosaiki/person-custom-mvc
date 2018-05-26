<?php

namespace Site\Controller;

use Site\Classes\View;

class Controller
{

  protected $view;
  protected $request;

  public function __construct($request)
  {
    $this->view = new View();
    $this->request = $request;
  }
}