<?php

namespace Site\Classes;

use Site\Classes\Person;

class Adult extends Person 
{
  private $work;
  private $education;
  private $marrigeStatus;
  private $kids;

  public function __construct($firstName, $lastName, $gender, $age, $city, $address, $state, $work, $education, $marrigeStatus, $kids) 
  {
    parent::__construct($firstName, $lastName, $gender, $age, $city, $address, $state);
    $this->work = $work;
    $this->education = $education;
    $this->marrigeStatus = $marrigeStatus;
    $this->kids = $kids;
  }

  /**
   * Get the value of work
   */ 
  public function getWork()
  {
    return $this->work;
  }

  /**
   * Set the value of work
   *
   * @return  self
   */ 
  public function setWork($work)
  {
    $this->work = $work;

    return $this;
  }

  /**
   * Get the value of income
   */ 
  public function getIncome()
  {
    return $this->income;
  }

  /**
   * Set the value of income
   *
   * @return  self
   */ 
  public function setIncome($income)
  {
    $this->income = $income;

    return $this;
  }

  /**
   * Get the value of education
   */ 
  public function getEducation()
  {
    return $this->education;
  }

  /**
   * Set the value of education
   *
   * @return  self
   */ 
  public function setEducation($education)
  {
    $this->education = $education;

    return $this;
  }

  /**
   * Get the value of marrigeStatus
   */ 
  public function getMarrigeStatus()
  {
    return $this->marrigeStatus;
  }

  /**
   * Set the value of marrigeStatus
   *
   * @return  self
   */ 
  public function setMarrigeStatus($marrigeStatus)
  {
    $this->marrigeStatus = $marrigeStatus;

    return $this;
  }

  /**
   * Get the value of kids
   */ 
  public function getKids()
  {
    return $this->kids;
  }

  /**
   * Set the value of kids
   *
   * @return  self
   */ 
  public function setKids($kids)
  {
    $this->kids = $kids;

    return $this;
  }

  /**
   * Get the value of money
   */ 
  public function getMoney()
  {
    return $this->money;
  }

  /**
   * Set the value of money
   *
   * @return  self
   */ 
  public function setMoney($money)
  {
    $this->money = $money;

    return $this;
  }
  
}