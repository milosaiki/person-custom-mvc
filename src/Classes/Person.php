<?php

namespace Site\Classes;

use Site\Classes\ManageFile;
use Site\Classes\Config;

class Person {

  private $firstName;
  private $lastName;
  private $age;
  private $gender;
  private $city;
  private $address;
  private $state;


  public function __construct($firstName, $lastName, $gender, $age, $city, $address, $state) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->gender = $gender;
    $this->age = $age;
    $this->city = $city;
    $this->address = $address;
    $this->state = $state;
  }

  /**
   * Get the value of firstName
   */ 
  public function getFirstName()
  {
    return $this->firstName;
  }

  /**
   * Set the value of firstName
   *
   * @return  self
   */ 
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;

    return $this;
  }

  /**
   * Get the value of lastName
   */ 
  public function getLastName()
  {
    return $this->lastName;
  }

  /**
   * Set the value of lastName
   *
   * @return  self
   */ 
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;

    return $this;
  }

  /**
   * Get the value of age
   */ 
  public function getAge()
  {
    return $this->age;
  }

  /**
   * Set the value of age
   *
   * @return  self
   */ 
  public function setAge($age)
  {
    $this->age = $age;

    return $this;
  }

  /**
   * Get the value of city
   */ 
  public function getCity()
  {
    return $this->city;
  }

  /**
   * Set the value of city
   *
   * @return  self
   */ 
  public function setCity($city)
  {
    $this->city = $city;

    return $this;
  }

  /**
   * Get the value of address
   */ 
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * Set the value of address
   *
   * @return  self
   */ 
  public function setAddress($address)
  {
    $this->address = $address;

    return $this;
  }

  /**
   * Get the value of state
   */ 
  public function getState()
  {
    return $this->state;
  }

  /**
   * Set the value of state
   *
   * @return  self
   */ 
  public function setState($state)
  {
    $this->state = $state;

    return $this;
  }

  /**
   * Get the value of gender
   */ 
  public function getGender()
  {
    return $this->gender;
  }

  /**
   * Set the value of gender
   *
   * @return  self
   */ 
  public function setGender($gender)
  {
    $this->gender = $gender;

    return $this;
  }

  public function save($Object, $data)
  {
    $filename = $Object instanceof Adult ? Config::ADULT_FILENAME : Config::CHILD_FILENAME;
    (new ManageFile($filename))->createFile();
    $fp = fopen($filename, 'a');
    $num = $this->count($filename) + 1;
    array_unshift($data, $num);
    fputcsv($fp, $data);
    fclose($fp);
  }

  private function count($filename)
  {
    $fp = file($filename);
    return count($fp);
  }
  
}