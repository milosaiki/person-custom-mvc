<?php

namespace Site\Classes;

class ManageFile
{

  private $filename;

  public function __construct($filename)
  {
    $this->filename = $filename;
  }

  public function createFile()
  {
    /** make directory if not exist */
    if (!file_exists( $this->filename) ) 
    {
      $file = fopen($this->filename, "w") or die("Unable to open file!");
    } else {
      $file = fopen($this->filename, "a") or die("Unable to open file!");
    }
  }


}